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
	<div class="mx-auto md:max-w-7xl space-y-8 md:space-y-24 xl:px-0 px-5">
		<div class="relative md:mb-24">
			<h2
				class="text-2xl font-bold md:text-5xl font-display md:max-w-4xl mx-auto text-center">
				Explore the <span class="text-brand-blue">premium</span> <br />
				CSS & JavaScript Toolbox PLUS
			</h2>
			<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'top-0 md:left-[55%] left-20 bg-cyan-400/30 md:blur-3xl blur-xl md:size-[200px] size-[120px] -z-[1]']); ?>
			<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-top-10 top-8 md:left-[65%] left-52 bg-amber-400/40 md:blur-3xl blur-2xl md:size-[130px] size-[80px] -z-[1]']); ?>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
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
					class="font-display font-bold md:text-4xl tracking-[2px] text-xl">
					PREMIUM Editor Tools</h2>
				<ul class="items-start justify-center space-y-3 md:space-y-5">
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Full-width and full-screen mode for distraction-free
						coding.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Beautify your code to make it perfectly formatted for
						code readability.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Minify your code by removing white space for code
						optimisation and faster website performance.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Use the built-in Code Auto Completion (CAC) feature that
						allows you to add code into the editor automatically.
						The CAC utilises a code syntax dictionary so you can
						quickly auto-complete CSS, JavaScript, PHP, and HTML
						code syntax or embed code snippets. There are stacks of
						code snippets for you to choose from and it even
						supports your own local variables.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Choose from over 32 editor themes for changing the
						editor background colour, syntax highlighting colour, or
						adjust the font-size to just the way you like it.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						There are many useful editor tools that you can use such
						as: undo, redo, find and replace, go to line, go to next
						error, and much more.
					</li>
				</ul>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="grid place-content-center md:gap-y-5 gap-y-2.5">
				<h2
					class="font-display font-bold md:text-4xl tracking-[2px] text-xl">
					PREMIUM Location Editor</h2>
				<ul class="items-start justify-center space-y-3 md:space-y-5">
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Assign code blocks to run on WordPress common website
						locations such as: entire website, all pages, all posts,
						recent posts, blog index, all categories, search pages,
						all archives, tag archives, author archives, website
						backend, 404 errors, and more.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Assign code blocks to run on specific website URLs or
						via Regex (Regular Expressions).
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						We include a powerful invert feature that allows you to
						run your code everywhere OTHER than what you selected in
						the location editor.
					</li>
				</ul>
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
					class="font-display font-bold md:text-4xl tracking-[2px] text-xl">
					PREMIUM Additional Locations</h2>
				<ul class="items-start justify-center space-y-3 md:space-y-5">
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Assign code blocks to run on WordPress post tags.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Assign code blocks to run on WordPress pages, posts or
						custom posts via the shortcode embed feature.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Assign code blocks to run on WordPress widgets. Great
						for adding code or textual content to your website
						sidebar or footer.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Add a single metabox code block at the page or post edit
						level. Great for one-off functions such as a page or
						post redirect.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						For those that prefer to work with WordPress Gutenberg
						blocks. Simply use our Gutenberg shortcode embed
						feature.
					</li>
				</ul>
			</div>
		</div>
		<div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
			<div class="grid place-content-center md:gap-y-5 gap-y-2.5">
				<h2
					class="font-display font-bold md:text-4xl tracking-[2px] text-xl">
					PREMIUM Code Block Toolbar</h2>
				<ul class="items-start justify-center space-y-3 md:space-y-5">
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Code block information panel showing useful details such
						as: code block ID and name, author, and when the block
						was created and last modified.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						In the free version, you can choose to run your code in
						the header or footer of the page. The premium version
						gives you 8 extra hook locations such as: body open,
						before or after post content, before or after post
						excerpt, before or after posts list, and before post.
						These additional hooks can be useful for things like
						adding advertising banners just before blog posts.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Assign code blocks to run on WordPress widgets. Great
						for adding code or textual content to your website
						sidebar or footer.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Load code from an external URL link and the code will be
						copied and embedded to your code block automatically.
						This can be useful when adding code from GitHub, which
						you can do by clicking into the script and copying the
						link from the Raw button.
					</li>
					<li
						class="md:text-base inline-flex gap-x-2.5 text-sm text-neutral-500 font-normal">
						<?php get_template_part('template-parts/components/component', 'check-mark'); ?>
						Don't lose your best code revision! Our code block
						revisions system lists all saved revisions with
						date/time stamp and author. This allows you to restore
						any previously saved version.
					</li>
				</ul>
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
