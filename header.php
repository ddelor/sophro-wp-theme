<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php echo get_bloginfo('name'); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<?php
		if (has_nav_menu('header')) {
			wp_nav_menu(array(
				'theme_location' => 'header',
				'container'      => 'ul'
			));
		}
	?>
</header>
