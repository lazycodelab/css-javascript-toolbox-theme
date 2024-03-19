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


<section class="md:py-24 py-10 bg-slate-50 relative">
	<div class="mx-auto container text-center">
		<div class="space-y-5 max-w-3xl mx-auto">
			<h2 class="text-2xl font-bold md:text-5xl font-display">
				Simple, transparent pricing
			</h2>

			<p class="md:text-xl text-base font-medium sm:block text-gray-600">
				No contracts. No surprise fees.
			</p>
		</div>


		<div class="grid grid-cols-1 md:grid-cols-2 sm:items-stretch lg:grid-cols-4 md:gap-5 rounded-lg bg-white md:mt-44 mt-5 md:mx-0 mx-5 md:border-none border border-black md:divide-y-0 divide-y-2">

			<?php
			$containerClasses = 'p-10 divide-gray-200 space-y-5';
			foreach ($plans as $plan) :
				if ($plan["highlight"] === true) {
					$containerClasses .= ' md:rounded-3xl rounded-lg md:shadow-[0px_40px_30px_0px] shadow-[0px_10px_30px_0px] md:shadow-brand-blue/25 shadow-brand-blue/25 relative lg:-top-28 bg-brand-blue';
				}
				?>

				<div class="<?php echo $containerClasses; ?>">
					<div class="space-y-2.5 text-start">
						<div class="space-y-5">
							<h2>
								<strong class="text-3xl font-medium text-gray-900 sm:text-4xl">$
									<?php echo $plan['price']; ?>
								</strong>
								<!--<span class="text-sm font-medium text-gray-700">/month</span>-->
							</h2>
							<p class="text-3xl font-medium text-indigo-950">
								<?php echo $plan['name']; ?>
							</p>
						</div>
						<p class="text-neutral-600">CJT PLUS premium WordPress plugin</p>
					</div>


					<ul class="space-y-2.5">
						<?php foreach ($plan['features'] as $feature) : ?>
							<li class="flex items-center gap-2.5">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z" fill="#5243C2" fill-opacity="0.103693" />
									<path d="M15.7741 6.83362L10.07 14.5745C9.93392 14.7549 9.73107 14.8732 9.50698 14.9027C9.28289 14.9321 9.05636 14.8703 8.8783 14.7311L4.80496 11.4745C4.44552 11.1868 4.38731 10.6622 4.67496 10.3028C4.96261 9.94334 5.48718 9.88514 5.84663 10.1728L9.2433 12.8903L14.4325 5.84778C14.6026 5.59244 14.8993 5.45127 15.2048 5.48032C15.5103 5.50936 15.7751 5.70393 15.8941 5.98676C16.013 6.2696 15.967 6.59494 15.7741 6.83362Z" fill="#005DA4" />
								</svg>

								<span class="text-gray-700">1 site install only</span>
							</li>
						<?php endforeach; ?>
					</ul>
					<button class="rounded-lg inline-flex px-6 text-xl font-semibold py-3.5 text-brand-blue bg-brand-blue/10">
						Explore Plugins Now
					</button>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
