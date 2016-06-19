<footer>
	<?php
		if (has_nav_menu('footer')) {
			wp_nav_menu(array(
				'theme_location' => 'footer',
				'container'      => 'ul'
			));
		}
	?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
