<?php

namespace Home;

use Controller\Base;

class HomeController extends Base
{
    protected function get()
    {
    	global $post;

    	// GET SLIDER
    	$slides = $post->SO_home_slide;

    	// GET CHRONICS
		$chronics      = get_content_type_posts('chronic');
		$chronics_list = get_template_url('templates/chronics.php');

    	return array(
			'slides'        => $slides,
			'chronics'      => $chronics,
			'chronics_list' => $chronics_list
    	);
    }
}
