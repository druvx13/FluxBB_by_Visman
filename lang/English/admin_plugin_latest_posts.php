<?php

if (!defined('FORUM')) {
    exit;
}

$lang_admin_plugin_latest_posts = array(
    'Plugin title'              => 'Latest Posts Settings',
    'Plugin description'        => 'This plugin displays the latest posts on your forum.',
    'Settings saved'            => 'Settings saved successfully.',
    'Settings'                  => 'Settings',
    'General settings'          => 'General settings',
    'Enable plugin'             => 'Enable plugin',
    'Enable plugin help'        => 'Display the latest posts on the forum.',
    'Number of posts'           => 'Number of posts to display',
    'Number of posts help'      => 'Enter the number of latest posts to show (default: 5).',
    'Title length'              => 'Maximum title length',
    'Title length help'         => 'Maximum number of characters for post titles (default: 50).',
    'Show author'               => 'Show post author',
    'Show author help'          => 'Display the author of the post.',
    'Show date'                 => 'Show post date',
    'Show date help'            => 'Display the date of the post.',
    'Save settings'             => 'Save settings',
    'Installation instructions' => 'Installation Instructions',
    'Instructions intro'        => 'To display the latest posts on your forum, you need to perform the following steps:',
    'Create view file title'    => '1. Create the view file:',
    'Create view file desc'     => 'Create a new file named %s in the %s directory with the following content:',
    'Include view file title'   => '2. Include the view file in your template:',
    'Include view file desc'    => 'Open the %s file (or your custom template file) and find a suitable place to include the latest posts. A good place is usually before the footer. Add the following line:',
    'Include view file example' => 'For example, you might place it before the line that includes the footer:',
    'Hook instruction title'    => '3. Add the hook to load posts:',
    'Hook instruction desc'     => 'This plugin requires a hook to load the latest posts data. You will need to add this hook in a separate step. The hook should populate the <code>$latest_posts</code> variable and be called before the view is rendered (e.g., in <code>index.php</code> or a common include file like <code>header.php</code>).',
);

// Strings for the front-end view (latest_posts_view.php)
$lang_latest_posts = array(
    'Latest posts' => 'Latest Posts',
    'by'           => 'by',
);
