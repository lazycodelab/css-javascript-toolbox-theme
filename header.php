<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cjt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'cjt'); ?>
		</a>

		<?php get_template_part('template-parts/components/component', 'announcement-bar'); ?>
		<header class="bg-white">
			<div class="mx-auto max-w-7xl md:p-5 py-2.5 px-5">
				<div class="flex items-center justify-between">
					<div class="flex-1 md:flex md:items-center md:gap-12">
						<a class="md:block hidden" href="<?= home_url(); ?>">
							<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" class="object-cover w-60" />
						</a>
						<a class="block md:hidden" href="<?= home_url(); ?>">
							<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/logo-mobile.png" class="object-cover w-16" />
						</a>
					</div>

					<div class="md:flex md:items-center gap-5">
						<nav aria-label="Global" class="hidden md:block">
							<?php
							wp_nav_menu(array(
								'menu_class' => 'menu',
								'menu_id'    => 'nav-menu',
							));
							?>
						</nav>

						<div class="flex items-center gap-4">
							<div class="sm:gap-4 md:flex hidden">
								<a class="rounded-md bg-brand-blue shadow-md lg:px-6 px-3 lg:text-lg text-sm lg:py-3.5 py-2 font-semibold text-white" href="<?= home_url(); ?>/pricing">
									Get CJT PLUS
								</a>
							</div>

							<div class="flex items-center md:hidden">
								<button class="rounded text-neutral-500 transition hover:text-neutral-500/75">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#171717" class="size-8">
										<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>