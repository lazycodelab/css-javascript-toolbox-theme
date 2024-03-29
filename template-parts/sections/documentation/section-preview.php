<section class="relative bg-white md:py-10 py-5 md:px-0 px-5 overflow-hidden">
    <div class="container mx-auto space-y-10">
        <swiper-container class="mySwiper" thumbs-swiper=".previewSliderThumbs" space-between="0" slides-per-view="1">
            <swiper-slide class="space-y-10">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-1.png" class="mx-auto" />
                <div class="space-y-2.5 text-center">
                    <h2 class="font-bold font-display md:text-4xl text-lg">Code Editor</h2>
                    <p class="md:text-xl text-sm text-neutral-600">This is the Code Editor window where you add your CSS, JavaScript, PHP, HTML, or plain text.</p>
                </div>
            </swiper-slide>
            <swiper-slide class="space-y-10">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-2.png" class="mx-auto" />
                <div class="space-y-2.5 text-center">
                    <h2 class="font-bold font-display md:text-4xl text-lg">Code Editor 2</h2>
                    <p class="md:text-xl text-sm text-neutral-600">This is the Code Editor window where you add your CSS, JavaScript, PHP, HTML, or plain text.</p>
                </div>
            </swiper-slide>
            <swiper-slide class="space-y-10">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-3.png" class="mx-auto" />
                <div class="space-y-2.5 text-center">
                    <h2 class="font-bold font-display md:text-4xl text-lg">Code Editor 3</h2>
                    <p class="md:text-xl text-sm text-neutral-600">This is the Code Editor window where you add your CSS, JavaScript, PHP, HTML, or plain text.</p>
                </div>
            </swiper-slide>
            <swiper-slide class="space-y-10">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-4.png" class="mx-auto" />
                <div class="space-y-2.5 text-center">
                    <h2 class="font-bold font-display md:text-4xl text-lg">Code Editor 4</h2>
                    <p class="md:text-xl text-sm text-neutral-600">This is the Code Editor window where you add your CSS, JavaScript, PHP, HTML, or plain text.</p>
                </div>
            </swiper-slide>
            <swiper-slide class="space-y-10">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-5.png" class="mx-auto" />
                <div class="space-y-2.5 text-center">
                    <h2 class="font-bold font-display md:text-4xl text-lg">Code Editor 5</h2>
                    <p class="md:text-xl text-sm text-neutral-600">This is the Code Editor window where you add your CSS, JavaScript, PHP, HTML, or plain text.</p>
                </div>
            </swiper-slide>
        </swiper-container>

        <swiper-container class="previewSliderThumbs" space-between="20" slides-per-view="5" free-mode="true" breakpoints='
				{
					"320": {
						"slidesPerView": 1.5,
						"spaceBetween": 10
					},
					"768": {
						"slidesPerView": 2.5,
						"spaceBetween": 10
					},
					"1024": {
						"slidesPerView": 5,
						"spaceBetween": 20
					}
				}
			'>
            <swiper-slide class="space-y-5">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-1.png" class="object-cover h-full" />
                <p class="font-bold font-display md:text-xl text-sm text-center">Code Editor</p>
            </swiper-slide>
            <swiper-slide class="space-y-5">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-2.png" class="object-cover h-full" />
                <p class="font-bold font-display md:text-xl text-sm text-center">Assignment Panel</p>
            </swiper-slide>
            <swiper-slide class="space-y-5">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-3.png" class="object-cover h-full" />
                <p class="font-bold font-display md:text-xl text-sm text-center">Master Admin Toolbar</p>
            </swiper-slide>
            <swiper-slide class="space-y-5">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-4.png" class="object-cover h-full" />
                <p class="font-bold font-display md:text-xl text-sm text-center">Code Block Toolbar</p>
            </swiper-slide>
            <swiper-slide class="space-y-5">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-5.png" class="object-cover h-full" />
                <p class="font-bold font-display md:text-xl text-sm text-center">Editor Tools</p>
            </swiper-slide>
        </swiper-container>
    </div>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 rotate-8 left-[15%] top-1/4 animate-small-blob']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-300/50 -rotate-20 right-[10%] top-[20%] animate-small-blob-3']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-cyan-400/20 rotate-6 left-[6%] bottom-[15%] animate-small-blob-5']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-left-20 -left-28 bottom-[30%] bg-amber-300/20 blur-2xl size-[200px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-right-20 -right-28 top-[10%] bg-amber-300/20 blur-2xl size-[200px]']); ?>
    
</section>