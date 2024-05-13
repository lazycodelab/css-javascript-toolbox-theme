<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */
$url = home_url() . '/pricing';
?>

<section class="relative overflow-hidden">
	<div class="max-w-7xl mx-auto block md:grid grid-cols-1 auto-rows-auto xl:grid-cols-12 items-start md:pb-[10rem] lg:pb-[30rem] pb-20 px-5 lg:px-0 lg:gap-x-10 md:gap-x-5">
		<div class="lg:space-y-10 space-y-2.5 xl:col-span-6">
			<div class="space-y-5 md:pt-24 pt-10">
				<h1 class="lg:text-5xl text-4xl font-display lg:text-left text-center">
					WordPress Plugin for adding Code Snippets and Scripts
				</h1>
			</div>
			<p class="max-w-2xl font-medium lg:text-start text-center lg:text-lg text-sm text-neutral-600">CSS & JavaScript Toolbox PLUS (or CJT PLUS) is a powerful WordPress plugin for adding CSS, JavaScript, PHP or HTML to unique code blocks that can be run anywhere on your website.</p>

			<!--<div class="xl:block hidden">
				<?php get_template_part('template-parts/components/component', 'button', ['content' => 'Get CJT PLUS NOW', 'url' => $url]); ?>
			</div>-->
		</div>
		<div class="relative xl:col-span-6 xl:block hidden flex-col items-center lg:pt-0 pt-10 h-full">
			<div class="lg:grid hidden place-items-end md:pt-24 pt-10 gap-5 grid-cols-2 relative">
				<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'inset-0 top-20 bg-cyan-400/20 blur-3xl size-[400px]']); ?>
				<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'bottom-0 right-0 bg-cyan-400/20 blur-3xl size-[400px]']); ?>
				<div class="rounded-2xl shadow-lg px-10 py-5 h-fit backdrop-blur-sm bg-white/60">
					<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/10-years.png" class="w-[80%] mx-auto" />
					<p class="text-sm text-center font-medium text-neutral-900 tracking-wide">Reliable & robust since 2012</p>
				</div>
				<div class="rounded-2xl shadow-lg backdrop-blur-sm bg-white/60">
					<div class="flex flex-col items-center justify-center p-8 space-y-2.5">
						<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M40 32.5V55M40 55L30 45M40 55L50 45M22.5 65C18.9314 65.0039 15.4784 63.7354 12.7609 61.4223C10.0435 59.1092 8.2398 55.9031 7.67365 52.3797C7.1075 48.8564 7.81604 45.2466 9.67202 42.1986C11.528 39.1507 14.4098 36.8643 17.8 35.75C16.929 31.2872 17.8291 26.6607 20.3099 22.8501C22.7907 19.0394 26.6572 16.344 31.0907 15.3345C35.5242 14.325 40.1765 15.0808 44.0625 17.4417C47.9485 19.8027 50.763 23.5834 51.91 27.9833C53.6833 27.4066 55.5826 27.3372 57.3934 27.783C59.2041 28.2288 60.8541 29.172 62.157 30.5061C63.4599 31.8403 64.3638 33.5121 64.7667 35.3329C65.1695 37.1536 65.0552 39.0508 64.4366 40.81C67.1655 41.8523 69.4434 43.817 70.8752 46.3632C72.307 48.9093 72.8024 51.8764 72.2754 54.7496C71.7484 57.6228 70.2323 60.2209 67.9901 62.0932C65.7479 63.9655 62.9211 64.9939 60 65H22.5Z" stroke="#005DA4" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<p class="text-5xl font-bold font-display">468,000+</p>
						<p class="text-base tracking-wide">Downloads and counting</p>
					</div>
				</div>
				<div class="relative w-full h-full">
					<div class="rounded-2xl shadow-lg md:px-10 px-5 py-3 backdrop-blur-sm bg-white/60 top-0 -right-14 absolute">
						<div class="flex flex-col items-center justify-center space-y-1.5">
							<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M35.5 13.75C35.5 9.60833 32.0017 6.25 27.6867 6.25C24.4617 6.25 21.6917 8.12667 20.5 10.805C19.3083 8.12667 16.5383 6.25 13.3117 6.25C9 6.25 5.5 9.60833 5.5 13.75C5.5 25.7833 20.5 33.75 20.5 33.75C20.5 33.75 35.5 25.7833 35.5 13.75Z" stroke="#005DA4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<p class="text-3xl font-bold leading-none font-display">
								4.9<small class="text-xs font-normal font-body">/5</small>
							</p>
							<div class="flex items-center gap-x-2">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
									<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
									<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
									<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
									<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
									<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
								</svg>
							</div>
							<span class="text-sm tracking-wide">1000+ verified reviews</span>
						</div>
					</div>
				</div>
				<div class="relative w-full h-full">
					<div class="-right-20 bottom-0 z-20 lg:block hidden">
						<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/hero.svg" />
					</div>
				</div>
			</div>
		</div>
		<div class="size-full xl:hidden flex flex-col items-center mt-5 space-y-5 col-span-full">
			<div class="grid grid-cols-3 place-items-center rounded bg-white shadow-md py-3 px-1.5">
				<div class="w-full flex flex-col h-full justify-around">
					<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/10-years.png" class="w-3/4 mx-auto" />

					<p class="text-xs text-center text-neutral-900 tracking-wide">Reliable & robust since 2012</p>

				</div>
				<div class="border-l border-r border-neutral-100">
					<div class="flex flex-col items-center justify-center space-y-1.5">
						<svg width="30" height="30" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M35.5 13.75C35.5 9.60833 32.0017 6.25 27.6867 6.25C24.4617 6.25 21.6917 8.12667 20.5 10.805C19.3083 8.12667 16.5383 6.25 13.3117 6.25C9 6.25 5.5 9.60833 5.5 13.75C5.5 25.7833 20.5 33.75 20.5 33.75C20.5 33.75 35.5 25.7833 35.5 13.75Z" stroke="#005DA4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<p class="text-xl font-bold leading-none font-display">
							4.9<small class="text-xs text-neutral-600 font-body">/5</small>
						</p>
						<div class="flex items-center gap-x-0.5 text-brand-blue">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
								<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
								<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
								<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
								<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
								<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
							</svg>
						</div>
						<span class="text-xs text-center tracking-wide text-neutral-900">1000+ verified reviews</span>
					</div>
				</div>
				<div class="">
					<div class="flex flex-col items-center justify-center">
						<svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M40 32.5V55M40 55L30 45M40 55L50 45M22.5 65C18.9314 65.0039 15.4784 63.7354 12.7609 61.4223C10.0435 59.1092 8.2398 55.9031 7.67365 52.3797C7.1075 48.8564 7.81604 45.2466 9.67202 42.1986C11.528 39.1507 14.4098 36.8643 17.8 35.75C16.929 31.2872 17.8291 26.6607 20.3099 22.8501C22.7907 19.0394 26.6572 16.344 31.0907 15.3345C35.5242 14.325 40.1765 15.0808 44.0625 17.4417C47.9485 19.8027 50.763 23.5834 51.91 27.9833C53.6833 27.4066 55.5826 27.3372 57.3934 27.783C59.2041 28.2288 60.8541 29.172 62.157 30.5061C63.4599 31.8403 64.3638 33.5121 64.7667 35.3329C65.1695 37.1536 65.0552 39.0508 64.4366 40.81C67.1655 41.8523 69.4434 43.817 70.8752 46.3632C72.307 48.9093 72.8024 51.8764 72.2754 54.7496C71.7484 57.6228 70.2323 60.2209 67.9901 62.0932C65.7479 63.9655 62.9211 64.9939 60 65H22.5Z" stroke="#005DA4" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<p class="text-xl font-bold font-display">468,000+</p>
						<span class="text-xs tracking-wide">Downloads</span>
					</div>
				</div>
			</div>
			<?php get_template_part('template-parts/components/component', 'button', ['content' => 'Get CJT PLUS NOW', 'url' => $url]); ?>
			<a href="https://youtu.be/vYAKePVgJqE?si=JQzZGE0zsG5MBmrq" class="flex items-center gap-2.5 text-sm text-brand-blue font-medium">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" fill="#0A0A0A" stroke="#0A0A0A" />
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" stroke="#FFFFFF" fill="#ffffff" />
				</svg>
				Watch Video
			</a>
		</div>

		<div class="md:col-span-6 col-span-full md:col-start-4 text-center mt-20 relative">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/arrows.png'; ?>" class="w-full max-w-3xl absolute inset-x-0 -top-14 lg:-top-24" />
			<h2 class="lg:text-3xl text-xl font-display leading-none">
				Simple two-step process
			</h2>
			<ul class="lg:mt-5 lg:space-y-3">
				<li class="text-xl">&bull; ADD your code in the Code Editor</li>
				<li class="text-xl">&bull; SELECT where it runs in the Location Editor</li>
			</ul>
		</div>
	</div>

	<div class="absolute bottom-0 w-full -z-[1]">
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
	</div>


	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-200/50 -z-[1] rotate-6 left-1/2 top-20 animate-small-blob']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 -z-[1] -rotate-6 right-1/3 bottom-1/2 animate-small-blob-2']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 -z-[1] rotate-3 right-[15%] top-[10%] animate-small-blob-3']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-200/50 -z-[1] left-40 top-1/4 animate-small-blob-4']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -z-[1] -rotate-6 left-[40%] bottom-[40%] animate-small-blob-5']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-left-52 -left-28 top-10 bg-cyan-400/20 blur-2xl md:size-[350px] size-[220px] -z-[1]']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'lg:hidden -right-28 bottom-[50%] bg-amber-300/20 blur-2xl md:size-[350px] size-[220px] -z-[1]']); ?>
</section>
