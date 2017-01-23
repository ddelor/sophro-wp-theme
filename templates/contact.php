<?php

/* Template Name: Contact */

get_header();
?>

<section class="top">
    <div class="container">
        <h1><?php echo $post->post_title; ?></h1>
    </div>
</section>

<section class="contact">
    <div class="container">

        <?php
            $address_1 = of_get_option('so_address_1');
            $address_2 = of_get_option('so_address_2');
            $tel       = of_get_option('so_tel');
        ?>
        <div class="coords">
            <?php if (!empty($address_1)): ?>
                <p><?php echo str_replace(array("\r\n","\n"),', ',$address_1); ?></p>
            <?php endif ?>
            <?php if (!empty($address_2)): ?>
                <p><?php echo str_replace(array("\r\n","\n"),', ',$address_2); ?></p>
            <?php endif ?>
            <?php if (!empty($tel)): ?>
                <p><?php echo $tel; ?></p>
            <?php endif ?>
        </div>

        <div class="form">
            <?php if (!empty($errors)): ?>
                <div class="errors"></div>
            <?php endif ?>

            <?php if (!empty($success)): ?>
                <div class="success">Merci, votre demande a bien été envoyée.</div>
            <?php endif ?>

            <form method="POST">
                <div>
                    <label for="user">Nom*</label>
                    <input type="text" name="user">
                </div>
                <div>
                    <label for="name">Email*</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="name">Message*</label>
                    <textarea name="message"></textarea>
                </div>
                <div>
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
