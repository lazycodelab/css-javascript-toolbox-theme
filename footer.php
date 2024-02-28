<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cjt
 */

?>

<footer class="site-footer divide-y divide-neutral-100">
	<div class="grid lg:grid-cols-5 lg:gap-x-6 container mx-auto">
		<div>logo</div>
		<div>footer menu</div>
		<div>footer menu</div>
		<div>footer menu</div>
		<div>newsletter</div>
	</div>

	<div>
		<a href="<?php echo esc_url(__(site_url(), 'cjt')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Copyright &copy; %s', 'cjt'), 'CSS & JavaScript Toolbox');
			echo date('Y');
			?>
		</a>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>
