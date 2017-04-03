<?php 

function get_template_id($template_string)
{
	global $wpdb;

	$template_id = $wpdb->get_var("SELECT pm.post_id FROM {$wpdb->base_prefix}postmeta pm, {$wpdb->base_prefix}posts p WHERE pm.meta_key = '_wp_page_template' AND pm.meta_value = '" . $template_string . "' AND p.post_status = 'publish' AND p.ID = pm.post_id");
	
	return $template_id;
}

function get_template_post($template_string)
{
	$template_id = get_template_id($template_string);

	if($template_id){
		return get_post(get_template_id($template_string));
	}

	return false;
}

function get_template_url($template_string)
{
	$template_id = get_template_id($template_string);

	if($template_id){
		return get_permalink(get_template_id($template_string));
	}

	return false;
}