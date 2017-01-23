<?php 

function registerPagesMetaBoxes( $meta_boxes )
{
    global $post;

    $meta_boxes[] = array(
        'id'       => 'page_content',
        'title'    => 'Médias',
        'pages'    => array('page', 'post'),
        'context'  => 'normal',
        'priority' => 'high',
        'autosave' => true,

        'fields' => array(
            array(
                'name'             => 'Image principale',
                'id'               => PREFIX . "main_image",
                'max_file_uploads' => 1,
                'type'             => 'image_advanced',
            ),
            array(
                'name'  => 'Citation',
                'id'    => PREFIX . "quote",
                'type'  => 'textarea',
                'rows'  => 10,
            ),
        )
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'registerPagesMetaBoxes');