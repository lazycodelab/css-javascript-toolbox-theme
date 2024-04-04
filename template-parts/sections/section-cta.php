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
        <img class="h-full sm:w-full w-1/3" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/left-gradient-effect.svg" />
    </div>

    <!-- Right Gradient Effect -->
    <div class="absolute right-0 h-full">
        <img class="h-full sm:w-full w-1/3 ml-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/right-gradient-effect.svg" />
    </div>

    <div class="mx-auto max-w-5xl text-center py-10 px-5 md:p-12 lg:px-16 lg:py-24 relative">
        <div class="md:absolute md:block hidden left-0 top-5">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/code.svg" />
        </div>
        <div class="md:absolute md:block hidden right-0 bottom-5">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/code.svg" />
        </div>
        <div class="space-y-5 mb-10">
            <h2 class="text-2xl text-white font-bold md:text-5xl font-display">
                Unlock Potential with Our Plugins!
            </h2>

            <p class="md:text-base text-sm text-white">
                Enhance functionality, boost performance, and elevate user experience with our premium plugins. Discover a world of possibilities for your website today.
            </p>
        </div>
        <a class="rounded bg-black inline-flex px-6 py-3.5 md:text-lg text-base font-bold text-white uppercase" href="/">
            Explore Plugins Now
        </a>
    </div>
</section>