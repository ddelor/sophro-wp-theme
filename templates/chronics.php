<?php
/* Template Name: Page liste chroniques */
get_header();
$chronics = get_content_type_posts('chronic');
?>

<!-- START LIST POSTS -->
<?php if (!empty($chronics)): ?>
    <section class="list">
        <div class="container">
        	<h1><?php echo $post->post_title; ?></h1>
            <ul>
                <?php foreach ($chronics as $key => $chronic): ?>
                    <?php
                        $img_id  = (isset($chronic->SO_main_image)) ? $chronic->SO_main_image : false;
                        $img     = ($img_id) ? get_image_by_id($img_id) : null;
                    ?>
                    <li class="item">
                        <a href="<?php echo get_permalink($chronic->ID); ?>">
                            <div class="img" style="background-image: url('<?php echo $img['full']; ?>');"></div>
                            <div class="infos">
                                <p class="title"><?php echo $chronic->post_title; ?></p>
                            </div>
                        </a>
                    </li>
                <?php endforeach ?>
                <li class="lineclear"></li>
            </ul>
        </div>
    </section>
<?php endif ?>
<!-- END LIST POSTS -->

<?php get_footer(); ?>
