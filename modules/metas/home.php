<?php 

function register_home_metaBoxes( $meta_boxes )
{
    global $post;

    $meta_boxes[] = array(
        'id'       => 'home_slider',
        'title'    => 'Slider',
        'pages'    => array('page'),
        'context'  => 'normal',
        'priority' => 'high',
        'autosave' => true,
        'show'     => array(
            'template' => array(
                'templates/home.php'
            )
        ),

        'fields' => array(
        )
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'register_home_metaBoxes');