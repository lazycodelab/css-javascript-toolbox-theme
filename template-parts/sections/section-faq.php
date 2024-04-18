<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

$faqData = include get_template_directory() . '/data/faq-data.php';
?>

<section class="md:py-24 py-10 relative overflow-hidden">
	<div class="mx-auto max-w-7xl text-center space-y-10 md:px-0 px-5">
		<div class="md:space-y-5 space-y-2.5 max-w-3xl mx-auto">
			<h2 class="text-2xl font-bold md:text-5xl font-display">
				Frequently Asked Queries
			</h2>

			<p class="md:text-base text-sm font-normal sm:block text-neutral-500">
				Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize frictionless expertise whereas tactical relationships. Still have questions? Contact us
			</p>
		</div>

		<div class="md:space-y-3 space-y-2.5 max-w-2xl mx-auto divide-y divide-neutral-100">
			<?php
			foreach ($faqData as $data) :
				?>
				<details class="group flex space-y-2.5 md:pt-3 pt-2.5">
					<summary class="flex cursor-pointer items-center justify-between gap-1.5">
						<h2 class="md:text-base text-sm font-semibold text-gray-900">
							<?= $data['question']; ?>
						</h2>

						<span class="shrink-0 rounded-full p-1.5 text-brand-blue sm:p-3">
							<svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
							</svg>
						</span>
					</summary>

					<p class="text-start text-base leading-relaxed text-neutral-500">
						<?= $data['answer']; ?>
					</p>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-left-64 -left-28 -top-40 bg-cyan-400/30 blur-3xl md:size-[400px] size-[200px] -z-[1]']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-right-64 -right-28 top-2/4 bg-amber-300/30 blur-3xl md:size-[400px] size-[200px] -z-[1]']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-300/50 rotate-6 left-[20%] bottom-20 animate-small-blob']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 -rotate-6 left-1/4 bottom-1/2 animate-small-blob-2']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 rotate-3 right-[20%] bottom-1/3 animate-small-blob-3']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 right-[20%] top-40 animate-small-blob-4']); ?>
</section>
