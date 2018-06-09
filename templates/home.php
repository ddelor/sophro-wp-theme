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

<?php include 'partials/section-content.php'; ?>

<?php get_footer(); ?>
