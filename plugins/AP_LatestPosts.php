<?php

// Make sure no one attempts to run this script "directly"
if (!defined('FORUM')) {
    exit;
}

// Tell admin_loader.php that this is indeed a plugin and that it is loaded
define('FORUM_PLUGIN_LOADED', 1);

// Plugin metadata
$plugin_name = 'Latest Posts';
$plugin_version = '1.0.0';

// Load language file
if (file_exists(FORUM_ROOT.'lang/'.$forum_user['language'].'/admin_plugin_latest_posts.php')) {
    require FORUM_ROOT.'lang/'.$forum_user['language'].'/admin_plugin_latest_posts.php';
} else {
    require FORUM_ROOT.'lang/English/admin_plugin_latest_posts.php';
}

// Handle POST request to save settings
if (isset($_POST['save_settings'])) {
    // Sanitize and validate input
    $form = array(
        'latest_posts_enabled'      => isset($_POST['form']['latest_posts_enabled']) ? '1' : '0',
        'latest_posts_count'        => intval($_POST['form']['latest_posts_count']),
        'latest_posts_title_len'    => intval($_POST['form']['latest_posts_title_len']),
        'latest_posts_show_author'  => isset($_POST['form']['latest_posts_show_author']) ? '1' : '0',
        'latest_posts_show_date'    => isset($_POST['form']['latest_posts_show_date']) ? '1' : '0',
    );

    // Validate values
    if ($form['latest_posts_count'] < 1) {
        $form['latest_posts_count'] = 5; // Default value
    }
    if ($form['latest_posts_title_len'] < 10) {
        $form['latest_posts_title_len'] = 50; // Default value
    }

    // Update config
    foreach ($form as $key => $value) {
        if (isset($forum_config['o_'.$key]) || $forum_config['o_'.$key] === null) {
            $db->query('UPDATE '.$db->prefix.'config SET conf_value = \''.$db->escape($value).'\' WHERE conf_name = \'o_'.$db->escape($key).'\'') or error('Unable to update config value for o_'.$key, __FILE__, __LINE__, $db->error());
        } else {
            $db->query('INSERT INTO '.$db->prefix.'config (conf_name, conf_value) VALUES(\'o_'.$db->escape($key).'\', \''.$db->escape($value).'\')') or error('Unable to insert config value for o_'.$key, __FILE__, __LINE__, $db->error());
        }
    }

    // Regenerate the config cache
    if (!defined('FORUM_CACHE_FUNCTIONS_LOADED')) {
        require FORUM_ROOT.'include/cache.php';
    }
    generate_config_cache();

    redirect(forum_link($forum_url['admin_plugins_setup']), $lang_admin_plugin_latest_posts['Settings saved']);
}

// Add plugin to admin menu
$forum_admin_menu['Latest Posts'] = array(
    'href' => forum_link($forum_url['admin_plugins_setup'], array('plugin' => basename(__FILE__, '.php'))),
    'active' => basename($_GET['plugin'] ?? '', '.php') == basename(__FILE__, '.php'),
);


// Display the admin page
?>
    <div class="plugin blockform">
        <h2><span><?php echo $plugin_name . ' v' . $plugin_version ?></span></h2>
        <div class="box">
            <div class="inbox">
                <p><?php echo $lang_admin_plugin_latest_posts['Plugin description'] ?? 'This plugin displays the latest posts on your forum.'; ?></p>
            </div>
        </div>

        <h2 class="block2"><span><?php echo $lang_admin_plugin_latest_posts['Settings'] ?? 'Settings'; ?></span></h2>
        <div class="box">
            <form id="latest_posts_settings" method="post" action="<?php echo forum_link($forum_url['admin_plugins_setup'], array('plugin' => basename(__FILE__, '.php'))); ?>">
                <div class="inform">
                    <fieldset>
                        <legend><?php echo $lang_admin_plugin_latest_posts['General settings'] ?? 'General settings'; ?></legend>
                        <div class="infldset">
                            <table class="aligntop">
                                <tr>
                                    <th scope="row"><?php echo $lang_admin_plugin_latest_posts['Enable plugin'] ?? 'Enable plugin'; ?></th>
                                    <td>
                                        <input type="checkbox" name="form[latest_posts_enabled]" value="1" <?php echo ($forum_config['o_latest_posts_enabled'] ?? '0') == '1' ? 'checked="checked"' : ''; ?> />
                                        <span><?php echo $lang_admin_plugin_latest_posts['Enable plugin help'] ?? 'Display the latest posts on the forum index.'; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo $lang_admin_plugin_latest_posts['Number of posts'] ?? 'Number of posts to display'; ?></th>
                                    <td>
                                        <input type="number" name="form[latest_posts_count]" size="5" maxlength="3" value="<?php echo $forum_config['o_latest_posts_count'] ?? '5'; ?>" />
                                        <span><?php echo $lang_admin_plugin_latest_posts['Number of posts help'] ?? 'Enter the number of latest posts to show (default: 5).'; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo $lang_admin_plugin_latest_posts['Title length'] ?? 'Maximum title length'; ?></th>
                                    <td>
                                        <input type="number" name="form[latest_posts_title_len]" size="5" maxlength="3" value="<?php echo $forum_config['o_latest_posts_title_len'] ?? '50'; ?>" />
                                        <span><?php echo $lang_admin_plugin_latest_posts['Title length help'] ?? 'Maximum number of characters for post titles (default: 50).'; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo $lang_admin_plugin_latest_posts['Show author'] ?? 'Show post author'; ?></th>
                                    <td>
                                        <input type="checkbox" name="form[latest_posts_show_author]" value="1" <?php echo ($forum_config['o_latest_posts_show_author'] ?? '1') == '1' ? 'checked="checked"' : ''; ?> />
                                        <span><?php echo $lang_admin_plugin_latest_posts['Show author help'] ?? 'Display the author of the post.'; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo $lang_admin_plugin_latest_posts['Show date'] ?? 'Show post date'; ?></th>
                                    <td>
                                        <input type="checkbox" name="form[latest_posts_show_date]" value="1" <?php echo ($forum_config['o_latest_posts_show_date'] ?? '1') == '1' ? 'checked="checked"' : ''; ?> />
                                        <span><?php echo $lang_admin_plugin_latest_posts['Show date help'] ?? 'Display the date of the post.'; ?></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </fieldset>
                </div>
                <p class="submitend"><input type="submit" name="save_settings" value="<?php echo $lang_admin_plugin_latest_posts['Save settings'] ?? 'Save settings'; ?>" /></p>
            </form>
        </div>

        <h2 class="block2"><span><?php echo $lang_admin_plugin_latest_posts['Installation instructions'] ?? 'Installation Instructions'; ?></span></h2>
        <div class="box">
            <div class="inbox">
                <p><?php echo $lang_admin_plugin_latest_posts['Instructions intro'] ?? 'To display the latest posts on your forum, you need to perform the following steps:'; ?></p>
                <ol>
                    <li>
                        <strong><?php echo $lang_admin_plugin_latest_posts['Create view file title'] ?? 'Create the view file:'; ?></strong>
                        <p><?php echo sprintf($lang_admin_plugin_latest_posts['Create view file desc'] ?? 'Create a new file named %s in the %s directory with the following content:', '<code>include/user/latest_posts_view.php</code>', '<code>include/user/</code>'); ?></p>
<pre><code>&lt;?php

if (!defined('FORUM_ROOT')) {
    exit;
}

// Only display if the plugin is enabled and there are posts to show
if ($forum_config['o_latest_posts_enabled'] == '1' && isset($latest_posts) && !empty($latest_posts)): ?&gt;
&lt;div id="latest-posts" class="main-widget"&gt;
    &lt;h2&gt;&lt;span&gt;&lt;?php echo $lang_latest_posts['Latest posts']; ?&gt;&lt;/span&gt;&lt;/h2&gt;
    &lt;div class="panel panel-default"&gt;
        &lt;div class="container"&gt;
            &lt;ul class="latest-posts-list"&gt;
            &lt;?php foreach ($latest_posts as $post): ?&gt;
                &lt;li&gt;
                    &lt;a href="&lt;?php echo $post['url']; ?&gt;" title="&lt;?php echo $post['subject']; ?&gt;"&gt;
                        &lt;?php echo $post['subject_display']; ?&gt;
                    &lt;/a&gt;
                    &lt;?php if ($forum_config['o_latest_posts_show_author'] == '1' || $forum_config['o_latest_posts_show_date'] == '1'): ?&gt;
                    &lt;small class="text-muted"&gt;
                        &lt;?php if ($forum_config['o_latest_posts_show_author'] == '1' && !empty($post['poster'])): ?&gt;
                            &lt;?php echo $lang_latest_posts['by']; ?&gt; &lt;strong&gt;&lt;?php echo $post['poster']; ?&gt;&lt;/strong&gt;
                        &lt;?php endif; ?&gt;
                        &lt;?php if ($forum_config['o_latest_posts_show_date'] == '1'): ?&gt;
                            (&lt;?php echo format_time($post['posted']); ?&gt;)
                        &lt;?php endif; ?&gt;
                    &lt;/small&gt;
                    &lt;?php endif; ?&gt;
                &lt;/li&gt;
            &lt;?php endforeach; ?&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;?php endif; ?&gt;
</code></pre>
                    </li>
                    <li>
                        <strong><?php echo $lang_admin_plugin_latest_posts['Include view file title'] ?? 'Include the view file in your template:'; ?></strong>
                        <p><?php echo sprintf($lang_admin_plugin_latest_posts['Include view file desc'] ?? 'Open the %s file (or your custom template file) and find a suitable place to include the latest posts. A good place is usually before the footer. Add the following line:', '<code>main.tpl</code>'); ?></p>
                        <pre><code>&lt;pun_include "latest_posts_view.php"&gt;</code></pre>
                        <p><?php echo $lang_admin_plugin_latest_posts['Include view file example'] ?? 'For example, you might place it before the line that includes the footer:'; ?></p>
<pre><code>...
&lt;pun_include "latest_posts_view.php"&gt;
&lt;pun_include "footer.php"&gt;
...
</code></pre>
                    </li>
                     <li>
                        <strong><?php echo $lang_admin_plugin_latest_posts['Hook instruction title'] ?? 'Add the hook to load posts:'; ?></strong>
                        <p><?php echo $lang_admin_plugin_latest_posts['Hook instruction desc'] ?? 'This plugin requires a hook to load the latest posts data. You will need to add this hook in a separate step. The hook should populate the <code>$latest_posts</code> variable and be called before the view is rendered (e.g., in <code>index.php</code> or a common include file like <code>header.php</code>).'; ?></p>
                    </li>
                </ol>
            </div>
        </div>
    </div>
<?php

// Make sure this script terminates before continuing with the rest of admin_loader.php
exit;
