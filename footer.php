<?php
    $facebook  = of_get_option('so_facebook');
    $twitter   = of_get_option('so_twitter');
    $linkedin  = of_get_option('so_linkedin');
?>

<footer>
    <div class="container">
        <nav class="menu">
            <?php
                if (has_nav_menu('footer')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container'      => 'ul'
                    ));
                }
            ?>
        </nav>

        <?php if (!empty($facebook) or !empty($twitter) or !empty($linkedin)): ?>
            <ul class="social">
                <?php if (!empty($facebook)): ?>
                    <li><a href="<?php echo $facebook; ?>" target="_blank" class="facebook"></a></li>
                <?php endif ?>
                <?php if (!empty($twitter)): ?>
                    <li><a href="<?php echo $twitter; ?>" target="_blank" class="twitter"></a></li>
                <?php endif ?>
                <?php if (!empty($linkedin)): ?>
                    <li><a href="<?php echo $linkedin; ?>" target="_blank" class="linkedin"></a></li>
                <?php endif ?>
            </ul>
        <?php endif ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
