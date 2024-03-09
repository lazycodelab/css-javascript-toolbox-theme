<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>

<section class="bg-brand-blue relative">
    <!-- Left Gradient Effect -->
    <div class="absolute left-0 h-full">
        <img class="h-full" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/left-gradient-effect.svg" />
    </div>

    <!-- Right Gradient Effect -->
    <div class="absolute right-0 h-full">
        <img class="h-full" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/right-gradient-effect.svg" />
    </div>

    <div class="mx-auto max-w-5xl text-center p-8 md:p-12 lg:px-16 lg:py-24 space-y-10 relative">
        <div class="md:absolute md:block hidden left-0 top-5">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/code.svg" />
        </div>
        <div class="md:absolute md:block hidden right-0 bottom-5">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/code.svg" />
        </div>
        <div class="space-y-5">
            <h2 class="text-2xl text-white font-bold md:text-5xl font-display">
                Unlock Potential with Our Plugins!
            </h2>

            <p class="md:text-xl text-base text-white">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolor officia blanditiis
                repellat in, vero, aperiam porro ipsum laboriosam consequuntur exercitationem incidunt
                tempora nisi?
            </p>
        </div>
        <a class="rounded-lg bg-black inline-flex px-6 py-3.5 md:text-lg text-base font-medium text-white" href="/">
            Explore Plugins Now
        </a>
    </div>
</section>