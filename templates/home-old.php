<?php
/* Template Name: Accueil */
get_header();
?>

<!-- START SLIDER -->
<?php if (!empty($slides)): ?>
    <section class="full home-slider">
        <ul id="home-slider">
            <?php foreach ($slides as $slide): ?>
                <?php
                    $img_id = (isset($slide['SO_home_slide_img'])) ? current($slide['SO_home_slide_img']) : false;
                    $img    = ($img_id) ? get_image_by_id($img_id) : false;
                    $link   = (isset($slide['SO_home_slide_link'])) ? get_permalink(current($slide['SO_home_slide_link'])) : false;
                ?>
                <?php if ($img): ?>
                    <li>
                        <?php if ($link): ?><a href="<?php echo $link ?>"><?php endif ?>
                            <div class="img" style="background-image: url('<?php echo $img['full']; ?>');"></div>
                            <div class="infos">
                                <p class="title"><?php echo $slide['SO_home_slide_desc']; ?></p>
                            </div>
                        <?php if ($link): ?></a><?php endif ?>
                    </li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </section>
<?php endif ?>
<!-- END SLIDER -->

<!-- START LIST POSTS -->
<?php if (!empty($chronics)): ?>
    <section class="list">
        <div class="container">
            <h1>Les dernières chroniques</h1>
            <ul>
                <?php foreach ($chronics as $key => $chronic): ?>
                    <?php if ($key < 3): ?>
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
                    <?php endif ?>
                <?php endforeach ?>
                <li class="lineclear"></li>
            </ul>
            <?php if ($chronics_list): ?>
                <div class="more-link">
                    <a href="<?php echo $chronics_list; ?>">voir  + de chroniques</a>
                </div>
            <?php endif ?>
        </div>
    </section>
<?php endif ?>
<!-- END LIST POSTS -->

<?php get_footer(); ?>
