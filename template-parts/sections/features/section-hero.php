<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */
?>

<section class="relative md:py-24 py-10 overflow-hidden">
    <div class="max-w-7xl mx-auto md:px-0 px-5">
        <h1 class="md:text-5xl text-2xl font-display leading-tight text-center">
            Features
        </h1>
    </div>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-200/50 rotate-6 left-1/4 top-20 animate-small-blob']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 rotate-3 right-[15%] top-1/4 animate-small-blob-5']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-80 top-10 bg-cyan-400/30 blur-3xl -z-[1] size-[400px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-right-72 top-40 bg-orange-200/40 blur-3xl size-[400px]']); ?>
</section>