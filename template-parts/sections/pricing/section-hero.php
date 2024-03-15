<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

$plans = include get_template_directory() . '/data/pricing-data.php';

?>


<section class="py-24 relative">
	<div class="mx-auto container text-center">
		<div class="space-y-5">
			<?php get_template_part('template-parts/components/component', 'section-heading', ['content' => 'Unbelievably Easy WordPress Customization <br />At Unbeatable Price']); ?>

			<?php get_template_part('template-parts/components/component', 'section-paragraph', ['content' => 'Join the thriving community of thousands of websites already benefiting from CJT\'s powerful features.']); ?>
		</div>

		<div class="grid grid-cols-1 sm:grid-cols-2 sm:items-stretch md:grid-cols-4 rounded-lg bg-white lg:mt-56">

			<?php
			foreach ($plans as $plan) :
				$containerClasses = 'px-10 py-5 space-y-8';
				$textClasses      = 'text-neutral-600';
				$ctaClasses       = 'group rounded px-6 text-base inline-flex items-center font-semibold py-3 gap-x-1 shadow-md';

				if ($plan["highlight"] === true) {
					$containerClasses .= ' md:rounded-3xl rounded-lg md:shadow-[0px_40px_30px_0px] shadow-[0px_10px_30px_0px] md:shadow-brand-blue/25 shadow-brand-blue/25 relative lg:-top-24 bg-brand-blue';
					$textClasses      = 'text-white';
					$ctaClasses .= ' text-brand-blue bg-white';
				} else {
					$ctaClasses .= ' bg-brand-blue text-white';
				}
				?>

				<div class="<?php echo $containerClasses; ?>">
					<div class="space-y-2.5 text-center">
						<div class="space-y-3">
							<div class="space-y-8">
								<?php if ($plan['highlight'] === true) : ?>
									<p class="text-base inline font-bold tracking-wide uppercase bg-white text-brand-blue rounded-full px-8 py-1">
										Most Popular
									</p>
								<?php endif; ?>

								<h2 class="text-2xl font-medium <?php echo $textClasses; ?>">
									<?php echo $plan['name']; ?>
								</h2>
							</div>

							<p class="text-4xl relative <?php echo $textClasses; ?> sm:text-4xl lg:text-7xl font-display tracking-wide">
								<?php echo '<sup class="text-2xl font-normal font-body -top-8">$</sup>' . $plan['price'] . '<sub class="text-neutral-400 text-xs font-normal font-body tracking-normal absolute bottom-1">/year</sub>'; ?>
							</p>
						</div>
						<p class="<?php echo $textClasses; ?>">
							<?php echo $plan['description']; ?>
						</p>
					</div>

					<button class="<?= $ctaClasses; ?>">
						Get Started
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 group-hover:translate-x-0.5 duration-150">
							<path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd" />
						</svg>

					</button>

					<ul class="space-y-2.5 border-t border-t-neutral-50/10 pt-8">
						<?php foreach ($plan['features'] as $feature) : ?>
							<li class="flex items-center gap-2.5 <?= $textClasses; ?>">
								<svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5" role="presentation">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
								</svg>
								<?= $feature; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<!-- Blue blob start -->
	<div class="absolute left-0 top-0">
		<svg width="330" height="628" viewBox="0 0 330 628" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g opacity="0.5" filter="url(#filter0_f_316_11644)">
				<circle cx="16" cy="314" r="236" fill="#34DAFF" fill-opacity="0.3" />
			</g>
			<defs>
				<filter id="filter0_f_316_11644" x="-297.25" y="0.749588" width="626.501" height="626.501" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix" />
					<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
					<feGaussianBlur stdDeviation="38.6252" result="effect1_foregroundBlur_316_11644" />
				</filter>
			</defs>
		</svg>
	</div>
	<!-- Blue blob end -->

	<!-- Blue blob start -->
	<div class="absolute -right-72 top-40 rounded-full bg-amber-200/40 blur-xl size-[600px]">
	</div>
	<!-- Blue blob end -->

	<div class="size-5 rounded-md bg-blue-200/50 absolute rotate-6 left-1/2 top-20"></div>
	<div class="size-5 rounded-md bg-amber-200/50 absolute -rotate-6 right-1/3 bottom-1/2"></div>
	<div class="size-5 rounded-md bg-lime-200/50 absolute rotate-3 left-1/3 top-1/3 -z-[1]"></div>
	<div class="size-5 rounded-md bg-blue-200/50 absolute left-96 top-2/4 -z-[1]"></div>
</section>
