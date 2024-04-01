<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>
<section class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto md:py-24 py-10 md:space-y-10 space-y-5">
        <div class="space-y-5 mx-auto text-center mt-24 md:px-0 px-5">
            <h1 class="md:text-5xl text-2xl text-neutral-900 font-display">
                Batch Operations
            </h1>
            <p class="font-medium md:text-xl text-base text-neutral-600">There are many batch operations that you can utilise in the master admin toolbar of CJT.</p>
        </div>
        <div class="flex justify-center">
            <?php get_template_part('template-parts/components/component', 'button', ['content' => 'Get CJT PLUS NOW', 'url' => '/']); ?>
        </div>
        <div class="md:w-2/3 mx-auto w-full">
            <div class="w-full bg-neutral-200 rounded flex justify-center items-center h-56">
                Video Placeholder
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 left-[5%] bottom-1/2 animate-small-blob']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-300/50 -rotate-6 right-[12%] top-[8%] animate-small-blob-2']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-300/50 -rotate-6 right-[20%] bottom-[25%] animate-small-blob-5']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-72 -top-28 bg-cyan-400/30 blur-3xl size-[400px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-right-64 top-40 bg-amber-400/30 blur-3xl size-[400px]']); ?>
</section>