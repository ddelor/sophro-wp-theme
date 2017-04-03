<?php 

function get_content_type_posts($type)
{
	$arg = array(
		'post_type'      => $type,
		'posts_per_page' => -1,
		'post_status'    => 'publish'
	);
	$posts = get_posts($arg);
	return $posts;
}

function get_content_type_list($type) {
	$list  = array();
	$posts = get_content_type_posts($type);

	foreach ($posts as $post) {
		$list[$post->ID] = $post->post_title;
	}

	return $list;
}

function get_all_contents_list()
{
	$list         = array();
	$pages        = get_content_type_posts('page');
	$chronics     = get_content_type_posts('chronic');
	$testimonials = get_content_type_posts('testimonial');
	
	foreach ($pages as $post) {
		$list[$post->ID] = $post->post_title;
	}

	foreach ($chronics as $post) {
		$list[$post->ID] = $post->post_title;
	}

	foreach ($testimonials as $post) {
		$list[$post->ID] = $post->post_title;
	}

	return $list;
}