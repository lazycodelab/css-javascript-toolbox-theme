<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */
?>

<section>
    <div class="mx-auto container xl:pt-48 pt-10 pb-10 lg:pb-14 lg:px-0 px-5">
        <div class="space-y-10">
            <h2 class="font-bold font-display text-center lg:text-xl text-sm">Trusted by the biggest brands in the galaxy</h2>
            <div class="grid-cols-2 gap-5 lg:grid-cols-4 lg:gap-10 place-items-center md:grid hidden">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/chase.svg" class="h-10" />
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/bf.svg" class="h-10" />
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/tc.svg" class="h-10" />
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/walmart.svg" class="h-10" />
            </div>
            <div class="relative flex overflow-x-hidden md:hidden">
                <div class="animate-marquee whitespace-nowrap flex gap-2.5">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/chase.svg" class="h-7" />
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/bf.svg" class="h-7 mx-5" />
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/tc.svg" class="h-7 mx-5" />
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/walmart.svg" class="h-7" />
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3 lg:gap-10 lg:mt-24 mt-10">
            <div class="flex flex-col justify-center items-center text-center lg:space-y-5 space-y-2.5">
                <div class="space-y-5">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/services.svg" class="md:size-40 size-20 mx-auto" />
                    <h3 class="text-xl font-bold text-gray-900 md:text-4xl">Quality Services</h3>
                </div>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor id aliquam dignissim risus diam dictum. A lectus in ridiculus viverra id ut
                </p>
            </div>
            <div class="flex flex-col justify-center items-center text-center lg:space-y-5 space-y-2.5">
                <div class="space-y-5">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/security.svg" class="md:size-40 size-20 mx-auto" />
                    <h3 class="text-xl font-bold text-gray-900 md:text-4xl">Security Innovation</h3>
                </div>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor id aliquam dignissim risus diam dictum. A lectus in ridiculus viverra id ut
                </p>
            </div>
            <div class="flex flex-col justify-center items-center text-center lg:space-y-5 space-y-2.5">
                <div class="space-y-5">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/complicated.svg" class="md:size-40 size-20 mx-auto" />
                    <h3 class="text-xl font-bold text-gray-900 md:text-4xl">Services Complicated</h3>
                </div>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor id aliquam dignissim risus diam dictum. A lectus in ridiculus viverra id ut
                </p>
            </div>
        </div>
    </div>
</section>