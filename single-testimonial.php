<?php get_header(); ?>

<?php
	$article = apply_filters('the_content', $post->post_content);
?>

<!-- START CONTENT -->
<section class="content">
	<div class="container">

		<h1><?php echo $post->post_title; ?></h1>

		<?php if (!empty($article)): ?>
			<article>
				<?php echo $article; ?>
			</article>
		<?php endif ?>
	</div>
</section>
<!-- END CONTENT -->

<?php get_footer(); ?>
