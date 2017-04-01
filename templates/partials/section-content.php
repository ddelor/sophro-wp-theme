<?php
	$img_id  = (isset($post->SO_main_image)) ? $post->SO_main_image : null;
	$img     = ($img_id) ? get_image_by_id($img_id) : null;
	$quote 	 = (isset($post->SO_quote)) ? $post->SO_quote : null;
	$article = apply_filters('the_content', $post->post_content);
?>

<!-- START CONTENT -->
<section class="content">
	<div class="container">

		<h1><?php echo $post->post_title; ?></h1>
		
		<?php if ($img): ?>
			<div class="img-main" style="background-image: url(<?php echo $img['full']; ?>);"></div>
		<?php endif ?>

		<?php if ($quote): ?>
			<blockquote>
				<?php echo nl2br($quote); ?>
			</blockquote>
		<?php endif ?>

		<?php if (!empty($article)): ?>
			<article>
				<?php echo $article; ?>
			</article>
		<?php endif ?>
	</div>
</section>
<!-- END CONTENT -->
