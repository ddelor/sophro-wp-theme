<?php
/* Template Name: Page liste témoignages */
get_header();

$arg = array(
    'post_type'      => 'testimonial',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'meta_key'       => 'SO_testimonial_date',
    'orderby'        => 'meta_value',
    'order'          => 'DESC'
);
$testimonials = get_posts($arg);
?>

<?php include 'partials/section-content.php'; ?>

<!-- START LIST POSTS -->
<?php if (!empty($testimonials)): ?>
    <section class="list list--testimonials">
        <div class="container">
            <ul>
                <?php foreach ($testimonials as $testimonial): ?>
                    <li class="item">
                        <p class="testimonial_author"><?php echo $testimonial->SO_testimonial_author; ?>, <?php echo date('d/m/Y', $testimonial->SO_testimonial_date); ?></p>
                        <p class="testimonial_quote"><?php echo $testimonial->SO_testimonial_quote; ?></p>
                    </li>
                <?php endforeach ?>
                <li class="lineclear"></li>
            </ul>
        </div>
    </section>
<?php endif ?>
<!-- END LIST POSTS -->

<?php get_footer(); ?>
