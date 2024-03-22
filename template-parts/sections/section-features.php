<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */
?>

<section class="relative">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#DEF1FF" fill-opacity="0.6" d="M0,96L40,106.7C80,117,160,139,240,160C320,181,400,203,480,176C560,149,640,75,720,58.7C800,43,880,85,960,133.3C1040,181,1120,235,1200,250.7C1280,267,1360,245,1400,234.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
    <div class="bg-brand-light-blue/60">
        <div class="mx-auto container md:pb-24 md:pt-0 py-10">
            <div class="space-y-5 max-w-4xl mx-auto text-center md:px-0 px-5">
                <h2 class="text-2xl max-w-3xl mx-auto font-bold md:text-5xl font-display">
                    Explore <span class="text-brand-blue">CJT PLUS</span> <br/> Premium Features
                </h2>

                <p class="md:text-xl text-base font-medium text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos
                    quae quo ad iste ipsum officiis deleniti asperiores sit.
                </p>
            </div>
            <div class="relative grid gap-5 lg:block lg:my-32 mt-10 mx-5 text-center">
                <div class="col-span-2">
                    <img class="mx-auto md:w-1/3 w-2/3" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/vector/features.svg" />
                </div>
                <div class="lg:absolute top-0 left-0 col-span-2">
                    <div class="md:py-2.5 md:px-5 p-2 bg-white inline-flex gap-2.5 items-center rounded-lg shadow-lg">
                        <p class="font-semibold lg:text-xl text-sm lg:order-0 order-2">Global Code Blocks</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="md:size-14 size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64" stroke="#005DA4" />
                        </svg>
                    </div>
                </div>
                <div class="lg:absolute top-1/2 left-0 col-span-2">
                    <div class="md:py-2.5 md:px-5 p-2 bg-white inline-flex gap-2.5 items-center rounded-lg shadow-lg">
                        <p class="font-semibold lg:text-xl text-sm lg:order-0 order-2">Code Files</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="md:size-14 size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" stroke="#005DA4" />
                        </svg>
                    </div>
                </div>
                <div class="lg:absolute top-full left-24 col-span-2">
                    <div class="md:py-2.5 md:px-5 p-2 bg-white inline-flex gap-2.5 items-center rounded-lg shadow-lg">
                        <p class="font-semibold lg:text-xl text-sm lg:order-0 order-2">Editor Tools</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="md:size-14 size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" stroke="#005DA4" />
                        </svg>
                    </div>
                </div>
                <div class="lg:absolute top-0 right-0 col-span-2">
                    <div class="md:py-2.5 md:px-5 p-2 bg-white inline-flex gap-2.5 items-center rounded-lg shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="md:size-14 size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 0 1-.657.643 48.39 48.39 0 0 1-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 0 1-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 0 0-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 0 1-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 0 0 .657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 0 1-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 0 0 5.427-.63 48.05 48.05 0 0 0 .582-4.717.532.532 0 0 0-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 0 0 .658-.663 48.422 48.422 0 0 0-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 0 1-.61-.58v0Z" stroke="#005DA4" />
                        </svg>
                        <p class="font-semibold lg:text-xl text-sm">Shortcodes & Metabox Code Blocks</p>
                    </div>
                </div>
                <div class="lg:absolute top-1/2 right-0 col-span-2">
                    <div class="md:py-2.5 md:px-5 p-2 bg-white inline-flex gap-2.5 items-center rounded-lg shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="md:size-14 size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" stroke="#005DA4" />
                        </svg>
                        <p class="font-semibold lg:text-xl text-sm">Code Blocks Tools</p>
                    </div>
                </div>
                <div class="lg:absolute top-full right-24 col-span-2">
                    <div class="md:py-2.5 md:px-5 p-2 bg-white inline-flex gap-2.5 items-center rounded-lg shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="md:size-14 size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" stroke="#005DA4" />
                        </svg>
                        <p class="font-semibold lg:text-xl text-sm">Templates & Packages</p>
                    </div>
                </div>
            </div>
            <div class="lg:flex hidden justify-center">
                <a class="rounded-lg bg-brand-blue inline-flex px-6 py-3.5 font-bold uppercase lg:text-xl text-sm text-white" href="/">
                    Buy plugin
                </a>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-300/50 absolute rotate-6 left-[8%] bottom-20']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 absolute -rotate-6 right-[8%] top-[40%]']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 absolute rotate-3 right-40 bottom-[10%]']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 absolute left-40 top-1/4']); ?>
</section>