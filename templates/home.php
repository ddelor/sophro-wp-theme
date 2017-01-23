<?php
/* Template Name: Accueil */
get_header();
?>

<!-- START SLIDER -->
<section class="full home-slider">
    <ul id="home-slider">
        <li>
            <a href="#">
                <div class="img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/front/images/img-02.jpg');"></div>
                <div class="infos">
                    <p class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/front/images/img-01.jpg');"></div>
                <div class="infos">
                    <p class="title">Lorem ipsum dolor sit amet</p>
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/front/images/img-03.jpg');"></div>
                <div class="infos">
                    <p class="title">Consectetur adipiscing elit</p>
                </div>
            </a>
        </li>
    </ul>
</section>
<!-- END SLIDER -->

<!-- START LIST POSTS -->
<section class="list">
    <div class="container">
        <h1>Les dernières chroniques</h1>
        <ul>
            <li class="item">
                <a href="#">
                    <div class="img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/front/images/img-01.jpg');"></div>
                    <div class="infos">
                        <p class="title">titre</p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/front/images/img-02.jpg');"></div>
                    <div class="infos">
                        <p class="title">titre long titre long long titre long long</p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/front/images/img-03.jpg');"></div>
                    <div class="infos">
                        <p class="title">titre</p>
                    </div>
                </a>
            </li>
            <li class="lineclear"></li>
        </ul>
        <div class="more-link">
            <a href="#">voir  + de chroniques</a>
        </div>
    </div>
</section>
<!-- END LIST POSTS -->

<?php get_footer(); ?>
