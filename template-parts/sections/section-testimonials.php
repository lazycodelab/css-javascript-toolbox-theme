<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */
?>

<section class="md:pt-24 md:pb-40 pb-1 pt-10 bg-blue-50 relative overflow-hidden">
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
    <style>
        @media only screen and (min-width: 768px) {
            swiper-slide.swiper-slide-active {
                transform: translateY(-50px);
                transition-duration: 0.5s;
                transition-property: transform;
                transition-property: linear;
            }

            swiper-slide.swiper-slide-active blockquote {
                background: #005DA4 !important;
                color: white !important;
                transition: all 0.2s linear;
            }

            swiper-slide.swiper-slide-active blockquote p {
                color: white !important;
                transition: all 0.2s linear;
            }

            swiper-slide.swiper-slide-active blockquote svg path {
                fill: white !important;
            }
        }


        swiper-container .swiper .swiper-button-prev,
        swiper-container .swiper .swiper-button-next {
            background-color: #005DA4 !important;
            padding: 20px !important;
            border-radius: 8px !important;
            color: white !important;
            --swiper-navigation-size: 20px !important;
        }
    </style>
    <div class="mx-auto container text-center md:mb-64 mb-28 relative">
        <div class="md:space-y-5 space-y-2.5 max-w-2xl mx-auto md:px-0 px-5">
            <h2 class="text-2xl font-bold md:text-5xl font-display">
                What Our Client <br />Say About CJT PLUS
            </h2>

            <p class="md:text-xl text-sm font-medium text-neutral-600">
                We are incredibly humbled to have so many happy CJT PLUS customers, so we decided to let them speak for us. This is a small selection of the emails, reviews, and feedback we often receive.
            </p>
        </div>
        <swiper-container class="select-none mx-5 relative" loop="true" grab-cursor="true" centered-slides="true" space-between="30" breakpoints='
				{
					"320": {
						"slidesPerView": 1,
						"spaceBetween": 20
					},
					"570": {
						"slidesPerView": 2,
						"spaceBetween": 20
					},
					"768": {
						"slidesPerView": 3,
						"spaceBetween": 20
					},
					"1024": {
						"slidesPerView": 3,
						"spaceBetween": 20
					}
				}
			' navigation="true" navigation-prev-el="button[data-slider-nav-prev]" navigation-next-el="button[data-slider-nav-next]">
            <div slot="container-start" class="md:p-10 pt-5"></div>
            <swiper-slide class="space-y-5">
                <blockquote class="rounded bg-white md:p-10 md:shadow-xl p-5 space-y-5">
                    <div class="flex justify-center items-center gap-4">
                        <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.666 34.6425C7.606 32.4545 6.5 30.0005 6.5 26.0225C6.5 19.0225 11.414 12.7485 18.56 9.64648L20.346 12.4025C13.676 16.0105 12.372 20.6925 11.852 23.6445C12.926 23.0885 14.332 22.8945 15.71 23.0225C19.318 23.3565 22.162 26.3185 22.162 30.0005C22.162 31.857 21.4245 33.6375 20.1117 34.9502C18.799 36.263 17.0185 37.0005 15.162 37.0005C13.016 37.0005 10.964 36.0205 9.666 34.6425ZM29.666 34.6425C27.606 32.4545 26.5 30.0005 26.5 26.0225C26.5 19.0225 31.414 12.7485 38.56 9.64648L40.346 12.4025C33.676 16.0105 32.372 20.6925 31.852 23.6445C32.926 23.0885 34.332 22.8945 35.71 23.0225C39.318 23.3565 42.162 26.3185 42.162 30.0005C42.162 31.857 41.4245 33.6375 40.1117 34.9502C38.799 36.263 37.0185 37.0005 35.162 37.0005C33.016 37.0005 30.964 36.0205 29.666 34.6425Z" fill="black" />
                        </svg>
                    </div>
                    <p class="text-neutral-600 md:text-base text-sm sm:max-w-full max-w-64 mx-auto">
                        <span class="text-neutral-900 font-semibold">I wish to give it 6 stars!</span><br />
                        This is THE css/js plugin. No rivals, no competitors, this is definitely the best ever! Activate, deactivate, assign to different pages/taxonomies/etc, code highlight, and anything I need. Congratulations!! Thanks a lot!!
                    </p>
                </blockquote>
                <div class="flex flex-col justify-center space-y-1.5">
                    <h2 class="font-semibold md:text-xl text-sm">Alessandro Benassi</h2>
                    <p class="md:text-base text-neutral-900 text-xs">Los Angeles, California</p>
                    <div class="inline-flex mx-auto">
                        <?php for ($x = 0; $x <= 4; $x++) { ?>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#005DA4" class=" size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" fill="#005DA4" />
                            </svg>
                        <?php } ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#005DA4" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide class="space-y-5">
                <blockquote class="rounded bg-white md:p-10 md:shadow-xl p-5 space-y-5">
                    <div class="flex justify-center items-center gap-4">
                        <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.666 34.6425C7.606 32.4545 6.5 30.0005 6.5 26.0225C6.5 19.0225 11.414 12.7485 18.56 9.64648L20.346 12.4025C13.676 16.0105 12.372 20.6925 11.852 23.6445C12.926 23.0885 14.332 22.8945 15.71 23.0225C19.318 23.3565 22.162 26.3185 22.162 30.0005C22.162 31.857 21.4245 33.6375 20.1117 34.9502C18.799 36.263 17.0185 37.0005 15.162 37.0005C13.016 37.0005 10.964 36.0205 9.666 34.6425ZM29.666 34.6425C27.606 32.4545 26.5 30.0005 26.5 26.0225C26.5 19.0225 31.414 12.7485 38.56 9.64648L40.346 12.4025C33.676 16.0105 32.372 20.6925 31.852 23.6445C32.926 23.0885 34.332 22.8945 35.71 23.0225C39.318 23.3565 42.162 26.3185 42.162 30.0005C42.162 31.857 41.4245 33.6375 40.1117 34.9502C38.799 36.263 37.0185 37.0005 35.162 37.0005C33.016 37.0005 30.964 36.0205 29.666 34.6425Z" fill="black" />
                        </svg>
                    </div>
                    <p class="text-neutral-600 md:text-base text-sm sm:max-w-full max-w-64 mx-auto">
                        <span class="text-neutral-900 font-semibold">I wish to give it 6 stars!</span><br />
                        This is THE css/js plugin. No rivals, no competitors, this is definitely the best ever! Activate, deactivate, assign to different pages/taxonomies/etc, code highlight, and anything I need. Congratulations!! Thanks a lot!!
                    </p>
                </blockquote>
                <div class="flex flex-col justify-center space-y-1.5">
                    <h2 class="font-semibold md:text-xl text-sm">Alessandro Benassi</h2>
                    <p class="md:text-base text-neutral-900 text-xs">Los Angeles, California</p>
                    <div class="inline-flex mx-auto">
                        <?php for ($x = 0; $x <= 4; $x++) { ?>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#005DA4" class=" size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" fill="#005DA4" />
                            </svg>
                        <?php } ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#005DA4" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide class="space-y-5">
                <blockquote class="rounded bg-white md:p-10 md:shadow-xl p-5 space-y-5">
                    <div class="flex justify-center items-center gap-4">
                        <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.666 34.6425C7.606 32.4545 6.5 30.0005 6.5 26.0225C6.5 19.0225 11.414 12.7485 18.56 9.64648L20.346 12.4025C13.676 16.0105 12.372 20.6925 11.852 23.6445C12.926 23.0885 14.332 22.8945 15.71 23.0225C19.318 23.3565 22.162 26.3185 22.162 30.0005C22.162 31.857 21.4245 33.6375 20.1117 34.9502C18.799 36.263 17.0185 37.0005 15.162 37.0005C13.016 37.0005 10.964 36.0205 9.666 34.6425ZM29.666 34.6425C27.606 32.4545 26.5 30.0005 26.5 26.0225C26.5 19.0225 31.414 12.7485 38.56 9.64648L40.346 12.4025C33.676 16.0105 32.372 20.6925 31.852 23.6445C32.926 23.0885 34.332 22.8945 35.71 23.0225C39.318 23.3565 42.162 26.3185 42.162 30.0005C42.162 31.857 41.4245 33.6375 40.1117 34.9502C38.799 36.263 37.0185 37.0005 35.162 37.0005C33.016 37.0005 30.964 36.0205 29.666 34.6425Z" fill="black" />
                        </svg>
                    </div>
                    <p class="text-neutral-600 md:text-base text-sm sm:max-w-full max-w-64 mx-auto">
                        <span class="text-neutral-900 font-semibold">I wish to give it 6 stars!</span><br />
                        This is THE css/js plugin. No rivals, no competitors, this is definitely the best ever! Activate, deactivate, assign to different pages/taxonomies/etc, code highlight, and anything I need. Congratulations!! Thanks a lot!!
                    </p>
                </blockquote>
                <div class="flex flex-col justify-center space-y-1.5">
                    <h2 class="font-semibold md:text-xl text-sm">Alessandro Benassi</h2>
                    <p class="md:text-base text-neutral-900 text-xs">Los Angeles, California</p>
                    <div class="inline-flex mx-auto">
                        <?php for ($x = 0; $x <= 4; $x++) { ?>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#005DA4" class=" size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" fill="#005DA4" />
                            </svg>
                        <?php } ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#005DA4" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide class="space-y-5">
                <blockquote class="rounded bg-white md:p-10 md:shadow-xl p-5 space-y-5">
                    <div class="flex justify-center items-center gap-4">
                        <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.666 34.6425C7.606 32.4545 6.5 30.0005 6.5 26.0225C6.5 19.0225 11.414 12.7485 18.56 9.64648L20.346 12.4025C13.676 16.0105 12.372 20.6925 11.852 23.6445C12.926 23.0885 14.332 22.8945 15.71 23.0225C19.318 23.3565 22.162 26.3185 22.162 30.0005C22.162 31.857 21.4245 33.6375 20.1117 34.9502C18.799 36.263 17.0185 37.0005 15.162 37.0005C13.016 37.0005 10.964 36.0205 9.666 34.6425ZM29.666 34.6425C27.606 32.4545 26.5 30.0005 26.5 26.0225C26.5 19.0225 31.414 12.7485 38.56 9.64648L40.346 12.4025C33.676 16.0105 32.372 20.6925 31.852 23.6445C32.926 23.0885 34.332 22.8945 35.71 23.0225C39.318 23.3565 42.162 26.3185 42.162 30.0005C42.162 31.857 41.4245 33.6375 40.1117 34.9502C38.799 36.263 37.0185 37.0005 35.162 37.0005C33.016 37.0005 30.964 36.0205 29.666 34.6425Z" fill="black" />
                        </svg>
                    </div>
                    <p class="text-neutral-600 md:text-base text-sm sm:max-w-full max-w-64 mx-auto">
                        <span class="text-neutral-900 font-semibold">I wish to give it 6 stars!</span><br />
                        This is THE css/js plugin. No rivals, no competitors, this is definitely the best ever! Activate, deactivate, assign to different pages/taxonomies/etc, code highlight, and anything I need. Congratulations!! Thanks a lot!!
                    </p>
                </blockquote>
                <div class="flex flex-col justify-center space-y-1.5">
                    <h2 class="font-semibold md:text-xl text-sm">Alessandro Benassi</h2>
                    <p class="md:text-base text-neutral-900 text-xs">Los Angeles, California</p>
                    <div class="inline-flex mx-auto">
                        <?php for ($x = 0; $x <= 4; $x++) { ?>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#005DA4" class=" size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" fill="#005DA4" />
                            </svg>
                        <?php } ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#005DA4" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                    </div>
                </div>
            </swiper-slide>
        </swiper-container>
        <button class="bg-brand-blue md:top-[60%] top-[55%] rounded p-2.5 text-white absolute md:right-0 right-2.5 z-10" data-slider-nav-next>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </button>
        <button class="bg-brand-blue md:top-[60%] top-[55%] rounded p-2.5 text-white absolute md:left-0 left-2.5 z-10" data-slider-nav-prev>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </button>
    </div>

    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-64 -top-40 bg-cyan-400/30 blur-3xl md:size-[400px] size-[300px]']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 absolute rotate-6 right-40 top-40']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 absolute rotate-3 left-1/3 bottom-[30%]']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-300/50 absolute rotate-3 left-40 top-1/4']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 left-[40%] bottom-1/2']); ?>
</section>