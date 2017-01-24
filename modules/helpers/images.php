<?php 

function get_main_image($post)
{
    $img_id = $post->SO_main_image;
    $img    = (!empty($img_id)) ? wp_get_attachment_img('full', $img_id) : null;

    var_dump($img);
    exit;
}


function get_image_by_id($id)
{
    $full = wp_get_attachment_image_src($id, 'full')[0];
    $alt  = get_post_meta($id, '_wp_attachment_image_alt', true);

    return array(
        'full' => $full,
        'alt'  => $alt
    );
}