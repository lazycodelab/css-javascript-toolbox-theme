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
		<div class="bg-brand-blue px-5 lg:px-0 py-5 text-white">
			<div class="flex lg:flex-row flex-col lg:text-start text-center gap-y-2 justify-between container mx-auto">
				<p class="text-base font-medium">Get 20% Discounts! offer in 2 days</p>
				<div class="divide-x-2 inline-flex items-center justify-center">
					<a href="tel:+23561236456" class="text-base inline-flex items-center font-medium px-5 gap-2.5">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
							<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
						</svg>
						+23561236456
					</a>
					<a href="tel:+23561236456" class="text-base inline-flex items-center font-medium px-5 gap-2.5">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
							<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
						</svg>
						Support
					</a>
				</div>
			</div>
		</div>
		<header class="bg-white">
			<div class="mx-auto container py-5">
				<div class="flex items-center justify-between">
					<div class="flex-1 md:flex md:items-center md:gap-12">
						<a class="block" href="/">
							<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/logo.svg" />
						</a>
					</div>

					<div class="md:flex md:items-center md:gap-12">
						<nav aria-label="Global" class="hidden md:block">
							<?php
							wp_nav_menu(array(
								'menu_class'           => 'menu',
								'menu_id'              => 'nav-menu',
							));
							?>
						</nav>

						<div class="flex items-center gap-4">
							<div class="sm:flex sm:gap-4">
								<a class="rounded-md bg-brand-blue lg:px-6 px-3 lg:text-lg text-sm lg:py-3.5 py-2 font-medium text-white" href="#">
									Get CJT PLUS
								</a>
							</div>

							<div class="block md:hidden">
								<button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>