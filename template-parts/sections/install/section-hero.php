<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */
?>

<section class="relative md:py-24 py-10">
    <div class="container mx-auto md:px-0 px-5">
        <div class="space-y-5 md:max-w-4xl mx-auto text-center md:mb-24 mb-10">
            <h1 class="md:text-6xl text-2xl font-display leading-tight">
                Install CJT / CJT PLUS
            </h1>
            <p class="font-medium md:text-xl text-base text-neutral-600">
                CJT PLUS is an extension plugin that requires the core CJT plugin from WordPress.org to work.
            </p>
        </div>
        <div class="flex justify-center md:mb-24 mb-10">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/install.svg" />
        </div>
        <div class="border border-neutral-900 rounded-lg md:p-10 p-5 relative overflow-hidden">
            <p class="md:text-xl text-base font-medium md:max-w-5xl text-center mx-auto text-neutral-600">
                <span class="text-neutral-900 font-medium">Before installing and activating CSS & JavaScript Toolbox PLUS,</span> you must first install and activate the core CSS & JavaScript Toolbox plugin, which is free from WordPress.org here: <a class="text-brand-blue font-normal underline block" href="https://wordpress.org/plugins/css-javascript-toolbox">https://wordpress.org/plugins/css-javascript-toolbox</a>
            </p>
            <div class="absolute -right-96 top-0 rounded-full bg-cyan-400/30 blur-3xl -z-[1] size-[500px]"></div>
            <div class="absolute -left-80 bottom-0 rounded-full bg-orange-200/40 blur-3xl -z-[1] size-[400px]"></div>
            <div class="size-5 rounded-md bg-lime-200/50 absolute -rotate-6 left-[20%] top-3/4 md:block hidden"></div>
	        <div class="size-5 rounded-md bg-amber-200/50 absolute rotate-3 right-[15%] top-1/4 -z-[1] md:block hidden"></div>
        </div>
        <p class="md:text-xl text-base font-medium text-center mx-auto text-neutral-600 mt-5">
            <span class="text-neutral-900 font-medium">Once the core CSS & JavaScript Toolbox is installed and activated,</span> you can then install and activate the <span class="text-brand-blue">premium CSS & JavaScript Toolbox PLUS</span> as you normally would via either the WordPress Plugins Page or Manually via FTP directly to the Plugins folder on your server.
        </p>
    </div>
    <div class="size-5 rounded-md bg-blue-200/50 absolute rotate-6 left-1/4 top-20 md:block hidden"></div>
	<div class="size-5 rounded-md bg-amber-200/50 absolute -rotate-6 left-[15%] bottom-1/2 md:block hidden"></div>
	<div class="size-5 rounded-md bg-lime-200/50 absolute rotate-3 right-[15%] top-1/4 -z-[1] md:block hidden"></div>
	<div class="size-5 rounded-md bg-blue-200/50 absolute right-1/4 top-2/4 -z-[1] md:block hidden"></div>
    <div class="absolute -left-80 top-0 rounded-full bg-cyan-400/30 blur-3xl -z-[1] size-[400px]"></div>
    <div class="absolute -right-72 top-40 rounded-full bg-orange-200/40 blur-3xl size-[400px]"></div>
</section>