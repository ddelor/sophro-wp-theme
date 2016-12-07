<?php

function loadCss()
{
	wp_register_style('lightslider', get_template_directory_uri() . '/bower_components/lightslider/dist/css/lightslider.min.css', null, false);
    wp_register_style('style', get_template_directory_uri() . '/assets/front/dist/styles.min.css', null, false);

    wp_enqueue_style('lightslider');
    wp_enqueue_style('style');
}

function adminLoadCss()
{
    wp_register_style('style', get_template_directory_uri() . '/assets/admin/dist/styles.min.css', null, false);
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'loadCss');
add_action('admin_print_scripts', 'adminLoadCss');
