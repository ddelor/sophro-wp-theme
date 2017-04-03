<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php echo get_bloginfo('name'); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet"> 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="top">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <p class="name">Véronique Finat</p>
                    <p class="job">Sophrologue</p>
                    <p class="city">à Fontenay-Sous-Bois</p>
                </a>
                <?php $tel = of_get_option('so_tel'); ?>
                <?php if (!empty($tel)): ?>
                    <p class="phone">06 22 21 26 81</p>
                <?php endif ?>
            </div>
        </div>
        <nav class="menu">
            <?php
                if (has_nav_menu('header')) {
                    wp_nav_menu(array(
                        'theme_location' => 'header',
                        'container'      => 'ul'
                    ));
                }
            ?>
        </nav>
    </div>
</header>
