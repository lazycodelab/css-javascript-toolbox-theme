<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

$data = [
	[
		"heading" => "I wish to give it 6 stars!",
		"content" => "This is THE css/js plugin. No rivals, no competitors, this is definitely the best ever! Activate, deactivate, assign to different pages/taxonomies/etc, code highlight, and anything I need. Congratulations!! Thanks a lot!!",
		"author"  => "Alessandro Benassi",
		"link"    => [
			"title" => "Alessandro Benassi on Behance",
			"url"   => "https://www.behance.net/ap_benassi"
		]
	], [
		"heading" => "Excellent",
		"content" => "This plugin does exactly what I was looking for, so simple and effective. Congratulations to the authors!",
		"author"  => "Francesco Menzera",
		"link"    => [
			"title" => "menzera.com",
			"url"   => "https://menzera.com"
		]
	], [
		"heading" => "It works where others failed",
		"content" => "Several other plugins we tried failed to insert code correctly. Although this has a slightly 'clunky' interface it has so far inserted code accurately every time. Recommended.",
		"author"  => "Simon Watson",
		"link"    => [
			"title" => "swearingdad.com",
			"url"   => "swearingdad.com"
		]
	], [
		"heading" => "This plugin saves me hours of time",
		"content" => "This is my most used plugin. It's incredibly useful. It allows incredible customisation to a WordPress install.",
		"author"  => "Carob Cherub",
		"link"    => [
			"title" => "Carob Cherub",
			"url"   => "https://carobcherub.com"
		]
	], [
		"heading" => "All Pain of WordPress is Gone",
		"content" => "The pain of any CMS is the box one is placed in. This plugin frees those of us who want a little extra (or a lot of extra) customisation. Adding custom CSS and Javascript in a WordPress site could not be easier.",
		"author"  => "Chris Wood",
		"link"    => [
			"title" => "handsomeweb.com",
			"url"   => "https://handsomeweb.com"
		]
	],
];
?>

<section
	class="md:pt-24 md:pb-40 p-4 bg-blue-50 relative overflow-hidden">
	<style>
		@media only screen and (min-width: 768px) {
			.testimonialSwiper swiper-slide.swiper-slide-active {
				transform: translateY(-30px) scale(1.1);
				z-index: 99;
				transition: all 0.4s ease-in-out;
			}

			.testimonialSwiper swiper-slide.swiper-slide-active blockquote {
				background: #005DA4 !important;
				color: white !important;
				transition: all 0.2s linear;
			}

			.testimonialSwiper swiper-slide.swiper-slide-active blockquote p,
			.testimonialSwiper swiper-slide.swiper-slide-active blockquote h3 {
				color: white !important;
				transition: all 0.2s linear;
			}

			.testimonialSwiper swiper-slide.swiper-slide-active blockquote svg path {
				fill: white !important;
			}
		}


		.testimonialSwiper swiper-container .swiper .swiper-button-prev,
		.testimonialSwiper swiper-container .swiper .swiper-button-next {
			background-color: #005DA4 !important;
			padding: 20px !important;
			border-radius: 8px !important;
			color: white !important;
			--swiper-navigation-size: 20px !important;
		}

	</style>
	<div class="mx-auto md:max-w-7xl text-center md:mb-64 mb-28 relative z-20">
		<div class="md:space-y-5 space-y-2.5 md:max-w-4xl mx-auto">
			<h2 class="text-2xl font-bold md:text-5xl font-display">
				What our customers say about CSS & JavaScript Toolbox <span
					class="text-brand-blue">PLUS</span>
			</h2>

			<p class="md:text-base text-sm font-medium text-neutral-600">
				We are incredibly humbled to have so many happy CSS & JavaScript
				Toolbox PLUS customers, we decided to let them speak for us.
				This is a small selection of the emails, reviews, and feedback
				we receive. <br /><a
					class="text-brand-blue/70 underline-offset-2 hover:underline-offset-4 duration-300 underline hover:text-brand-blue"
					href="<?php echo site_url('/testimonials'); ?>">Click for
					more real customer testimonials</a>.
			</p>
		</div>
		<swiper-container
			class="testimonialSwiper select-none mx-5 relative h-fit"
			loop="true" grab-cursor="true" centered-slides="true"
			space-between="0" breakpoints='
				{
					"320": {
						"slidesPerView": 1,
						"spaceBetween": 0
					},
					"570": {
						"slidesPerView": 2,
						"spaceBetween": 0
					},
					"768": {
						"slidesPerView": 3,
						"spaceBetween": 0
					},
					"1024": {
						"slidesPerView": 3,
						"spaceBetween": 0
					}
				}
			' navigation="true" navigation-prev-el="button[data-slider-nav-prev]"
			navigation-next-el="button[data-slider-nav-next]">
			<div slot="container-start" class="md:p-16 pt-5"></div>
			<?php foreach ($data as $d) : ?>
				<swiper-slide class="space-y-5">
					<blockquote
						class="rounded bg-white md:p-10 md:shadow-xl p-5 space-y-5">
						<div class="flex justify-center items-center gap-4">
							<svg width="49" height="48" viewBox="0 0 49 48"
								fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M9.666 34.6425C7.606 32.4545 6.5 30.0005 6.5 26.0225C6.5 19.0225 11.414 12.7485 18.56 9.64648L20.346 12.4025C13.676 16.0105 12.372 20.6925 11.852 23.6445C12.926 23.0885 14.332 22.8945 15.71 23.0225C19.318 23.3565 22.162 26.3185 22.162 30.0005C22.162 31.857 21.4245 33.6375 20.1117 34.9502C18.799 36.263 17.0185 37.0005 15.162 37.0005C13.016 37.0005 10.964 36.0205 9.666 34.6425ZM29.666 34.6425C27.606 32.4545 26.5 30.0005 26.5 26.0225C26.5 19.0225 31.414 12.7485 38.56 9.64648L40.346 12.4025C33.676 16.0105 32.372 20.6925 31.852 23.6445C32.926 23.0885 34.332 22.8945 35.71 23.0225C39.318 23.3565 42.162 26.3185 42.162 30.0005C42.162 31.857 41.4245 33.6375 40.1117 34.9502C38.799 36.263 37.0185 37.0005 35.162 37.0005C33.016 37.0005 30.964 36.0205 29.666 34.6425Z"
									fill="black" />
							</svg>
						</div>
						<div>
							<h3 class="text-neutral-900 font-semibold swiper-title">
								<?php echo $d['heading']; ?>
							</h3>
							<p
								class="text-neutral-600 md:text-base text-sm sm:max-w-full max-w-64 mx-auto">
								<?php echo $d['content']; ?>
							</p>
						</div>
					</blockquote>
					<div class="flex flex-col justify-center space-y-1.5">
						<h2 class="font-semibold md:text-xl text-sm">
							<?php echo $d['author']; ?>
						</h2>
						<a class="text-base text-brand-blue font-normal underline"
							href="<?php echo $d['link']['url']; ?>"><?php echo $d['link']['title']; ?></a>
						<div class="inline-flex mx-auto">
							<?php for ($x = 0; $x <= 5; $x++) { ?>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none"
									viewBox="0 0 24 24" stroke-width="1.5"
									stroke="#005DA4" class="size-5">
									<path stroke-linecap="round" stroke-linejoin="round"
										d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"
										fill="#005DA4" />
								</svg>
							<?php } ?>
						</div>
					</div>
				</swiper-slide>
			<?php endforeach; ?>
		</swiper-container>
		<button
			class="bg-brand-blue md:top-[60%] top-[55%] rounded p-2.5 text-white absolute md:right-0 right-2.5 z-10"
			data-slider-nav-next>
			<svg xmlns="http://www.w3.org/2000/svg" fill="none"
				viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
				class="size-5">
				<path stroke-linecap="round" stroke-linejoin="round"
					d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
			</svg>
		</button>
		<button
			class="bg-brand-blue md:top-[60%] top-[55%] rounded p-2.5 text-white absolute md:left-0 left-2.5 z-10"
			data-slider-nav-prev>
			<svg xmlns="http://www.w3.org/2000/svg" fill="none"
				viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
				class="size-5">
				<path stroke-linecap="round" stroke-linejoin="round"
					d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
			</svg>
		</button>
	</div>

	<?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-64 -top-40 bg-cyan-400/30 blur-3xl md:size-[400px] size-[300px]']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 absolute rotate-6 right-40 top-40 animate-small-blob']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 absolute rotate-3 left-1/3 bottom-[30%] animate-small-blob-2']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-300/50 absolute rotate-3 left-40 top-1/4 animate-small-blob-5']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 left-[40%] bottom-1/2 animate-small-blob-3']); ?>

	<div class="absolute bottom-0 w-full right-0 z-10">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#3AAAFF" fill-opacity="0.35"
				d="M0,192L40,213.3C80,235,160,277,240,250.7C320,224,400,128,480,128C560,128,640,224,720,245.3C800,267,880,213,960,160C1040,107,1120,53,1200,32C1280,11,1360,21,1400,26.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
			</path>
		</svg>
	</div>
	<div class="absolute bottom-0 w-full left-0 z-0">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#005DA4" fill-opacity="1"
				d="M0,32L34.3,32C68.6,32,137,32,206,58.7C274.3,85,343,139,411,176C480,213,549,235,617,224C685.7,213,754,171,823,149.3C891.4,128,960,128,1029,144C1097.1,160,1166,192,1234,176C1302.9,160,1371,96,1406,64L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
			</path>
		</svg>
	</div>
</section>
