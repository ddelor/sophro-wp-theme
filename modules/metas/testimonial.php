<?php 

function register_testimonial_metaBoxes( $meta_boxes )
{
    global $post;

    $meta_boxes[] = array(
        'id'       => 'testimonial',
        'title'    => 'Témoignage',
        'pages'    => array('testimonial'),
        'context'  => 'normal',
        'priority' => 'high',
        'autosave' => true,

        'fields' => array(
            array(
                'name'  => 'Citation',
                'id'    => PREFIX . "testimonial_quote",
                'type'  => 'textarea',
                'rows'  => 5,
            ),
            array(
                'name'  => 'Auteur',
                'id'    => PREFIX . "testimonial_author",
                'type'  => 'text'
            ),
            array(
                'name'      => 'Date',
                'id'        => PREFIX . "testimonial_date",
                'type'      => 'date',
                'timestamp' => true,
            )
        )
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'register_testimonial_metaBoxes');