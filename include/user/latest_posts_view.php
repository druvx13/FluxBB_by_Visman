<?php

// Make sure no one attempts to run this script "directly"
if (!defined('PUN_ROOT')) {
    exit;
}

// Check if the addon class exists and then call the static method
if (class_exists('addon_latest_posts') && method_exists('addon_latest_posts', 'generate_html')) {
    echo addon_latest_posts::generate_html();
} else {
    // Fallback or error message if the addon is not correctly loaded/installed
    // This should ideally not happen if the addon system is working correctly.
    if (isset($pun_config['o_latest_posts_enabled']) && $pun_config['o_latest_posts_enabled'] == '1') {
        if (defined('PUN_DEBUG')) {
            echo '<p style="color:red;">Error: addon_latest_posts class or generate_html method not found. Latest posts cannot be displayed.</p>';
        } else {
            // Silent fail in production if not in debug mode and enabled
        }
    }
}

?>
