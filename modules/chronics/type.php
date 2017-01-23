<?php 

function chronic_type()
{
    $labels =
    array(
        'name'               => 'Chroniques',
        'singular_name'      => 'Chronique',
        'add_new'            => 'Ajouter une chronique',
        'add_new_item'       => 'Ajouter une chronique',
        'edit_item'          => 'Modifier la chronique',
        'new_item'           => 'Nouvelle chronique',
        'view_item'          => 'Voir la chronique',
        'search_items'       => 'Rechercher une chronique',
        'not_found'          => 'Aucune chronique',
        'not_found_in_trash' => 'Aucune chronique',
        'parent_item_colon'  => ''
    );
    $args =
    array(
        'labels'            => $labels,
        'rewrite'           => array('slug' => 'chronique'),
        'public'            => true,
        'publicly_queryable'=> true,
        'show_ui'           => true,
        'query_var'         => true,
        'capability_type'   => 'post',
        'hierarchical'      => false,
        'menu_position'     => 4,
        'supports'          => array('title', 'editor'),
        'menu_icon'         => ''
    );
    register_post_type('chronic', $args);
}

add_action('init', 'chronic_type');
