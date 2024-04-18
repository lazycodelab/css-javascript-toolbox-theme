<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>
<section class="relative overflow-hidden">
	<div class="max-w-7xl mx-auto grid grid-cols-1 md:px-0 px-5">
		<div class="space-y-5 max-w-4xl mx-auto text-center md:my-24 my-10">
			<h1 class="md:text-6xl text-2xl font-display">
				Testimonials
			</h1>
			<p class="font-medium md:text-xl text-base text-neutral-600">Discover why CJT Plus Plugin is the top choice for over 1 million websites! Check out our rave reviews and see how we're transforming online experiences.</p>

			<p>Meet CJT Plus Plugin, the game-changer in WordPress customization! When it comes to enhancing the functionality and visual appeal of your WordPress website, few plugins can match the transformative power of CJT Plus. But don't just take our word for it - hear directly from the satisfied users who have experienced the magic of this plugin first-hand. Their glowing testimonials speak volumes about the exceptional value, unparalleled features, and unbeatable performance that CJT Plus delivers. Prepare to be inspired as you dive into the heartfelt reviews that showcase why over 1 million websites have chosen to elevate their online presence with CJT Plus. Join thousands of satisfied users who have revolutionized their websites with our powerful features and intuitive interface. See why CJT Plus Plugin is the go-to choice for anyone looking to elevate their WordPress experience.</p>
		</div>
		<div class="mx-auto mb-24">
			<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/testimonial.svg" />
		</div>
	</div>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 left-[15%] bottom-1/2 animate-small-blob']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-300/50 -rotate-6 right-[12%] top-[8%] animate-small-blob-5']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-300/50 -rotate-6 right-[12%] bottom-[8%] animate-small-blob-3']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-left-52 -left-28 top-10 bg-cyan-400/30 blur-3xl md:size-[400px] size-[200px]']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-right-52 -right-28 top-40 bg-amber-400/30 blur-3xl md:size-[400px] size-[200px]']); ?>
</section>
