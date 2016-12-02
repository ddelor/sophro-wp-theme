<footer>
    <nav>
        <?php
            if (has_nav_menu('footer')) {
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => 'ul'
                ));
            }
        ?>
    </nav>
    <?php
        $address_1 = of_get_option('so_address_1');
        $address_2 = of_get_option('so_address_2');
        $tel       = of_get_option('so_tel');
        $email     = of_get_option('so_email');
        $facebook  = of_get_option('so_facebook');
        $twitter   = of_get_option('so_twitter');
        $linkedin  = of_get_option('so_linkedin');
    ?>

    <div>
        <?php if (!empty($address_1)): ?>
            <p><?php echo str_replace(array("\r\n","\n"),', ',$address_1); ?></p>
        <?php endif ?>
        <?php if (!empty($address_2)): ?>
            <p><?php echo str_replace(array("\r\n","\n"),', ',$address_2); ?></p>
        <?php endif ?>
        <?php if (!empty($tel)): ?>
            <p>
                <?php echo $tel; ?>
                <?php if (!empty($email)): ?>
                    <span> - </span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                <?php endif ?>
            </p>
        <?php endif ?>
    </div>
    <?php if (!empty($facebook) or !empty($twitter) or !empty($linkedin)): ?>
        <ul>
            <?php if (!empty($facebook)): ?>
                <li><a href="<?php echo $facebook; ?>" target="_blank">facebook</a></li>
            <?php endif ?>
            <?php if (!empty($twitter)): ?>
                <li><a href="<?php echo $twitter; ?>" target="_blank">twitter</a></li>
            <?php endif ?>
            <?php if (!empty($linkedin)): ?>
                <li><a href="<?php echo $linkedin; ?>" target="_blank">linkedin</a></li>
            <?php endif ?>
        </ul>
    <?php endif ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
