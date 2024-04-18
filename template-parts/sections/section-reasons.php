<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>

<section class="md:py-24 py-10 relative overflow-hidden">
	<div class="mx-auto max-w-7xl md:space-y-10 space-y-14 xl:px-0 px-5">
		<div class="relative">
			<h2 class="text-2xl font-bold md:text-5xl font-display md:max-w-6xl max-w-72 mx-auto text-center">
				Reasons Why CJT Plus Has Garnered the Love & Support of
				<span class="text-brand-blue">Over 500,000</span> Users
			</h2>
			<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'top-0 md:left-[55%] left-20 bg-cyan-400/30 md:blur-3xl blur-xl md:size-[200px] size-[120px] -z-[1]']); ?>
			<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-top-10 top-8 md:left-[65%] left-52 bg-amber-400/40 md:blur-3xl blur-2xl md:size-[130px] size-[80px] -z-[1]']); ?>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="w-full h-full md:mx-auto relative">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-1.svg" loading="lazy" />
				<div class="absolute right-0 top-1/4 md:px-0 px-3">
					<img class="md:w-3/4 w-full ml-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-1.png" />
				</div>
			</div>
			<div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5">
				<h2 class="font-display font-bold md:text-4xl tracking-[2px] text-xl">Code Auto Completion: Your Shortcut to Coding Brilliance</h2>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Effortlessly autocomplete CSS, JavaScript, PHP, and HTML code syntax with a comprehensive dictionary at your fingertips.
					</span>
				</div>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Supercharge your coding experience with the CSS and Javascript toolbox's robust Code Auto Completion (CAC) feature, putting powerful coding tools in your hands.
					</span>
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5">
				<h2 class="font-display font-bold md:text-4xl tracking-[2px] text-xl">Unleash Your Creativity: Code Anytime with Full-Screen Freedom</h2>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Dive into distraction-free coding with the full-screen editing mode, maximizing the Code Block to fit your screen.
					</span>
				</div>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Experience expanded views, such as the Assignment Panel, maximizing screen height for better visibility of assignments like Pages, Posts, and Custom Posts.
					</span>
				</div>
			</div>

			<div class="w-full h-full md:mx-auto relative md:order-1 -order-1">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.svg" loading="lazy" />
				<div class="absolute right-0 md:top-1/4 top-5 md:px-0 px-3">
					<img class="md:w-3/4 w-full ml-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="w-full h-full mx-auto relative">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-3.svg" loading="lazy" />
				<div class="absolute left-0 top-1/4 md:px-0 px-3">
					<img class="md:w-3/4 w-full ml-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
				</div>
			</div>
			<div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5">
				<h2 class="font-display font-bold md:text-4xl tracking-[2px] text-xl">Avoid Plugin Overload, Which Can Slow Down Your Website's Performance</h2>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Easily integrate essential tools like Google Analytics and Google Ads without the overhead of additional plugins, keeping your website lean and efficient.
					</span>
				</div>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						CSS and javascript toolbox plus offers functionality without the resource drain of multiple plugins, ensuring a smooth user experience.
					</span>
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5">
				<h2 class="font-display font-bold md:text-4xl tracking-[2px] text-xl">CSS and Javascript Toolbox Plus - Your Responsive Coding Companion</h2>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Emphasizing mobile-first design principles, CSS, and javascript toolbox plus prioritizes usability and functionality on touchscreen devices.
					</span>
				</div>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Crafted for optimal performance across desktops, tablets, and mobile devices, ensuring a consistent coding experience.
					</span>
				</div>
			</div>
			<div class="w-full h-full mx-auto relative md:order-1 -order-1">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-4.svg" loading="lazy" />
				<div class="absolute right-0 md:top-1/3 top-4 md:px-0 px-3">
					<img class="md:w-3/4 w-full mx-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="w-full h-full mx-auto relative">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-5.svg" loading="lazy" />
				<div class="absolute right-0 top-1/3 md:px-0 px-3">
					<img class="md:w-3/4 w-full ml-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
				</div>
			</div>
			<div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5">
				<h2 class="font-display font-bold md:text-4xl tracking-[2px] text-xl">Centralized Control: Manage All Your Code Blocks from One Dashboard</h2>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Store all your code snippets in one convenient location, accessible from anywhere, anytime.
					</span>
				</div>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Simplify your workflow by accessing and managing all your code blocks from a single centralized dashboard.
					</span>
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5">
				<h2 class="font-display font-bold md:text-4xl tracking-[2px] text-xl">Optimizing Website Performance By Delivering Code Only Where Needed</h2>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Automatically load snippets into various locations across your website, enhancing functionality without complex PHP management.
					</span>
				</div>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Tailor code blocks to specific post categories, landing pages, or across your entire site for precise front-end customizations.
					</span>
				</div>
			</div>
			<div class="w-full h-full mx-auto relative md:order-1 -order-1">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-4.svg" loading="lazy" />
				<div class="absolute right-0 md:top-1/3 top-4 md:px-0 px-3">
					<img class="md:w-3/4 w-full mx-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="w-full h-full mx-auto relative">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-5.svg" loading="lazy" />
				<div class="absolute right-0 top-1/3 md:px-0 px-3">
					<img class="md:w-3/4 w-full ml-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
				</div>
			</div>
			<div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5">
				<h2 class="font-display font-bold md:text-4xl tracking-[2px] text-xl">Enhance The Visual Appeal And Readability Of Your Code By Beautifying It With CSS and Javascript Toolbox Plus</h2>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Access both beautify and minify functions side-by-side in the Editor Tools Panel, eliminating the need for external tools.
					</span>
				</div>
				<div class="inline-flex items-start justify-center gap-2.5">
					<div>
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
					</div>
					<span class="md:text-base text-sm text-neutral-500 font-normal">
						Transform minified or poorly formatted code into a clean and organized format for better comprehension.
					</span>
				</div>
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
