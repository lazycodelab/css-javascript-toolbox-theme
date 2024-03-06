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
    <div class="mx-auto container pt-48 pb-14">
        <div class="space-y-10">
            <h2 class="font-bold font-display text-center">Trusted by the biggest brands in the galaxy</h2>
            <div class="grid grid-cols-2 gap-5 lg:grid-cols-6 lg:gap-10 place-items-center">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/chase.svg" />
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/asana.svg" />
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/google.svg" />
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/buzzfeed.svg" />
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/walmart.svg" />
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/brands/walmart.svg" />
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3 lg:gap-10 mt-24">
            <div class="flex flex-col justify-center items-center text-center space-y-5">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/services.svg" />
                <h3 class="text-xl font-bold text-gray-900 md:text-4xl">Quality Services</h3>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor id aliquam dignissim risus diam dictum. A lectus in ridiculus viverra id ut
                </p>
            </div>
            <div class="flex flex-col justify-center items-center text-center space-y-5">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/security.svg" />
                <h3 class="text-xl font-bold text-gray-900 md:text-4xl">Security Innovation</h3>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor id aliquam dignissim risus diam dictum. A lectus in ridiculus viverra id ut
                </p>
            </div>
            <div class="flex flex-col justify-center items-center text-center space-y-5">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/complicated.svg" />
                <h3 class="text-xl font-bold text-gray-900 md:text-4xl">Services Complicated</h3>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor id aliquam dignissim risus diam dictum. A lectus in ridiculus viverra id ut
                </p>
            </div>
        </div>
    </div>
</section>