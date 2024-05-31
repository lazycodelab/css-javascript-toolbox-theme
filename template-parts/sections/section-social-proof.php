<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */
?>

<section class="relative">
	<div class="space-y-5 my-10 lg:my-24 overflow-hidden">
		<h2 class="font-bold font-display text-center text-neutral-700 lg:text-4xl text-xl lg:px-0 px-4">Organisations who trust CSS & JavaScript Toolbox <span class="text-brand-blue">PLUS</span></h2>
		<div data-trusted-brands class="overflow-hidden mx-auto whitespace-nowrap">
			<div class="w-fit will-change-transform justify-start inline-flex gap-10">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/uom.webp" class="size-40 aspect-[2/3] object-contain hover:grayscale-0 grayscale duration-150" loading="lazy" />
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/mit.webp" class="size-40 aspect-[2/3] object-contain hover:grayscale-0 grayscale duration-150" loading="lazy" />
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/umc.webp" class="size-40 aspect-[2/3] object-contain hover:grayscale-0 grayscale duration-150" loading="lazy" />
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/nps.webp" class="size-40 aspect-[2/3] object-contain hover:grayscale-0 grayscale duration-150 py-5" loading="lazy" />
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/gsu.webp" class="size-40 aspect-[2/3] object-contain hover:grayscale-0 grayscale duration-150 py-5" loading="lazy" />
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/rock_uni.webp" class="size-40 aspect-[2/3] object-contain hover:grayscale-0 grayscale duration-150 py-5" loading="lazy" />
			</div>
		</div>
	</div>
</section>
