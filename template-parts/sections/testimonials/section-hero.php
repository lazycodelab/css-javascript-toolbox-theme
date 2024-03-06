<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>
<section class="relative">
    <div class="container mx-auto grid grid-cols-1 h-4/5">
        <div class="space-y-5 max-w-4xl mx-auto text-center my-24">
            <h1 class="text-6xl font-display leading-tight">
                Testimonials
            </h1>
            <p class="font-medium text-xl text-neutral-600">We are incredibly humbled to have so many happy CJT PLUS customers, so we decided to let them speak for us. This is a small selection of the emails, reviews, and feedback we often receive.</p>
        </div>
        <div class="mx-auto mb-24">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/testimonial.svg" />
        </div>
    </div>
</section>