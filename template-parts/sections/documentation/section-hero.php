<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>
<section class="relative overflow-hidden">
    <div class="container mx-auto grid grid-cols-1 h-4/5 md:px-0 px-5">
        <div class="space-y-5 max-w-4xl mx-auto text-center md:my-24 my-10">
            <h1 class="md:text-6xl text-2xl font-display">
                Documentation
            </h1>
            <p class="font-medium md:text-xl text-base text-neutral-600">
                This documentation is all about <a href="/pricing" class="text-brand-blue underline font-bold">CJT PLUS</a>, but CJT Free users will also benefit while understanding the features CJT PLUS has to offer.
            </p>
        </div>
        <div class="mx-auto mb-24">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/documentation.svg" />
        </div>
    </div>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 left-[15%] bottom-1/2 animate-small-blob-2']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-300/50 -rotate-6 right-[30%] top-[8%] animate-small-blob-4']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-300/50 -rotate-6 right-[18%] bottom-[8%] animate-small-blob-3']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-left-52 -left-28 top-10 bg-cyan-400/30 blur-3xl md:size-[400px] size-[200px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-right-52 -right-28 top-40 bg-amber-400/30 blur-3xl md:size-[400px] size-[200px]']); ?>
</section>