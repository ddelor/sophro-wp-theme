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
            array(
                'name'       => 'Slide',
                'id'         => PREFIX . "home_slide",
                'type'       => 'group',
                'clone'      => true,
                'sort_clone' => true,
                'fields' => array(
                    array(
                        'name'             => 'Image',
                        'id'               => PREFIX . "home_slide_img",
                        'max_file_uploads' => 1,
                        'type'             => 'image_advanced'
                    ),
                    array(
                        'name'  => 'Description',
                        'id'    => PREFIX . "home_slide_desc",
                        'type'  => 'textarea',
                        'rows'  => 5
                    ),
                    array(
                        'name'  => 'Lien',
                        'id'    => PREFIX . "home_slide_link",
                        'type'  => 'autocomplete',
                        'options'  => get_all_contents_list()
                    ),
                )
            )
        )
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'register_home_metaBoxes');