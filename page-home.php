<?php
/**
 * Template Name: Home page
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
	get_template_part('template-parts/sections/section', 'hero');

	?>

</main>

<?php
get_sidebar();
get_footer();
