<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>
<section class="relative bg-white">
    <div class="max-w-7xl mx-auto md:py-24 py-10 lg:px-0 px-5 md:space-y-24 space-y-10">
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div>
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/features/batch/vector-1.png" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col justify-center md:space-y-10 space-y-5">
                <div class="space-y-5">
                    <h2 class="font-display md:text-2xl font-bold text-neutral-900">No Limits on Affiliate Creatives</h2>
                    <p class="md:text-base text-sm text-neutral-500">You can share as many creatives as you like with your affiliates. Affiliates can access banners, product images, infographics, and more from their affiliate dashboards.</p>
                </div>
                <div class="space-y-2.5">
                    <div class="inline-flex items-start gap-2.5">
                        <?php get_template_part('template-parts/components/component', 'check-mark'); ?>
                        <span class="md:text-base text-sm text-neutral-500 font-normal">
                            We will never limit the number of creatives you can use.
                        </span>
                    </div>
                    <div class="inline-flex items-start gap-2.5">
                        <?php get_template_part('template-parts/components/component', 'check-mark'); ?>
                        <span class="md:text-base text-sm text-neutral-500 font-normal">
                            Provide affiliates with banner images, product images,
                            infographics, and more.
                        </span>
                    </div>
                    <div class="inline-flex items-start gap-2.5">
                        <?php get_template_part('template-parts/components/component', 'check-mark'); ?>
                        <span class="md:text-base text-sm text-neutral-500 font-normal">
                            Affiliates can access creatives directly from their
                            dashboards.
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div class="flex flex-col justify-center md:space-y-10 space-y-5">
                <div class="space-y-5">
                    <h2 class="font-display md:text-2xl font-bold text-neutral-900">No Limits on Affiliate Creatives</h2>
                    <p class="md:text-base text-sm text-neutral-500">You can share as many creatives as you like with your affiliates. Affiliates can access banners, product images, infographics, and more from their affiliate dashboards.</p>
                </div>
                <div class="space-y-2.5">
                    <div class="inline-flex items-start gap-2.5">
                        <?php get_template_part('template-parts/components/component', 'check-mark'); ?>
                        <span class="md:text-base text-sm text-neutral-500 font-normal">
                            We will never limit the number of creatives you can use.
                        </span>
                    </div>
                    <div class="inline-flex items-start gap-2.5">
                        <?php get_template_part('template-parts/components/component', 'check-mark'); ?>
                        <span class="md:text-base text-sm text-neutral-500 font-normal">
                            Provide affiliates with banner images, product images,
                            infographics, and more.
                        </span>
                    </div>
                    <div class="inline-flex items-start gap-2.5">
                        <?php get_template_part('template-parts/components/component', 'check-mark'); ?>
                        <span class="md:text-base text-sm text-neutral-500 font-normal">
                            Affiliates can access creatives directly from their
                            dashboards.
                        </span>
                    </div>
                </div>
            </div>
            <div class="md:order-1 -order-1">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/features/batch/vector-2.png" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>