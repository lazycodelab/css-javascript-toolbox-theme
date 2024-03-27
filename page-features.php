<?php

/**
 * Template Name: Features page
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
        get_template_part('template-parts/sections/features/section', 'hero');
    ?>

</main>

<?php

get_footer();
