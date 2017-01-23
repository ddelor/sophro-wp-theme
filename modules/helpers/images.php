<?php 

function get_main_image($post)
{
	$img_id = $post->SO_main_image;
	$img 	= (!empty($img_id)) ? wp_get_attachment_img('full', $img_id) : null;

	var_dump($img);
	exit;
}
