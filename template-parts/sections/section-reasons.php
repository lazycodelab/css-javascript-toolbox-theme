<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>

<section class="md:py-24 py-10 relative overflow-hidden">
    <div class="mx-auto container md:space-y-10 space-y-14">
        <div class="relative">
            <h2 class="text-2xl font-bold md:text-5xl font-display md:max-w-4xl max-w-72 mx-auto text-center">
                Top 6 Reasons Why Over 2 Million Users Love
                <span class="text-brand-blue">CJT PLUS</span>
            </h2>
            <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'top-0 md:left-[55%] left-20 bg-cyan-400/30 md:blur-3xl blur-xl md:size-[200px] size-[120px] -z-[1]']); ?>
            <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-top-10 top-8 md:left-[65%] left-52 bg-amber-400/40 md:blur-3xl blur-2xl md:size-[130px] size-[80px] -z-[1]']); ?>
        </div>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div class="w-full h-full md:mx-auto relative">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-1.svg" />
                <div class="absolute right-0 top-1/4 md:px-0 px-3">
                    <img class="md:w-3/4 w-full ml-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-1.png" />
                </div>
            </div>
            <div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5 px-5">
                <h2 class="font-display font-bold md:text-3xl text-xl">Benefits of CJT plus Work faster with powerful Plugin.</h2>
                <div class="inline-flex items-center gap-2.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693"></path>
                        <path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4"></path>
                    </svg>
                    <span class="md:text-xl text-base text-gray-600 font-normal">
                        Combined with a handful of model sentence structures looks reasonable.
                    </span>
                </div>
                <div class="inline-flex items-center gap-2.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693"></path>
                        <path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4"></path>
                    </svg>
                    <span class="md:text-xl text-base text-gray-600 font-normal">
                        Combined with a handful of model sentence structures looks reasonable.
                    </span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5 px-5">
                <h2 class="font-display font-bold md:text-3xl text-xl">Benefits of CJT plus Work faster with powerful Plugin.</h2>
                <div class="inline-flex items-center gap-2.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693"></path>
                        <path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4"></path>
                    </svg>
                    <span class="md:text-xl text-base text-gray-600 font-normal">
                        Combined with a handful of model sentence structures looks reasonable.
                    </span>
                </div>
                <div class="inline-flex items-center gap-2.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693"></path>
                        <path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4"></path>
                    </svg>
                    <span class="md:text-xl text-base text-gray-600 font-normal">
                        Combined with a handful of model sentence structures looks reasonable.
                    </span>
                </div>
            </div>

            <div class="w-full h-full md:mx-auto relative md:order-1 -order-1">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.svg" />
                <div class="absolute right-0 md:top-1/4 top-5 md:px-0 px-3">
                    <img class="md:w-3/4 w-full ml-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div class="w-full h-full mx-auto relative">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-3.svg" />
                <div class="absolute left-0 top-1/4 md:px-0 px-3">
                    <img class="md:w-3/4 w-full ml-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
                </div>
            </div>
            <div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5 px-5">
                <h2 class="font-display font-bold md:text-3xl text-xl">Benefits of CJT plus Work faster with powerful Plugin.</h2>
                <div class="inline-flex items-center gap-2.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693"></path>
                        <path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4"></path>
                    </svg>
                    <span class="md:text-xl text-base text-gray-600 font-normal">
                        Combined with a handful of model sentence structures looks reasonable.
                    </span>
                </div>
                <div class="inline-flex items-center gap-2.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693"></path>
                        <path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4"></path>
                    </svg>
                    <span class="md:text-xl text-base text-gray-600 font-normal">
                        Combined with a handful of model sentence structures looks reasonable.
                    </span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5 px-5">
                <h2 class="font-display font-bold md:text-3xl text-xl">Benefits of CJT plus Work faster with powerful Plugin.</h2>
                <div class="inline-flex items-center gap-2.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693"></path>
                        <path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4"></path>
                    </svg>
                    <span class="md:text-xl text-base text-gray-600 font-normal">
                        Combined with a handful of model sentence structures looks reasonable.
                    </span>
                </div>
                <div class="inline-flex items-center gap-2.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693"></path>
                        <path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4"></path>
                    </svg>
                    <span class="md:text-xl text-base text-gray-600 font-normal">
                        Combined with a handful of model sentence structures looks reasonable.
                    </span>
                </div>
            </div>
            <div class="w-full h-full mx-auto relative md:order-1 -order-1">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-4.svg" />
                <div class="absolute right-0 md:top-1/3 top-4 md:px-0 px-3">
                    <img class="md:w-3/4 w-full mx-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div class="w-full h-full mx-auto relative">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-5.svg" />
                <div class="absolute right-0 top-1/3 md:px-0 px-3">
                    <img class="md:w-3/4 w-full ml-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/background/vector-2.png" />
                </div>
            </div>
            <div class="flex flex-col items-center justify-center md:space-y-5 space-y-2.5 px-5">
                <h2 class="font-display font-bold md:text-3xl text-xl">Benefits of CJT plus Work faster with powerful Plugin.</h2>
                <div class="inline-flex items-center gap-2.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693"></path>
                        <path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4"></path>
                    </svg>
                    <span class="md:text-xl text-base text-gray-600 font-normal">
                        Combined with a handful of model sentence structures looks reasonable.
                    </span>
                </div>
                <div class="inline-flex items-center gap-2.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693"></path>
                        <path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4"></path>
                    </svg>
                    <span class="md:text-xl text-base text-gray-600 font-normal">
                        Combined with a handful of model sentence structures looks reasonable.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-300/50 rotate-6 top-10 left-1/2']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 -rotate-6 left-[20%] top-[40%]']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 rotate-3 right-[5%] bottom-[40%]']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 top-[25%] left-[40%]']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-300/50 rotate-6 bottom-10 right-1/2']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 -rotate-6 right-[60%] bottom-[20%]']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 rotate-3 left-[15%] top-[40%]']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 bottom-[25%] right-[40%]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-64 bottom-[15%] bg-cyan-400/30 blur-3xl size-[400px] -z-[1]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-right-64 bottom-20 bg-amber-300/30 blur-3xl size-[400px] -z-[1]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-64 bottom-[55%] bg-cyan-400/30 blur-3xl size-[400px] -z-[1]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-right-64 bottom-[50%] bg-amber-300/30 blur-3xl size-[400px] -z-[1]']); ?>
</section>