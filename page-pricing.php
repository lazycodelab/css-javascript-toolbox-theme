<?php
/**
 * Template Name: Pricing page
 * Post Type: post, page, event
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

get_header();
?>

<main id="app">

	<?php
	get_template_part('template-parts/sections/pricing/section', 'hero');
	get_template_part('template-parts/sections/pricing/section', 'features');
	get_template_part('template-parts/sections/pricing/section', 'compression');
	?>

</main>

<?php

get_footer();
