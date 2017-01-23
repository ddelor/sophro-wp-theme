<?php 

function testimonial_type()
{
    $labels =
    array(
        'name'               => 'Témoignages',
        'singular_name'      => 'Témoignage',
        'add_new'            => 'Ajouter un témoignage',
        'add_new_item'       => 'Ajouter un témoignage',
        'edit_item'          => 'Modifier le témoignage',
        'new_item'           => 'Nouveau témoignage',
        'view_item'          => 'Voir le témoignage',
        'search_items'       => 'Rechercher un témoignage',
        'not_found'          => 'Aucun témoignage',
        'not_found_in_trash' => 'Aucun témoignage',
        'parent_item_colon'  => ''
    );
    $args =
    array(
        'labels'            => $labels,
        'rewrite'           => array('slug' => 'temoignage'),
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
    register_post_type('testimonial', $args);
}

add_action('init', 'testimonial_type');
