<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */
?>

<section class="md:pt-24 py-10 relative overflow-hidden">
	<div class="mx-auto max-w-5xl space-y-5 md:space-y-8 xl:px-0 px-5">
		<h2
		class="text-2xl mb-10 font-bold md:text-5xl font-display md:max-w-4xl max-w-72 mx-auto text-center">
			<span class="text-brand-blue">Top reasons</span> why people choose CSS & JavaScript Toolbox
		</h2>
		<div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
			<div class="size-full md:mx-auto relative">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-1.svg"
					loading="lazy" />
				<div class="absolute right-0 top-1/4 md:px-0 px-3">
					<img class="md:w-3/4 w-full ml-auto"
						src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-1.png" />
				</div>
			</div>
			<div class="grid place-content-center md:gap-y-5 gap-y-2.5">
				<h2
					class="font-display font-bold md:text-3xl tracking-[1px] text-xl">
					Fast and simple to use</h2>
					<p class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">Over 10 years of user feedback and testimonials has guided us to develop a code snippet and script injection plugin that's both fast and simple to use.</p>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="grid place-content-center md:gap-y-5 gap-y-2.5">
				<h2
					class="font-display font-bold md:text-3xl tracking-[1px] text-xl">
					Streamlined site development</h2>
					<p class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">FTP? no thanks! Create code blocks for all your code snippets and scripts and view them all in the one dashboard.</p>
			</div>

			<div class="w-full h-full md:mx-auto relative md:order-1 -order-1">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.svg"
					loading="lazy" />
				<div class="absolute right-0 md:top-1/4 top-5 md:px-0 px-3">
					<img class="md:w-3/4 w-full ml-auto"
						src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="w-full h-full mx-auto relative">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-3.svg"
					loading="lazy" />
				<div class="absolute left-0 top-1/4 md:px-0 px-3">
					<img class="md:w-3/4 w-full ml-auto"
						src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
				</div>
			</div>
			<div class="grid place-content-center md:gap-y-5 gap-y-2.5">
				<h2
					class="font-display font-bold md:text-3xl tracking-[1px] text-xl">
					Robust and powerful</h2>
					<p class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">Create as many code blocks as needed and see all your code and location outputs in the one dashboard. Don't worry, this solution has been tested and optimised to handle 100's of code blocks and thousands of locations (e.g. WordPress Pages or Posts).</p>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="grid place-content-center md:gap-y-5 gap-y-2.5">
				<h2
					class="font-display font-bold md:text-3xl tracking-[1px] text-xl">
					Built with security first</h2>
					<p class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">Add custom code safely - even PHP. Built with security in mind to STOP the hackers! You can also rest assured that all of your code blocks are safely stored in the database and your code can be recovered if required.</p>
			</div>
			<div class="w-full h-full mx-auto relative md:order-1 -order-1">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-4.svg"
					loading="lazy" />
				<div class="absolute right-0 md:top-1/3 top-4 md:px-0 px-3">
					<img class="md:w-3/4 w-full mx-auto"
						src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="w-full h-full mx-auto relative">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-3.svg"
					loading="lazy" />
				<div class="absolute left-0 top-1/4 md:px-0 px-3">
					<img class="md:w-3/4 w-full ml-auto"
						src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
				</div>
			</div>
			<div class="grid place-content-center md:gap-y-5 gap-y-2.5">
				<h2
					class="font-display font-bold md:text-3xl tracking-[1px] text-xl">
					Backed by a 7-day money-back guarantee</h2>
					<p class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">We truly believe that our code snippet and script plugin will do exactly what you are wanting, however if you are not 100% satisfied with our solution, then you are entitled to receive a 100% refund within 7 days from your purchase.</p>
			</div>
		</div>
	</div>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-300/50 rotate-6 top-10 left-1/2 animate-small-blob']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 -rotate-6 left-[20%] top-[40%] animate-small-blob-4']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 rotate-3 right-[5%] bottom-[40%] animate-small-blob-3']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 top-[25%] left-[40%] animate-small-blob-5']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-300/50 rotate-6 bottom-10 right-1/2 animate-small-blob-1']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 -rotate-6 right-[60%] bottom-[20%] animate-small-blob-2']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 rotate-3 left-[15%] top-[40%] animate-small-blob-4']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 bottom-[25%] right-[40%] animate-small-blob-5']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-64 bottom-[15%] bg-cyan-400/30 blur-3xl size-[400px] -z-[1]']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => '-right-64 bottom-20 bg-amber-300/30 blur-3xl size-[400px] -z-[1]']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-64 bottom-[55%] bg-cyan-400/30 blur-3xl size-[400px] -z-[1]']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => '-right-64 bottom-[50%] bg-amber-300/30 blur-3xl size-[400px] -z-[1]']); ?>
</section>
