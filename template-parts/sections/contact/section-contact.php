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
    <div class="container mx-auto md:pb-96 pb-32">
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
                <form class="space-y-10 xl:w-2/3 w-full">
                    <div class="space-y-5">
                        <div class="space-y-2.5">
                            <label class="font-bold md:text-base text-sm">Name</label>
                            <input type="text" class="h-full w-full rounded-lg border-2 p-2.5 font-sans font-normal text-blue-gray-700 transition-all placeholder-shown:border focus:border-2 focus:border-gray-900 text-lg disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0" />
                        </div>
                        <div class="space-y-2.5">
                            <label class="font-bold md:text-base text-sm">Email</label>
                            <input type="email" class="h-full w-full rounded-lg border-2 p-2.5 font-sans font-normal text-blue-gray-700 transition-all placeholder-shown:border focus:border-2 focus:border-gray-900 text-lg disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0" />
                        </div>
                        <div class="space-y-2.5">
                            <label class="font-bold md:text-base text-sm">Subject</label>
                            <input type="text" class="h-full w-full rounded-lg border-2 p-2.5 font-sans font-normal text-blue-gray-700 transition-all placeholder-shown:border focus:border-2 focus:border-gray-900 text-lg disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0" />
                        </div>
                        <div class="space-y-2.5">
                            <label class="font-bold md:text-base text-sm">Message</label>
                            <textarea rows="4" class="h-full w-full rounded-lg border-2 p-2.5 font-sans font-normal text-blue-gray-700 transition-all placeholder-shown:border focus:border-2 focus:border-gray-900 text-lg disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0"></textarea>
                        </div>
                        <button type="submit" class="py-3 px-7 bg-neutral-900 rounded-lg text-white">Submit</button>
                    </div>
                </form>
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
    <!-- Left Blob -->
    <div class="absolute left-0 top-0">
        <svg width="253" height="437" viewBox="0 0 253 437" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.5" filter="url(#filter0_f_626_20589)">
                <circle cx="34.5" cy="218.5" r="164.5" fill="#34DAFF" fill-opacity="0.3" />
            </g>
            <defs>
                <filter id="filter0_f_626_20589" x="-183.846" y="0.153847" width="436.692" height="436.692" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="26.9231" result="effect1_foregroundBlur_626_20589" />
                </filter>
            </defs>
        </svg>
    </div>

    <!-- Right blob -->
    <div class="absolute right-0 top-0">
        <svg width="274" height="461" viewBox="0 0 274 461" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.3" filter="url(#filter0_f_626_20592)">
                <circle cx="230.5" cy="230.5" r="164.5" fill="#FFEAAA" />
            </g>
            <defs>
                <filter id="filter0_f_626_20592" x="0.134132" y="0.134132" width="460.732" height="460.732" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="32.9329" result="effect1_foregroundBlur_626_20592" />
                </filter>
            </defs>
        </svg>
    </div>
</section>