<?php

/**
 * Copyright (C) 2008-2012 FluxBB
 * based on code by Rickard Andersson copyright (C) 2002-2008 PunBB
 * License: http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 */

// Make sure no one attempts to run this script "directly"
if (!defined('PUN'))
	exit;

// Global variables
/* regular expression to match nested BBCode LIST tags
'%
\[list                # match opening bracket and tag name of outermost LIST tag
(?:=([1a*]))?+        # optional attribute capture in group 1
\]                    # closing bracket of outermost opening LIST tag
(                     # capture contents of LIST tag in group 2
  (?:                 # non capture group for either contents or whole nested LIST
    [^\[]*+           # unroll the loop! consume everything up to next [ (normal *)
    (?:               # (See "Mastering Regular Expressions" chapter 6 for details)
      (?!             # negative lookahead ensures we are NOT on [LIST*] or [/LIST]
        \[list        # opening LIST tag
        (?:=[1a*])?+  # with optional attribute
        \]            # closing bracket of opening LIST tag
        |             # or...
        \[/list\]     # a closing LIST tag
      )               # end negative lookahead assertion (we are not on a LIST tag)
      \[              # match the [ which is NOT the start of LIST tag (special)
      [^\[]*+         # consume everything up to next [ (normal *)
    )*+               # finish up "unrolling the loop" technique (special (normal*))*
  |                   # or...
    (?R)              # recursively match a whole nested LIST element
  )*                  # as many times as necessary until deepest nested LIST tag grabbed
)                     # end capturing contents of LIST tag into group 2
\[/list\]             # match outermost closing LIST tag
%iex' */
$re_list = '%\[list(?:=([1a*]))?+\]((?:[^\[]*+(?:(?!\[list(?:=[1a*])?+\]|\[/list\])\[[^\[]*+)*+|(?R))*)\[/list\]%i';

// Here you can add additional smilies if you like (please note that you must escape single quote and backslash)
// Load smilies cache - Visman
if (!isset($smilies))
{
	if (file_exists(FORUM_CACHE_DIR.'cache_smilies.php'))
		include FORUM_CACHE_DIR.'cache_smilies.php';
	else
	{
		if (!defined('FORUM_CACHE_FUNCTIONS_LOADED'))
			require PUN_ROOT.'include/cache.php';

		generate_smiley_cache();
		require FORUM_CACHE_DIR.'cache_smilies.php';
	}
}

//
// Make sure all BBCodes are lower case and do a little cleanup
//
function preparse_bbcode(string $text, array &$errors, bool $is_signature = false)
{
	global $pun_config, $lang_common, $lang_post, $re_list;

	$text = preg_replace('%('.str_replace(array('http://', 'https://', '.'), array('https?://', 'https?://', '\.'), $pun_config['o_base_url']).'/viewtopic\.php[^\[\]\s]+)(&search_hl=\d+)%ui', '$1', $text); // search HL - Visman

	// Remove empty tags
	while (($new_text = strip_empty_bbcode($text)) !== false)
	{
		if ($new_text != $text)
		{
			$text = $new_text;
			if ($new_text == '')
			{
				$errors[] = $lang_post['Empty after strip'];
				return '';
			}
		}
		else
			break;
	}

	if ($is_signature)
	{
		global $lang_profile;

		if (preg_match('%\[/?(?:quote|code|list|h|hr|size|after|spoiler)\b[^\]]*\]%i', $text))
			$errors[] = $lang_profile['Signature quote/code/list/h'];
	}

	// If the message contains a code tag we have to split it up (text within [code][/code] shouldn't be touched)
	if (strpos($text, '[code]') !== false && strpos($text, '[/code]') !== false)
		list($inside, $text) = extract_blocks($text, '[code]', '[/code]');

	// Tidy up lists
	$temp = preg_replace_callback($re_list, function($matches) { return preparse_list_tag($matches[2], $matches[1]); }, $text);

	// If the regex failed
	if (is_null($temp))
		$errors[] = $lang_common['BBCode list size error'];
	else
		$text = str_replace('*'."\0".']', '*]', $temp);

	if ($pun_config['o_make_links'] == '1')
		$text = do_clickable($text);

	// If we split up the message before we have to concatenate it together again (code tags)
	if (isset($inside))
	{
		$outside = explode("\1", $text);
		$text = '';

		$num_tokens = count($outside);
		for ($i = 0; $i < $num_tokens; ++$i)
		{
			$text .= $outside[$i];
			if (isset($inside[$i]))
				$text .= '[code]'.$inside[$i].'[/code]';
		}

		unset($inside);
	}

	$temp_text = false;
	if (empty($errors))
		$temp_text = preparse_tags($text, $errors, $is_signature);

	if ($temp_text !== false)
		$text = $temp_text;

	// Remove empty tags
	while (($new_text = strip_empty_bbcode($text)) !== false)
	{
		if ($new_text != $text)
		{
			$text = $new_text;
			if ($new_text == '')
			{
				$errors[] = $lang_post['Empty after strip'];
				break;
			}
		}
		else
			break;
	}

	return pun_trim($text);
}


//
// Strip empty bbcode tags from some text
//
function strip_empty_bbcode(string $text)
{
	// If the message contains a code tag we have to split it up (empty tags within [code][/code] are fine)
	if (strpos($text, '[code]') !== false && strpos($text, '[/code]') !== false)
		list($inside, $text) = extract_blocks($text, '[code]', '[/code]');

	// Remove empty tags
	while (!is_null($new_text = preg_replace('%\[(b|u|s|ins|del|em|i|h|colou?r|quote|img|imgl|imgr|url|email|list|topic|post|forum|user|hr|size|after|spoiler|right|center|justify|mono)(?:\=[^\]]*)?\]\s*\[/\1\]%', '', $text)))
	{
		if ($new_text != $text)
			$text = $new_text;
		else
			break;
	}

	// If we split up the message before we have to concatenate it together again (code tags)
	if (isset($inside))
	{
		$parts = explode("\1", $text);
		$text = '';
		foreach ($parts as $i => $part)
		{
			$text .= $part;
			if (isset($inside[$i]))
				$text .= '[code]'.$inside[$i].'[/code]';
		}
	}

	// Remove empty code tags
	while (!is_null($new_text = preg_replace('%\[(code)\]\s*\[/\1\]%', '', $text)))
	{
		if ($new_text != $text)
			$text = $new_text;
		else
			break;
	}

	return $text;
}


//
// Check the structure of bbcode tags and fix simple mistakes where possible
//
function preparse_tags(string $text, array &$errors, bool $is_signature = false)
{
	global $lang_common, $pun_config, $pun_user;

	// Start off by making some arrays of bbcode tags and what we need to do with each one

	// List of all the tags
	$tags = array('quote', 'code', 'b', 'i', 'u', 's', 'ins', 'del', 'em', 'color', 'colour', 'url', 'email', 'img', 'imgl', 'imgr', 'list', '*', 'h', 'topic', 'post', 'forum', 'user', 'size', 'spoiler', 'right', 'center', 'justify', 'mono');
	// List of tags that we need to check are open (You could not put b,i,u in here then illegal nesting like [b][i][/b][/i] would be allowed)
	$tags_opened = $tags;
	// and tags we need to check are closed (the same as above, added it just in case)
	$tags_closed = $tags;
	// Tags we can nest and the depth they can be nested to
	$tags_nested = array('quote' => $pun_config['o_quote_depth'], 'list' => 5, '*' => 5, 'spoiler' => 5);
	// Tags to ignore the contents of completely (just code)
	$tags_ignore = array('code');
	// Tags not allowed
	$tags_forbidden = array();
	// Block tags, block tags can only go within another block tag, they cannot be in a normal tag
	$tags_block = array('quote', 'code', 'list', 'h', '*', 'spoiler');
	// Inline tags, we do not allow new lines in these
	$tags_inline = array('b', 'i', 'u', 's', 'ins', 'del', 'em', 'color', 'colour', 'h', 'topic', 'post', 'forum', 'user');
	// Tags we trim interior space
	$tags_trim = array('img', 'imgl', 'imgr', 'url', 'email');
	// Tags we remove quotes from the argument
	$tags_quotes = array('url', 'email', 'img', 'imgl', 'imgr', 'topic', 'post', 'forum', 'user');
	// Tags we limit bbcode in
	$tags_limit_bbcode = array(
		'*' 	=> array('b', 'i', 'u', 's', 'ins', 'del', 'em', 'color', 'colour', 'url', 'email', 'list', 'img', 'imgl', 'imgr', 'code', 'topic', 'post', 'forum', 'user'),
		'list' 	=> array('*'),
		'url' 	=> array('img', 'imgr', 'imgl'),
		'email' => array('img', 'imgr', 'imgl'),
		'topic' => array('img', 'imgr', 'imgl'),
		'post'  => array('img', 'imgr', 'imgl'),
		'forum' => array('img', 'imgr', 'imgl'),
		'user'  => array('img', 'imgr', 'imgl'),
		'img' 	=> array(),
		'imgr' 	=> array(),
		'imgl' 	=> array(),
		'h'		=> array('b', 'i', 'u', 's', 'ins', 'del', 'em', 'color', 'colour', 'url', 'email', 'topic', 'post', 'forum', 'user'),
	);
	// Tags we can automatically fix bad nesting
	$tags_fix = array('quote', 'b', 'i', 'u', 's', 'ins', 'del', 'em', 'color', 'colour', 'url', 'email', 'h', 'topic', 'post', 'forum', 'user');

	// Disallow URL tags
	if ($pun_user['g_post_links'] != '1')
		$tags_forbidden[] = 'url';

	$split_text = preg_split('%(\[[\*a-zA-Z0-9-/]*?(?:=.*?)?\])%', $text, -1, PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY);

	$open_tags = array('fluxbb-bbcode');
	$open_args = array('');
	$opened_tag = 0;
	$new_text = '';
	$current_ignore = '';
	$current_nest = '';
	$current_depth = array();
	$limit_bbcode = $tags;
	$count_ignored = array();

	foreach ($split_text as $current)
	{
		if ($current == '')
			continue;

		// Are we dealing with a tag?
		if (substr($current, 0, 1) != '[' || substr($current, -1, 1) != ']')
		{
			// It's not a bbcode tag so we put it on the end and continue
			// If we are nested too deeply don't add to the end
			if ($current_nest)
				continue;

			$current = str_replace("\r\n", "\n", $current);
			$current = str_replace("\r", "\n", $current);
			if (in_array($open_tags[$opened_tag], $tags_inline) && strpos($current, "\n") !== false)
			{
				// Deal with new lines
				$split_current = preg_split('%(\n\n+)%', $current, -1, PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY);
				$current = '';

				if (!pun_trim($split_current[0], "\n")) // The first part is a linebreak so we need to handle any open tags first
					array_unshift($split_current, '');

				for ($i = 1; $i < count($split_current); $i += 2)
				{
					$temp_opened = array();
					$temp_opened_arg = array();
					$temp = $split_current[$i - 1];
					while (!empty($open_tags))
					{
						$temp_tag = array_pop($open_tags);
						$temp_arg = array_pop($open_args);

						if (in_array($temp_tag , $tags_inline))
						{
							array_push($temp_opened, $temp_tag);
							array_push($temp_opened_arg, $temp_arg);
							$temp .= '[/'.$temp_tag.']';
						}
						else
						{
							array_push($open_tags, $temp_tag);
							array_push($open_args, $temp_arg);
							break;
						}
					}
					$current .= $temp.$split_current[$i];
					$temp = '';
					while (!empty($temp_opened))
					{
						$temp_tag = array_pop($temp_opened);
						$temp_arg = array_pop($temp_opened_arg);
						if (empty($temp_arg))
							$temp .= '['.$temp_tag.']';
						else
							$temp .= '['.$temp_tag.'='.$temp_arg.']';
						array_push($open_tags, $temp_tag);
						array_push($open_args, $temp_arg);
					}
					$current .= $temp;
				}

				if (array_key_exists($i - 1, $split_current))
					$current .= $split_current[$i - 1];
			}

			if (in_array($open_tags[$opened_tag], $tags_trim))
				$new_text .= pun_trim($current);
			else
				$new_text .= $current;

			continue;
		}

		// Get the name of the tag
		$current_arg = '';
		if (strpos($current, '/') === 1)
		{
			$current_tag = substr($current, 2, -1);
		}
		else if (strpos($current, '=') === false)
		{
			$current_tag = substr($current, 1, -1);
		}
		else
		{
			$current_tag = substr($current, 1, strpos($current, '=')-1);
			$current_arg = substr($current, strpos($current, '=')+1, -1);
		}
		$current_tag = strtolower($current_tag);

		// Is the tag defined?
		if (!in_array($current_tag, $tags))
		{
			// It's not a bbcode tag so we put it on the end and continue
			if (!$current_nest)
				$new_text .= $current;

			continue;
		}

		// We definitely have a bbcode tag

		// Make the tag string lower case
		if ($equalpos = strpos($current,'='))
		{
			// We have an argument for the tag which we don't want to make lowercase
			if (strlen(substr($current, $equalpos)) == 2)
			{
				// Empty tag argument
				$errors[] = sprintf($lang_common['BBCode error empty attribute'], $current_tag);
				return false;
			}
			$current = strtolower(substr($current, 0, $equalpos)).substr($current, $equalpos);
		}
		else
			$current = strtolower($current);

		// This is if we are currently in a tag which escapes other bbcode such as code
		// We keep a count of ignored bbcodes (code tags) so we can nest them, but
		// only balanced sets of tags can be nested
		if ($current_ignore)
		{
			// Increase the current ignored tags counter
			if ('['.$current_ignore.']' == $current)
				$count_ignored[$current_tag]++;

			// Decrease the current ignored tags counter
			if ('[/'.$current_ignore.']' == $current)
				$count_ignored[$current_tag]--;

			if ('[/'.$current_ignore.']' == $current && $count_ignored[$current_tag] == 0)
			{
				// We've finished the ignored section
				$current = '[/'.$current_tag.']';
				$current_ignore = '';
				$count_ignored = array();
			}

			$new_text .= $current;

			continue;
		}

		// Is the tag forbidden?
		if (in_array($current_tag, $tags_forbidden))
		{
			if (isset($lang_common['BBCode error tag '.$current_tag.' not allowed']))
				$errors[] = sprintf($lang_common['BBCode error tag '.$current_tag.' not allowed']);
			else
				$errors[] = sprintf($lang_common['BBCode error tag not allowed'], $current_tag);

			return false;
		}

		if ($current_nest)
		{
			// We are currently too deeply nested so lets see if we are closing the tag or not
			if ($current_tag != $current_nest)
				continue;

			if (substr($current, 1, 1) == '/')
				$current_depth[$current_nest]--;
			else
				$current_depth[$current_nest]++;

			if ($current_depth[$current_nest] <= $tags_nested[$current_nest])
				$current_nest = '';

			continue;
		}

		// Check the current tag is allowed here
		if (!in_array($current_tag, $limit_bbcode) && $current_tag != $open_tags[$opened_tag])
		{
			$errors[] = sprintf($lang_common['BBCode error invalid nesting'], $current_tag, $open_tags[$opened_tag]);
			return false;
		}

		if (substr($current, 1, 1) == '/')
		{
			// This is if we are closing a tag
			if ($opened_tag == 0 || !in_array($current_tag, $open_tags))
			{
				// We tried to close a tag which is not open
				if (in_array($current_tag, $tags_opened))
				{
					$errors[] = sprintf($lang_common['BBCode error no opening tag'], $current_tag);
					return false;
				}
			}
			else
			{
				// Check nesting
				while (true)
				{
					// Nesting is ok
					if ($open_tags[$opened_tag] == $current_tag)
					{
						array_pop($open_tags);
						array_pop($open_args);
						$opened_tag--;
						break;
					}

					// Nesting isn't ok, try to fix it
					if (in_array($open_tags[$opened_tag], $tags_closed) && in_array($current_tag, $tags_closed))
					{
						if (in_array($current_tag, $open_tags))
						{
							$temp_opened = array();
							$temp_opened_arg = array();
							$temp = '';
							while (!empty($open_tags))
							{
								$temp_tag = array_pop($open_tags);
								$temp_arg = array_pop($open_args);

								if (!in_array($temp_tag, $tags_fix))
								{
									// We couldn't fix nesting
									$errors[] = sprintf($lang_common['BBCode error no closing tag'], $temp_tag);
									return false;
								}
								array_push($temp_opened, $temp_tag);
								array_push($temp_opened_arg, $temp_arg);

								if ($temp_tag == $current_tag)
									break;
								else
									$temp .= '[/'.$temp_tag.']';
							}
							$current = $temp.$current;
							$temp = '';
							array_pop($temp_opened);
							array_pop($temp_opened_arg);

							while (!empty($temp_opened))
							{
								$temp_tag = array_pop($temp_opened);
								$temp_arg = array_pop($temp_opened_arg);
								if (empty($temp_arg))
									$temp .= '['.$temp_tag.']';
								else
									$temp .= '['.$temp_tag.'='.$temp_arg.']';
								array_push($open_tags, $temp_tag);
								array_push($open_args, $temp_arg);
							}
							$current .= $temp;
							$opened_tag--;
							break;
						}
						else
						{
							// We couldn't fix nesting
							$errors[] = sprintf($lang_common['BBCode error no opening tag'], $current_tag);
							return false;
						}
					}
					else if (in_array($open_tags[$opened_tag], $tags_closed))
						break;
					else
					{
						array_pop($open_tags);
						array_pop($open_args);
						$opened_tag--;
					}
				}
			}

			if (in_array($current_tag, array_keys($tags_nested)))
			{
				if (isset($current_depth[$current_tag]))
					$current_depth[$current_tag]--;
			}

			if (in_array($open_tags[$opened_tag], array_keys($tags_limit_bbcode)))
				$limit_bbcode = $tags_limit_bbcode[$open_tags[$opened_tag]];
			else
				$limit_bbcode = $tags;

			$new_text .= $current;

			continue;
		}
		else
		{
			// We are opening a tag
			if (in_array($current_tag, array_keys($tags_limit_bbcode)))
				$limit_bbcode = $tags_limit_bbcode[$current_tag];
			else
				$limit_bbcode = $tags;

			if (in_array($current_tag, $tags_block) && !in_array($open_tags[$opened_tag], $tags_block) && $opened_tag != 0)
			{
				// We tried to open a block tag within a non-block tag
				$errors[] = sprintf($lang_common['BBCode error invalid nesting'], $current_tag, $open_tags[$opened_tag]);
				return false;
			}

			if (in_array($current_tag, $tags_ignore))
			{
				// It's an ignore tag so we don't need to worry about what's inside it
				$current_ignore = $current_tag;
				$count_ignored[$current_tag] = 1;
				$new_text .= $current;
				continue;
			}

			// Deal with nested tags
			if (in_array($current_tag, $open_tags) && !in_array($current_tag, array_keys($tags_nested)))
			{
				// We nested a tag we shouldn't
				$errors[] = sprintf($lang_common['BBCode error invalid self-nesting'], $current_tag);
				return false;
			}
			else if (in_array($current_tag, array_keys($tags_nested)))
			{
				// We are allowed to nest this tag

				if (isset($current_depth[$current_tag]))
					$current_depth[$current_tag]++;
				else
					$current_depth[$current_tag] = 1;

				// See if we are nested too deep
				if ($current_depth[$current_tag] > $tags_nested[$current_tag])
				{
					$current_nest = $current_tag;
					continue;
				}
			}

			// Remove quotes from arguments for certain tags
			if (strpos($current, '=') !== false && in_array($current_tag, $tags_quotes))
			{
				$current = preg_replace('%\['.$current_tag.'=("|\'|)(.*?)\\1\]\s*%i', '['.$current_tag.'=$2]', $current);
			}

			if (in_array($current_tag, array_keys($tags_limit_bbcode)))
				$limit_bbcode = $tags_limit_bbcode[$current_tag];

			$open_tags[] = $current_tag;
			$open_args[] = $current_arg;
			$opened_tag++;
			$new_text .= $current;
			continue;
		}
	}

	// Check we closed all the tags we needed to
	foreach ($tags_closed as $check)
	{
		if (in_array($check, $open_tags))
		{
			// We left an important tag open
			$errors[] = sprintf($lang_common['BBCode error no closing tag'], $check);
			return false;
		}
	}

	if ($current_ignore)
	{
		// We left an ignore tag open
		$errors[] = sprintf($lang_common['BBCode error no closing tag'], $current_ignore);
		return false;
	}

	return $new_text;
}


//
// Preparse the contents of [list] bbcode
//
function preparse_list_tag(string $content, string $type = '*')
{
	global $lang_common, $re_list;

	if (strlen($type) != 1)
		$type = '*';

	if (strpos($content,'[list') !== false)
	{
		$content = preg_replace_callback($re_list, function($matches) { return preparse_list_tag($matches[2], $matches[1]); }, $content);
	}

	$items = explode('[*]', str_replace('\"', '"', $content));

	$content = '';
	foreach ($items as $item)
	{
		if (pun_trim($item) != '')
			$content .= '[*'."\0".']'.str_replace('[/*]', '', pun_trim($item)).'[/*'."\0".']'."\n";
	}

	return '[list='.$type.']'."\n".$content.'[/list]';
}


//
// Truncate URL if longer than 55 characters (add http:// or ftp:// if missing)
//
function handle_url_tag(string $url, string $link = '', bool $bbcode = false)
{
	global $pun_config, $pun_user, $page_js;
	static $prefix;

	$url = pun_trim($url);

	// Deal with [url][img]http://example.com/test.png[/img][/url]
	if (preg_match('%<img src=\"(.*?)\"%', $url, $matches))
		return handle_url_tag($matches[1], $url, $bbcode);

	$full_url = str_replace(array(' ', '\'', '`', '"'), array('%20', '', '', ''), $url);
	if (strpos($url, 'www.') === 0) // If it starts with www, we add http://
		$full_url = 'http://'.$full_url;
	else if (strpos($url, 'ftp.') === 0) // Else if it starts with ftp, we add ftp://
		$full_url = 'ftp://'.$full_url;
	else if (strpos($url, '//') === 0) // Allow for protocol relative URLs that start with a double slash
		$full_url = get_current_protocol().':'.$full_url;
	else if (strpos($url, '/') === 0) // Allow for host relative URLs that start with a slash
		$full_url = get_base_url(true).$full_url;
	else if (!preg_match('#^([a-z0-9]{3,6})://#', $url)) // Else if it doesn't start with abcdef://, we add http://
		$full_url = 'http://'.$full_url;

	// Ok, not very pretty :-)
	if ($bbcode)
	{
		if ($full_url == $link)
			return '[url]'.$link.'[/url]';
		else
			return '[url='.$full_url.']'.$link.'[/url]';
	}
	else
	{
		if ($pun_config['o_board_redirect'] != '' && ($pun_user['is_guest'] || $pun_config['o_board_redirectg'] != '1') && !preg_match('/'.$pun_config['o_board_redirect'].'/i',$full_url))
		{
			if (! isset($prefix))
				$prefix = $pun_user['is_guest'] && ! $pun_user['is_bot'] ? 'csrf_hash=' . csrf_hash('re.php') . '&' : '';

			$full_url = 're.php?'.$prefix.'u='.urlencode(str_replace(['http://', 'https://', 'ftp://'], ['http___', 'https___', 'ftp___'], $full_url));
			$url = str_replace(['http://', 'https://', 'ftp://'], '', $url);
		}

		if ($link == '' || $link == $url)
		{
			$url = pun_htmlspecialchars_decode($url);
			$link = pun_strlen($url) > 55 ? mb_substr($url, 0 , 39).' … '.mb_substr($url, -10) : $url;
			$link = pun_htmlspecialchars($link);
		}
		else
			$link = stripslashes($link);

		$page_js['f']['media'] = 'js/media.min.js'; // Visman - media.js
		return '<a href="'.$full_url.'" rel="ugc">'.$link.'</a>';
	}
}


//
// Turns an URL from the [img] tag into an <img> tag or a <a href...> tag
//
function handle_img_tag(string $url, bool $is_signature = false, ?string $alt = null, string $float = '')
{
	global $lang_common, $pun_user;

	if (is_null($alt))
		$alt = basename($url);

	$img_tag = '<a href="'.$url.'" rel="ugc">&lt;'.$lang_common['Image link'].' - '.$alt.'&gt;</a>';

	if ($is_signature && $pun_user['show_img_sig'] != '0')
		$img_tag = '<img class="sigimage" src="'.$url.'" alt="'.$alt.'" />';
	else if (!$is_signature && $pun_user['show_img'] != '0')
		$img_tag = '<span class="postimg"><img src="'.$url.'" '.(($float != '') ? 'style="float: '.$float.'; clear: '.$float.'" ' : '').'alt="'.$alt.'" /></span>';

	return $img_tag;
}

//
// Email bbcode replace to <a href="mailto:... - Visman
//
function handle_email_tag(string $mail, ?string $body = null)
{
	if (null === $body)
		$body = $mail;

	$mail = implode('@', array_map('rawurlencode', array_map('rawurldecode', explode('@', $mail))));

	return "<a href=\"mailto:{$mail}\">{$body}</a>";
}

//
// Parse the contents of [list] bbcode
//
function handle_list_tag(string $content, string $type = '*')
{
	global $re_list;

	if (strlen($type) != 1)
		$type = '*';

	if (strpos($content,'[list') !== false)
	{
		$content = preg_replace_callback($re_list, function($matches) { return handle_list_tag($matches[2], $matches[1]); }, $content);
	}

	$content = preg_replace('#\s*\[\*\](.*?)\[/\*\]\s*#s', '<li><p>$1</p></li>', pun_trim($content));

	if ($type == '*')
		$content = '<ul>'.$content.'</ul>';
	else
		if ($type == 'a')
			$content = '<ol class="alpha">'.$content.'</ol>';
		else
			$content = '<ol class="decimal">'.$content.'</ol>';

	return '</p>'.$content.'<p>';
}

//
// ф-ия показывающая сколько прошло времени - Visman
//
function handle_time_tag(string $after_time)
{
	global $lang_common;

	if ($after_time == 0)
		return '';

	$content = array();
	$merged_sec = $after_time % 60;
	$merged_min = intval($after_time/60) % 60;
	$merged_hours = intval($after_time/3600) % 24;
	$merged_days = intval($after_time/86400);
	if ($merged_days > 0)
		$content[] = $merged_days.$lang_common['After time d'];
	if ($merged_hours > 0)
		$content[] = $merged_hours.$lang_common['After time H'];
	if ($merged_min > 0)
		$content[] = ($merged_min < 10 ? '0'.$merged_min : $merged_min).$lang_common['After time i'];
	if ($merged_sec > 0)
		$content[] = ($merged_sec < 10 ? '0'.$merged_sec : $merged_sec).$lang_common['After time s'];

	return pun_linebreaks(pun_trim('<span style="color: #808080"><em>'.$lang_common['After time'].' '.implode(' ', $content).':</em></span>'."\n"));

}

//
// Convert BBCodes to their HTML equivalent
//
function do_bbcode(string $text, bool $is_signature = false)
{
	global $lang_common, $pun_user, $pun_config, $re_list;

	if (strpos($text, '[quote') !== false)
	{
		$text = preg_replace('%\[quote\]\s*%', '</p><div class="quotebox"><blockquote><div><p>', $text);
		$text = preg_replace_callback('%\[quote=(&quot;|&\#039;|"|\'|)([^\r\n]*?)\\1\]%s', function($matches) use ($lang_common) { return '</p><div class="quotebox"><cite>'.str_replace(array('[', '\\"'), array('&#91;', '"'), $matches[2])." {$lang_common['wrote']}</cite><blockquote><div><p>"; }, $text);
		$text = preg_replace('%\s*\[\/quote\]%S', '</p></div></blockquote></div><p>', $text);
	}

	// Обрабатываем спойлер - Visman
	if (strpos($text, '[spoiler') !== false)
	{
		$text = str_replace('[spoiler]', "</p><div class=\"quotebox\" style=\"padding: 0px;\"><div onclick=\"var e,d,c=this.parentNode,a=c.getElementsByTagName('div')[1],b=this.getElementsByTagName('span')[0];if(a.style.display!=''){while(!d||!e||d==e){if(!c.parentNode)break;e=d;d=(window.getComputedStyle?getComputedStyle(c, null):c.currentStyle)['backgroundColor'];if(d=='transparent'||d=='rgba(0, 0, 0, 0)')d=e;c=c.parentNode;}a.style.display='';a.style.backgroundColor=d;b.innerHTML='&#9650;';}else{a.style.display='none';b.innerHTML='&#9660;';}\" style=\"font-weight: bold; cursor: pointer; font-size: 0.9em;\"><span style=\"padding: 0 5px;\">&#9660;</span>".$lang_common['Hidden text']."</div><div style=\"padding: 6px; margin: 0; display: none;\"><p>", $text);
		$text = preg_replace('%\[spoiler=(?P<quote>(?:&quot;|&\#039;|"|\'))?((?(quote)[^\r\n]+?|[^\r\n\]]++))(?(quote)(?P=quote))\]%', '</p><div class="quotebox" style="padding: 0px;"><div onclick="var e,d,c=this.parentNode,a=c.getElementsByTagName(\'div\')[1],b=this.getElementsByTagName(\'span\')[0];if(a.style.display!=\'\'){while(!d||!e||d==e){if(!c.parentNode)break;e=d;d=(window.getComputedStyle?getComputedStyle(c, null):c.currentStyle)[\'backgroundColor\'];if(d==\'transparent\'||d==\'rgba(0, 0, 0, 0)\')d=e;c=c.parentNode;}a.style.display=\'\';a.style.backgroundColor=d;b.innerHTML=\'&#9650;\';}else{a.style.display=\'none\';b.innerHTML=\'&#9660;\';}" style="font-weight: bold; cursor: pointer; font-size: 0.9em;"><span style="padding: 0 5px;">&#9660;</span>$2</div><div style="padding: 6px; margin: 0; display: none;"><p>', $text);
		$text = str_replace('[/spoiler]', '</p></div></div><p>', $text);
	}

	if (!$is_signature)
	{
		$pattern_callback[] = $re_list;
		$replace_callback[] = function($matches) { return handle_list_tag($matches[2], $matches[1]); };
	}

	$pattern[] = '%\[b\](.*?)\[/b\]%s';
	$pattern[] = '%\[i\](.*?)\[/i\]%s';
	$pattern[] = '%\[u\](.*?)\[/u\]%s';
	$pattern[] = '%\[s\](.*?)\[/s\]%s';
	$pattern[] = '%\[del\](.*?)\[/del\]%s';
	$pattern[] = '%\[ins\](.*?)\[/ins\]%s';
	$pattern[] = '%\[em\](.*?)\[/em\]%s';
	$pattern[] = '%\[colou?r=([a-zA-Z]{3,20}|\#[0-9a-fA-F]{6}|\#[0-9a-fA-F]{3})](.*?)\[/colou?r\]%s';
	$pattern[] = '%\[h\](.*?)\[/h\]%s';
	// дополнительные ббкоды - Visman
	$pattern[] = '%\[hr\]%';
	$pattern[] = '%\[size=([1-9]\d{0,2})](.*?)\[/size\]%s';
	$pattern[] = '%\[right\](.*?)\[/right\]%s';
	$pattern[] = '%\[center\](.*?)\[/center\]%s';
	$pattern[] = '%\[justify\](.*?)\[/justify\]%s';
	$pattern[] = '%\[mono\](.*?)\[/mono\]%s';

	$replace[] = '<strong>$1</strong>';
	$replace[] = '<em>$1</em>';
	$replace[] = '<span class="bbu">$1</span>';
	$replace[] = '<span class="bbs">$1</span>';
	$replace[] = '<del>$1</del>';
	$replace[] = '<ins>$1</ins>';
	$replace[] = '<em>$1</em>';
	$replace[] = '<span style="color: $1">$2</span>';
	$replace[] = '</p><h5>$1</h5><p>';
	// дополнительные ббкоды - Visman
	$replace[] = '</p><hr /><p>';
	$replace[] = '<span style="font-size: $1px">$2</span>';
	$replace[] = '</p><p style="text-align: right">$1</p><p>';
	$replace[] = '</p><p style="text-align: center">$1</p><p>';
	$replace[] = '</p><p style="text-align: justify">$1</p><p>';
	$replace[] = '<code>$1</code>';

	if (($is_signature && $pun_config['p_sig_img_tag'] == '1') || (!$is_signature && $pun_config['p_message_img_tag'] == '1'))
	{
		$pattern_callback[] = '%\[img\]((ht|f)tps?://)([^\s<"\[\x00-\x1f]*?)\[/img\]%';
		$pattern_callback[] = '%\[img=([^\[\x00-\x1f]*?)\]((ht|f)tps?://)([^\s<"\[\x00-\x1f]*?)\[/img\]%';
		if ($is_signature)
		{
			$replace_callback[] = function($matches) { return handle_img_tag($matches[1].$matches[3], true); };
			$replace_callback[] = function($matches) { return handle_img_tag($matches[2].$matches[4], true, $matches[1]); };
		}
		else
		{
			$replace_callback[] = function($matches) { return handle_img_tag($matches[1].$matches[3], false); };
			$replace_callback[] = function($matches) { return handle_img_tag($matches[2].$matches[4], false, $matches[1]); };

			$pattern_callback[] = '%\[imgr\]((ht|f)tps?://)([^\s<"\[\x00-\x1f]*?)\[/imgr\]%';
			$pattern_callback[] = '%\[imgr=([^\[\x00-\x1f]*?)\]((ht|f)tps?://)([^\s<"\[\x00-\x1f]*?)\[/imgr\]%';
			$pattern_callback[] = '%\[imgl\]((ht|f)tps?://)([^\s<"\[\x00-\x1f]*?)\[/imgl\]%';
			$pattern_callback[] = '%\[imgl=([^\[\x00-\x1f]*?)\]((ht|f)tps?://)([^\s<"\[\x00-\x1f]*?)\[/imgl\]%';

			$replace_callback[] = function($matches) { return handle_img_tag($matches[1].$matches[3], false, null, 'right'); };
			$replace_callback[] = function($matches) { return handle_img_tag($matches[2].$matches[4], false, $matches[1], 'right'); };
			$replace_callback[] = function($matches) { return handle_img_tag($matches[1].$matches[3], false, null, 'left'); };
			$replace_callback[] = function($matches) { return handle_img_tag($matches[2].$matches[4], false, $matches[1], 'left'); };
		}
	}

	$pattern_callback[] = '%\[after=(\d+)\]%';
	$pattern_callback[] = '%\[url\]([^\[\x00-\x1f]*?)\[/url\]%';
	$pattern_callback[] = '%\[url=([^\[\x00-\x1f]+?)\]([^\x00\x01]*?)\[/url\]%';
	$pattern_callback[] = '%\[email\]([^\[\x00-\x1f]+?@[^\[\x00-\x1f]+?)\[/email\]%';
	$pattern_callback[] = '%\[email=([^\[\x00-\x1f]+?@[^\[\x00-\x1f]+?)\]([^\x00\x01]*?)\[/email\]%';
	$pattern_callback[] = '%\[topic\]([1-9]\d*)\[/topic\]%';
	$pattern_callback[] = '%\[topic=([1-9]\d*)\](.*?)\[/topic\]%';
	$pattern_callback[] = '%\[post\]([1-9]\d*)\[/post\]%';
	$pattern_callback[] = '%\[post=([1-9]\d*)\](.*?)\[/post\]%';
	$pattern_callback[] = '%\[forum\]([1-9]\d*)\[/forum\]%';
	$pattern_callback[] = '%\[forum=([1-9]\d*)\](.*?)\[/forum\]%';
	$pattern_callback[] = '%\[user\]([1-9]\d*)\[/user\]%';
	$pattern_callback[] = '%\[user=([1-9]\d*)\](.*?)\[/user\]%';

	$replace_callback[] = function($matches) { return handle_time_tag($matches[1]); };
	$replace_callback[] = function($matches) { return handle_url_tag($matches[1]); };
	$replace_callback[] = function($matches) { return handle_url_tag($matches[1], $matches[2]); };
	$replace_callback[] = function($matches) { return handle_email_tag($matches[1]); };
	$replace_callback[] = function($matches) { return handle_email_tag($matches[1], $matches[2]); };
	$replace_callback[] = function($matches) { return handle_url_tag(get_base_url(true).'/viewtopic.php?id='.$matches[1]); };
	$replace_callback[] = function($matches) { return handle_url_tag(get_base_url(true).'/viewtopic.php?id='.$matches[1], $matches[2]); };
	$replace_callback[] = function($matches) { return handle_url_tag(get_base_url(true).'/viewtopic.php?pid='.$matches[1].'#p'.$matches[1]); };
	$replace_callback[] = function($matches) { return handle_url_tag(get_base_url(true).'/viewtopic.php?pid='.$matches[1].'#p'.$matches[1], $matches[2]); };
	$replace_callback[] = function($matches) { return handle_url_tag(get_base_url(true).'/viewforum.php?id='.$matches[1]); };
	$replace_callback[] = function($matches) { return handle_url_tag(get_base_url(true).'/viewforum.php?id='.$matches[1], $matches[2]); };
	$replace_callback[] = function($matches) { return handle_url_tag(get_base_url(true).'/profile.php?id='.$matches[1]); };
	$replace_callback[] = function($matches) { return handle_url_tag(get_base_url(true).'/profile.php?id='.$matches[1], $matches[2]); };

	// This thing takes a while! :)
	$text = preg_replace($pattern, $replace, $text);
	$count = count($pattern_callback);
	for($i = 0; $i < $count; $i++)
	{
		$text = preg_replace_callback($pattern_callback[$i], $replace_callback[$i], $text);
	}
	return $text;
}


//
// Make hyperlinks clickable
//
function do_clickable(string $text)
{
	$text = ' '.$text;
	$text = preg_replace_callback('%(?<=[\s\]\)])(<)?(\[)?(\()?([\'"]?)(https?|ftp|news){1}://([\p{L}\p{N}\-]+\.([\p{L}\p{N}\-]+\.)*[\p{L}\p{N}]+(:[0-9]+)?(/(?:[^\s\[]*[^\s.,?!\[;:-])?)?)\4(?(3)(\)))(?(2)(\]))(?(1)(>))(?![^\s]*\[/(?:url|img|imgr|imgl)\])%ui', function ($matches) { return stripslashes($matches[1].$matches[2].$matches[3].$matches[4]).handle_url_tag($matches[5]."://".$matches[6], $matches[5]."://".$matches[6], true).stripslashes($matches[4].forum_array_key($matches, 10).forum_array_key($matches, 11).forum_array_key($matches, 12)); }, $text);
	$text = preg_replace_callback('%(?<=[\s\]\)])(<)?(\[)?(\()?([\'"]?)(www|ftp)\.(([\p{L}\p{N}\-]+\.)+[\p{L}\p{N}]+(:[0-9]+)?(/(?:[^\s\[]*[^\s.,?!\[;:-])?)?)\4(?(3)(\)))(?(2)(\]))(?(1)(>))(?![^\s]*\[/(?:url|img|imgr|imgl)\])%ui', function ($matches) { return stripslashes($matches[1].$matches[2].$matches[3].$matches[4]).handle_url_tag($matches[5].".".$matches[6], $matches[5].".".$matches[6], true).stripslashes($matches[4].forum_array_key($matches, 10).forum_array_key($matches, 11).forum_array_key($matches, 12)); }, $text);

	return substr($text, 1);
}


//
// Return an array key, if it exists, otherwise return an empty string
//
function forum_array_key(array $arr, int $key)
{
	return $arr[$key] ?? '';
}


//
// Convert a series of smilies to images
//
function do_smilies(string $text)
{
	global $smilies;
	static $base;

	if (! isset($base))
		$base = pun_htmlspecialchars(get_base_url(true));

	foreach ($smilies as $smiley_text => $smiley_img)
	{
		if (strpos($text, $smiley_text) !== false)
		{
			$smiley_img = pun_htmlspecialchars($smiley_img);
			$text = preg_replace('%(?<=\s|^)'.preg_quote($smiley_text, '%').'(?![\p{L}\p{N}])%u', '<img src="'.$base.'/img/smilies/'.$smiley_img.'" alt="'.substr($smiley_img, 0, strrpos($smiley_img, '.')).'" />', $text);
		}
	}

	return $text;
}


//
// Parse message text
//
function parse_message(string $text, bool $hide_smilies)
{
	global $pun_config, $lang_common, $pun_user;

	if ($pun_config['o_censoring'] == '1')
		$text = censor_words($text);

	// Convert applicable characters to HTML entities
	$text = pun_htmlspecialchars($text);

	// If the message contains a code tag we have to split it up (text within [code][/code] shouldn't be touched)
	if (strpos($text, '[code]') !== false && strpos($text, '[/code]') !== false)
		list($inside, $text) = extract_blocks($text, '[code]', '[/code]');

	if ($pun_config['p_message_bbcode'] == '1' && strpos($text, '[') !== false && strpos($text, ']') !== false)
		$text = do_bbcode($text);

	$text = sva_do_for_only_text($text, $pun_config['o_smilies'] == '1' && $pun_user['show_smilies'] == '1' && $hide_smilies == '0');

	// Deal with newlines, tabs and multiple spaces
	$pattern = array("\n", "\t", '  ', '  ');
	$replace = array('<br />', '&#160; &#160; ', '&#160; ', ' &#160;');
	$text = str_replace($pattern, $replace, $text);

	// If we split up the message before we have to concatenate it together again (code tags)
	if (isset($inside))
	{
		$parts = explode("\1", $text);
		$text = '';
		foreach ($parts as $i => $part)
		{
			$text .= $part;
			if (isset($inside[$i]))
			{
				$num_lines = substr_count($inside[$i], "\n");
				$text .= '</p><div class="codebox"><pre'.(($num_lines > 28) ? ' class="vscroll"' : '').'><code>'.pun_trim($inside[$i], "\n\r").'</code></pre></div><p>';
			}
		}
	}

	// search HL - Visman
	global $string_shl;
	if (!empty($string_shl))
	{
		$pattern = '%(?<=[^\p{L}\p{N}])('.str_replace(array('*', '\'', 'е'), array('(?:[\p{L}\p{N}]|&#039;|’|`|-)*', '(?:&#039;|’|`)', '[её]'), $string_shl).')(?![\p{L}\p{N}])(?=[^>]*<)%ui';
		$text = preg_replace($pattern, '<span class="shlight">$1</span>', '>'.$text.'<');
		$text = substr($text, 1, -1);
	}
	// search HL - Visman

	return clean_paragraphs($text);
}


//
// Clean up paragraphs and line breaks
//
function clean_paragraphs(string $text)
{
	// Add paragraph tag around post, but make sure there are no empty paragraphs

	$text = '<p>'.$text.'</p>';

	// Replace any breaks next to paragraphs so our replace below catches them
	$text = preg_replace('%(</?p>)(?:\s*?<br />){1,2}%i', '$1', $text);
	$text = preg_replace('%(?:<br />\s*?){1,2}(</?p>)%i', '$1', $text);

	// Remove any empty paragraph tags (inserted via quotes/lists/code/etc) which should be stripped
	$text = str_replace('<p></p>', '', $text);

	$text = preg_replace('%<br />\s*?<br />%i', '</p><p>', $text);

	$text = str_replace('<p><br />', '<br /><p>', $text);
	$text = str_replace('<br /></p>', '</p><br />', $text);
	$text = str_replace('<p></p>', '<br /><br />', $text);

	return $text;
}


//
// Parse signature text
//
function parse_signature(string $text)
{
	global $pun_config, $lang_common, $pun_user;

	if ($pun_config['o_censoring'] == '1')
		$text = censor_words($text);

	// Convert applicable characters to HTML entities
	$text = pun_htmlspecialchars($text);

	if ($pun_config['p_sig_bbcode'] == '1' && strpos($text, '[') !== false && strpos($text, ']') !== false)
		$text = do_bbcode($text, true);

	$text = sva_do_for_only_text($text, $pun_config['o_smilies_sig'] == '1' && $pun_user['show_smilies'] == '1');


	// Deal with newlines, tabs and multiple spaces
	$pattern = array("\n", "\t", '  ', '  ');
	$replace = array('<br />', '&#160; &#160; ', '&#160; ', ' &#160;');
	$text = str_replace($pattern, $replace, $text);

	return clean_paragraphs($text);
}


//
// Обработчик для текста, но не для кода html тегов - Visman
//
function sva_do_for_only_text(string $text, bool $do_smilies)
{
	if (! $do_smilies || '' === $text)
		return $text;

	if (false === strpos($text, '<'))
		$arr = [$text];
	else
		$arr = preg_split('%(<[^>]*+>)%', $text, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

	foreach ($arr as &$cur)
	{
		if ('<' === $cur[0])
			continue;

		if ($do_smilies)
			$cur = do_smilies($cur);
	}
	unset($cur);

	return implode('', $arr);
}
