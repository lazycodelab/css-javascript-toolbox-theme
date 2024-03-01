<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>

<section class="py-24 relative">
    <div class="absolute top-0 left-0">
        <svg width="278" height="595" viewBox="0 0 278 595" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.5" filter="url(#filter0_f_316_12075)">
                <ellipse cx="-17.4556" cy="297.5" rx="222.544" ry="224.5" fill="#AFF7EC" fill-opacity="0.6" />
            </g>
            <defs>
                <filter id="filter0_f_316_12075" x="-312.846" y="0.15403" width="590.781" height="594.692" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="36.423" result="effect1_foregroundBlur_316_12075" />
                </filter>
            </defs>
        </svg>
    </div>
    <div class="mx-auto container text-center space-y-10">
        <div class="space-y-5 max-w-2xl mx-auto">
            <h2 class="text-2xl font-bold md:text-5xl font-display">
                Frequently Asked Queries
            </h2>

            <p class="hidden text-xl font-normal sm:block text-gray-600">
                Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize frictionless expertise whereas tactical relationships. Still have questions? Contact us
            </p>
        </div>

        <div class="space-y-5 max-w-2xl mx-auto divide-y-2 divide-neutral-600 select-none">
            <?php for ($x = 0; $x <= 5; $x++) { ?>
                <details class="group [&_summary::-webkit-details-marker]:hidden space-y-5 pt-5">
                    <summary class="flex cursor-pointer items-center justify-between gap-1.5">
                        <h2 class="text-lg font-medium text-gray-900">
                            Where can I watch?
                        </h2>

                        <span class="shrink-0 rounded-full bg-white p-1.5 text-brand-blue sm:p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>

                    <p class="text-start text-base leading-relaxed text-neutral-600">
                        Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis.
                    </p>
                </details>
            <?php } ?>
        </div>
    </div>
</section>