<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

    // This gets the theme name from the stylesheet
    $themename = wp_get_theme();
    $themename = preg_replace("/\W/", "_", strtolower($themename) );

    $optionsframework_settings = get_option( 'optionsframework' );
    $optionsframework_settings['id'] = $themename;
    update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

    $options = array();

    $options[] = array(
        'name' => __('Informations de contact', 'options_framework_theme'),
        'type' => 'heading');

    $options[] = array(
        'name' => __('Adresse 1', 'options_framework_theme'),
        'id' => PREFIX . 'address_1',
        'type' => 'textarea');

    $options[] = array(
        'name' => __('Adresse 2', 'options_framework_theme'),
        'id' => PREFIX . 'address_2',
        'type' => 'textarea');

    $options[] = array(
        'name' => __('Téléphone', 'options_framework_theme'),
        'id' => PREFIX . 'tel',
        'type' => 'text');

    $options[] = array(
        'name' => __('Email', 'options_framework_theme'),
        'id' => PREFIX . 'email',
        'type' => 'text');

    $options[] = array(
        'name' => __('Réseaux sociaux', 'options_framework_theme'),
        'type' => 'heading');

    $options[] = array(
        'name' => __('Facebook', 'options_framework_theme'),
        'id' => PREFIX . 'facebook',
        'type' => 'text');

    $options[] = array(
        'name' => __('Twitter', 'options_framework_theme'),
        'id' => PREFIX . 'twitter',
        'type' => 'text');

    $options[] = array(
        'name' => __('Linkedin', 'options_framework_theme'),
        'id' => PREFIX . 'linkedin',
        'type' => 'text');

    return $options;
}
