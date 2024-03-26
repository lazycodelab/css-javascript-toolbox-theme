<?php

/**
 * Template Name: Documentation page
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
        get_template_part('template-parts/sections/documentation/section', 'hero');
        get_template_part('template-parts/sections/documentation/section', 'quick-start');
        get_template_part('template-parts/sections/documentation/section', 'preview');
        get_template_part('template-parts/sections/documentation/section', 'preview-2');
    ?>

</main>

<?php

get_footer();
