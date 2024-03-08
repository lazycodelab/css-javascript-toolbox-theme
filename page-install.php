<?php

/**
 * Template Name: Install page
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
        get_template_part('template-parts/sections/install/section', 'hero');
        get_template_part('template-parts/sections/install/section', 'plugins');
        get_template_part('template-parts/sections/install/section', 'ftp');
        get_template_part('template-parts/sections/install/section', 'license');
        get_template_part('template-parts/sections/install/section', 'notes');
        get_template_part('template-parts/sections/install/section', 'upgrade');
    

    ?>

</main>

<?php

get_footer();
