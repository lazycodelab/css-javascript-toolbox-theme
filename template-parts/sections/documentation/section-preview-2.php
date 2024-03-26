<section class="relative bg-brand-light-blue md:pt-24 pt-10 md:pb-96 pb-16 py-5 overflow-hidden z-10">
    <div class="container mx-auto md:space-y-20 space-y-10 mb-20">
        <div class="space-y-5 max-w-4xl mx-auto text-center md:px-0 px-5">
            <h2 class="text-2xl max-w-3xl mx-auto font-bold md:text-5xl font-display">
                Create as many Code Blocks as you need
            </h2>

            <p class="md:text-xl text-base font-medium text-gray-600">
                CJT PLUS has been tested using over 100 code blocks and 1000’s of assignments (e.g. Posts/Pages/Categories/etc).
            </p>
        </div>
        <div class="md:space-y-10 space-y-5 lg:px-0 px-5">
            <swiper-container thumbs-swiper=".previewSliderThumbs2" space-between="0" slides-per-view="1">
                <swiper-slide class="space-y-10">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-6.png" class="mx-auto" />
                    <div class="space-y-2.5 text-center">
                        <h2 class="font-bold font-display md:text-4xl text-lg">One Code Block</h2>
                        <p class="md:text-xl text-sm text-neutral-600">You can have just one Code Block that simply adds Google Analytics to every website page on the front end.</p>
                    </div>
                </swiper-slide>
                <swiper-slide class="space-y-10">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/documentation/swiper-7.png" class="mx-auto" />
                    <div class="space-y-2.5 text-center">
                        <h2 class="font-bold font-display md:text-4xl text-lg">Many Code Blocks</h2>
                        <p class="md:text-xl text-sm text-neutral-600">This is the Code Editor window where you add your CSS, JavaScript, PHP, HTML, or plain text.</p>
                    </div>
                </swiper-slide>
            </swiper-container>

            <swiper-container class="previewSliderThumbs2 max-w-4xl" space-between="20" slides-per-view="2" free-mode="true" breakpoints='
                    {
                        "320": {
                            "slidesPerView": 1.5,
                            "spaceBetween": 10
                        },
                        "768": {
                            "slidesPerView": 2,
                            "spaceBetween": 10
                        },
                        "1024": {
                            "slidesPerView": 2,
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
            </swiper-container>
        </div>
    </div>
    <div class="absolute bottom-0 w-full">
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
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 left-[15%] bottom-1/2']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-300/50 -rotate-20 right-[10%] top-[20%]']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-cyan-400/20 rotate-6 right-[80%] top-[16%]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:left-0 -left-28 top-10 bg-[#AAFFBD]/30 blur-2xl size-[200px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-left-20 -left-28 bottom-[30%] bg-amber-300/30 blur-2xl size-[200px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-right-10 -right-28 md:-top-5 -top-10 bg-amber-400/30 blur-3xl size-[200px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-right-10 -right-28 bottom-[30%] bg-cyan-300/30 blur-3xl size-[200px]']); ?>
</section>