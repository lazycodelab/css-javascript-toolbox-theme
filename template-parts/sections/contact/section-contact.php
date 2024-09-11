<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>
<section class="relative bg-gradient-to-b from-white to-sky-50">
    <div class="max-w-7xl mx-auto md:pb-96 pb-32 z-[9999] relative">
        <div class="space-y-5 max-w-4xl mx-auto text-center mt-24 md:px-0 px-5">
            <h1 class="md:text-5xl text-2xl text-neutral-900 font-display">
                Hello, how can we help?
            </h1>
            <p class="font-medium md:text-xl text-base text-neutral-600">If you would like to send the CJT PLUS team a message, please use the contact form below.</p>
        </div>
        <div class="xl:hidden flex justify-center">
            <img class="w-64 h-64" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/contact.svg" />
        </div>
        <div class="md:py-24 pb-0 pt-10 relative">
            <div class="bg-white rounded-lg shadow-md md:p-10 p-5 xl:w-3/4 w-full space-y-10">
                <div class="space-y-5">
                    <p class="md:text-xl text-base font-medium">We are always happy to receive feedback for our plugins, whether it be a support question, a feature request, a bug fix, or just a compliment.</p>
                    <p class="md:text-xl text-base font-medium">
                        <span class="font-semibold">Please don't hesitate to contact us,</span> and we will do our very best to get back to you as soon as possible. Thank You.
                    </p>
                </div>
                <div class="space-y-10 xl:w-2/3 w-full">
                    <?php echo do_shortcode( '[contact-form-7 id="04be99f" title="Contact form 1"]'); ?>
                </div>
                <div class="absolute bottom-20 right-0 xl:block hidden">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/contact.svg" />
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 w-full right-0 z-10">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#3AAAFF" fill-opacity="0.35" d="M0,192L40,213.3C80,235,160,277,240,250.7C320,224,400,128,480,128C560,128,640,224,720,245.3C800,267,880,213,960,160C1040,107,1120,53,1200,32C1280,11,1360,21,1400,26.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </div>
    <div class="absolute bottom-0 w-full left-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#005DA4" fill-opacity="1" d="M0,32L34.3,32C68.6,32,137,32,206,58.7C274.3,85,343,139,411,176C480,213,549,235,617,224C685.7,213,754,171,823,149.3C891.4,128,960,128,1029,144C1097.1,160,1166,192,1234,176C1302.9,160,1371,96,1406,64L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </div>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 left-[5%] bottom-1/2 animate-small-blob']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-300/50 -rotate-6 right-[12%] top-[8%] animate-small-blob-2']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-300/50 -rotate-6 right-[50%] bottom-[25%] animate-small-blob-5']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-72 -top-28 bg-cyan-400/30 blur-3xl size-[400px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-right-64 top-40 bg-amber-400/30 blur-3xl size-[400px]']); ?>
</section>
