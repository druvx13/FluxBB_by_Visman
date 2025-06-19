<?php

// Prevent direct script execution
if (!defined('PUN_ROOT')) {
    exit;
}

class addon_latest_posts extends flux_addon
{
    public function register(flux_addon_manager $manager)
    {
        // This addon primarily provides a static method to generate HTML.
        // No specific PHP hook registrations are needed here as the display
        // will be managed by including a template snippet that calls generate_html(),
        // or by themes directly calling this method.
    }

    public static function generate_html()
    {
        global $db, $pun_config, $pun_user;

        // Attempt to load the language file for this plugin.
        // $lang_latest_posts should be populated by this.
        if (file_exists(PUN_ROOT.'lang/'.$pun_user['language'].'/admin_plugin_latest_posts.php')) {
            require_once PUN_ROOT.'lang/'.$pun_user['language'].'/admin_plugin_latest_posts.php';
        } elseif (file_exists(PUN_ROOT.'lang/English/admin_plugin_latest_posts.php')) {
            require_once PUN_ROOT.'lang/English/admin_plugin_latest_posts.php';
        } else {
            // Fallback if language file is somehow missing
            $lang_latest_posts = array(
                'Latest posts'      => 'Latest Posts',
                'Feature disabled'  => 'The latest posts feature is currently disabled.',
                'No recent posts'   => 'No recent posts to display.',
                'by'                => 'by',
            );
        }

        if (!isset($pun_config['o_latest_posts_enabled']) || $pun_config['o_latest_posts_enabled'] == '0') {
            return '<div class="main-widget"><div class="panel panel-default"><div class="container"><p>'.($lang_latest_posts['Feature disabled'] ?? 'The latest posts feature is currently disabled.').'</p></div></div></div>';
        }

        $count = isset($pun_config['o_latest_posts_count']) ? intval($pun_config['o_latest_posts_count']) : 5;
        $title_len = isset($pun_config['o_latest_posts_title_len']) ? intval($pun_config['o_latest_posts_title_len']) : 50;
        $show_author = isset($pun_config['o_latest_posts_show_author']) ? $pun_config['o_latest_posts_show_author'] == '1' : true;
        $show_date = isset($pun_config['o_latest_posts_show_date']) ? $pun_config['o_latest_posts_show_date'] == '1' : true;

        if ($count <= 0) {
            return ''; // Nothing to display if count is zero or negative
        }

        $query = 'SELECT p.id AS post_id, p.poster, p.posted, t.id AS topic_id, t.subject, t.forum_id, f.forum_name '.
                 'FROM '.$db->prefix.'posts AS p '.
                 'INNER JOIN '.$db->prefix.'topics AS t ON p.topic_id=t.id '.
                 'INNER JOIN '.$db->prefix.'forums AS f ON t.forum_id=f.id '.
                 'LEFT JOIN '.$db->prefix.'forum_perms AS fp ON (fp.forum_id=f.id AND fp.group_id='.$pun_user['g_id'].') '.
                 'WHERE (fp.read_forum IS NULL OR fp.read_forum=1) AND t.moved_to IS NULL '.
                 'ORDER BY p.posted DESC '.
                 'LIMIT '.$count;

        $result = $db->query($query);

        if (!$result) {
            // error('Failed to fetch latest posts', __FILE__, __LINE__, $db->error());
            // For a user-facing addon, perhaps better to silently fail or show a generic error.
            // For now, let's return an empty string if there's a DB error.
            return '';
        }

        if ($db->num_rows($result) == 0) {
            return '<div class="main-widget" id="latest-posts-addon"><div class="panel panel-default"><div class="container"><p>'.($lang_latest_posts['No recent posts'] ?? 'No recent posts to display.').'</p></div></div></div>';
        }

        $output = '<div id="latest-posts-addon" class="main-widget">'."\n";
        $output .= "\t\t\t".'<h2><span>'.($lang_latest_posts['Latest posts'] ?? 'Latest Posts').'</span></h2>'."\n";
        $output .= "\t\t\t".'<div class="panel panel-default">'."\n";
        $output .= "\t\t\t\t".'<div class="container">'."\n";
        $output .= "\t\t\t\t\t".'<ul class="latest-posts-list">'."\n";

        while ($post = $db->fetch_assoc($result)) {
            $post_url = forum_link($GLOBALS['forum_url']['post'], array($post['post_id'])).'#p'.$post['post_id'];
            $subject_display = pun_truncate(pun_htmlspecialchars($post['subject']), $title_len);

            $output .= "\t\t\t\t\t\t".'<li>'."\n";
            $output .= "\t\t\t\t\t\t\t".'<a href="'.$post_url.'" title="'.pun_htmlspecialchars($post['subject']).'">'.$subject_display.'</a>'."\n";

            if ($show_author || $show_date) {
                $output .= "\t\t\t\t\t\t\t".'<small class="text-muted">';
                if ($show_author && !empty($post['poster'])) {
                    $output .= ' '.($lang_latest_posts['by'] ?? 'by').' <strong>'.pun_htmlspecialchars($post['poster']).'</strong>';
                }
                if ($show_date) {
                    $output .= ' ('.format_time($post['posted']).')';
                }
                $output .= '</small>'."\n";
            }
            $output .= "\t\t\t\t\t\t".'</li>'."\n";
        }
        $db->free_result($result);

        $output .= "\t\t\t\t\t".'</ul>'."\n";
        $output .= "\t\t\t\t".'</div>'."\n";
        $output .= "\t\t\t".'</div>'."\n";
        $output .= "\t\t".'</div>'."\n";

        return $output;
    }
}
