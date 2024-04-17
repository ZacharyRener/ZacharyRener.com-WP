<?php

function remove_posts_admin_menu() {
    // Remove Posts from admin menu
    remove_menu_page('edit.php');

}

// Add action hook to admin_menu to call the function
add_action('admin_menu', 'remove_posts_admin_menu');

// Disable post type support to hide it from various admin sections like +New and other places
function disable_post_type() {
    global $wp_post_types;
    if (isset($wp_post_types['post'])) {
        $wp_post_types['post']->public = false;
        $wp_post_types['post']->show_in_menu = false;
        $wp_post_types['post']->show_in_admin_bar = false;
        $wp_post_types['post']->show_in_nav_menus = false;
        $wp_post_types['post']->can_export = false;
        $wp_post_types['post']->has_archive = false;
        $wp_post_types['post']->exclude_from_search = true;
    }
}

// Add action hook to init to call the function
add_action('init', 'disable_post_type', 0);  // Priority set to 0 to make it early
