<?php

/**
 * Template Name: FD - Batch Operations page
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
        get_template_part('template-parts/sections/features-details/section', 'hero');
        get_template_part('template-parts/sections/features-details/section', 'info');
        get_template_part('template-parts/sections/section', 'cta');
        get_template_part('template-parts/sections/features-details/section', 'info-2');
        get_template_part('template-parts/sections/features/section', 'seo');
    ?>

</main>

<?php

get_footer();
