<?php

function removeDashboardWidgets()
{
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
}

function removeEditorMenu()
{
    remove_action('admin_menu', '_add_themes_utility_last', 101);
}

function menuPages()
{
    remove_menu_page('edit-comments.php');
    remove_menu_page('edit.php');
}

function adminBarRender()
{
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('new-content');
    $wp_admin_bar->remove_menu('wp-logo');
}

function menuOrder($menu_ord) {
   if (!$menu_ord) return true;

   return array(
       'index.php', // Dashboard
       'separator1', // First separator
       'edit.php?post_type=page', // Pages
       'edit.php?post_type=chronic',
       'edit.php?post_type=testimonial',
       'link-manager.php', // Links
       'upload.php', // Media
       'edit-comments.php', // Comments
       'separator2', // Second separator
       'themes.php', // Appearance
       'plugins.php', // Plugins
       'users.php', // Users
       'tools.php', // Tools
       'options-general.php', // Settings
       'separator-last', // Last separator
   );
}

function register_menu() {
    register_nav_menu('header', __('Header'));
    register_nav_menu('footer', __('Footer'));
}

function removePagesSupports()
{
    remove_post_type_support('page', 'revisions');
}

add_action('wp_dashboard_setup', 'removeDashboardWidgets');
add_action('admin_menu', 'menuPages');
add_action('admin_menu', 'removeEditorMenu');
add_action('wp_before_admin_bar_render', 'adminBarRender');
add_filter('init', 'register_menu');
add_filter('menu_order', 'menuOrder');
add_filter('custom_menu_order', 'menuOrder');
add_action('init', 'removePagesSupports');
