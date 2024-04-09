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
	<div class="mx-auto max-w-7xl text-center">
		<div class="space-y-5 max-w-3xl mx-auto">
			<h2 class="text-2xl font-bold md:text-5xl font-display">
				Simple, transparent pricing
			</h2>

			<p class="md:text-base text-sm font-medium sm:block text-neutral-500">
				No contracts. No surprise fees.
			</p>
		</div>


		<div class="grid grid-cols-1 sm:grid-cols-2 sm:items-stretch lg:grid-cols-4 rounded-lg sm:bg-white lg:mt-36 mt-5 sm:gap-0 gap-5 sm:mx-0 mx-5">
			<?php
			foreach ($plans as $plan) :
				$containerClasses = 'px-5 py-5 space-y-8';
				$headingClasses      = 'text-neutral-700';
				$textClasses      = 'text-neutral-500';
				$ctaClasses       = 'group rounded px-6 text-base inline-flex items-center font-semibold py-3 gap-x-1 shadow-md';

				if ($plan["highlight"] === true) {
					$containerClasses .= ' lg:rounded-3xl rounded lg:shadow-[0px_40px_30px_0px] sm:shadow-[0px_10px_30px_0px] lg:shadow-brand-blue/25 sm:shadow-brand-blue/25 shadow-md relative lg:-top-24 bg-brand-blue';
					$textClasses      = 'text-white';
					$headingClasses = 'text-white';
					$ctaClasses .= ' text-brand-blue bg-white';
				} else {
					$containerClasses .= ' bg-white sm:shadow-none shadow-md';
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

								<h2 class="text-2xl font-medium <?php echo $headingClasses; ?>">
									<?php echo $plan['name']; ?>
								</h2>
							</div>

							<p class="text-4xl relative <?php echo $headingClasses; ?> sm:text-4xl lg:text-7xl font-display tracking-wide">
								<?php echo '<sup class="text-2xl font-normal font-body relative lg:-top-8 -top-4">$</sup>' . $plan['price'] . '<sub class="text-neutral-400 text-xs font-normal font-body tracking-normal absolute bottom-1">/year</sub>'; ?>
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

					<ul class="space-y-2.5 border-t <?= $plan['highlight'] ? 'border-t-neutral-50/10' : 'border-t-neutral-100'; ?> pt-8">
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
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-300/50 rotate-6 left-[10%] top-20 animate-small-blob']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 -rotate-6 left-[5%] bottom-1/2 animate-small-blob-2']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 rotate-3 right-[5%] bottom-1/3 animate-small-blob-3']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 right-[20%] top-40 animate-small-blob-4']); ?>
</section>
