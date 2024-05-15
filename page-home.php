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
	get_template_part('template-parts/sections/section', 'cards');
	get_template_part('template-parts/sections/section', 'reasons');
	get_template_part('template-parts/sections/section', 'features');
	get_template_part('template-parts/sections/section', 'testimonials');
	get_template_part('template-parts/sections/section', 'pricing');
	get_template_part('template-parts/sections/section', 'faq');
	get_template_part('template-parts/sections/section', 'cta');
	?>

</main>

<?php

get_footer();
