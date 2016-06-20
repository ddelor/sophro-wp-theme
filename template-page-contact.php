<?php

/* Template Name: Contact */

get_header();
?>

<h1><?php echo $post->post_title; ?></h1>

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

<?php get_footer(); ?>
