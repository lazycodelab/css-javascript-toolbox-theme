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

<footer class="site-footer divide-y divide-neutral-100 mt-20 lg:py-14 lg:px-24">
	<svg width="270" height="296" viewBox="0 0 270 296" fill="none" xmlns="http://www.w3.org/2000/svg">
		<g opacity="0.2" filter="url(#filter0_f_381_326)">
			<ellipse cx="123" cy="148" rx="97" ry="98" fill="#AFF7EC" fill-opacity="0.6" />
		</g>
		<defs>
			<filter id="filter0_f_381_326" x="-23.3211" y="0.678898" width="292.642" height="294.642" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feFlood flood-opacity="0" result="BackgroundImageFix" />
				<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
				<feGaussianBlur stdDeviation="24.6606" result="effect1_foregroundBlur_381_326" />
			</filter>
		</defs>
	</svg>

	<div class="grid lg:grid-cols-5 lg:gap-x-6 container mx-auto">
		<div>logo</div>
		<div>footer menu</div>
		<div>footer menu</div>
		<div>footer menu</div>
		<div>newsletter</div>
	</div>

	<p class="text-sm text-center py-10">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf(esc_html__('Copyright &copy; %d %s', 'cjt'), date('Y'), 'CSS & JavaScript Toolbox');
		?>
	</p>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>
