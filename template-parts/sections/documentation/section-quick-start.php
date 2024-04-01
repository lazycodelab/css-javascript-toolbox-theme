<section class="relative bg-brand-light-blue md:py-24 py-10 md:px-0 px-5 overflow-hidden">
    <div class="absolute left-5 bottom-[35%] lg:block hidden lg:w-56">
        <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/rocket-man.svg" />
    </div>
    <div class="max-w-7xl mx-auto lg:space-y-24 space-y-10">
        <div class="space-y-5 max-w-4xl mx-auto text-center">
            <h1 class="md:text-5xl text-2xl font-display text-neutral-900 leading-tight">
                Documentation for <span class="text-brand-blue font-bold">CJT PLUS</span>
            </h1>
            <p class="md:text-xl text-sm text-neutral-600">
                This documentation is all about <a href="/pricing" class="text-brand-blue underline font-bold">CJT PLUS</a>, If you are a CJT freebie user, you will notice all the extra-awesomeness that CJT PLUS has to offer.
            </p>
            <p class="md:text-xl text-sm text-neutral-600">
                We have just introduced our <a href="/pricing" class="text-brand-blue underline font-bold">How-To usage tips for CJT PLUS.</a> Clicking into this section will fast-track your learning of CJT PLUS.
            </p>
            <p class="md:text-xl text-sm text-neutral-600">
                You will certainly pickup the basics of CJT Free whilst looking through this documentation. We have retained the older documentation until we continue to write the new version. Click for: <a href="/pricing" class="text-brand-blue underline font-bold">PREVIOUS DOCUMENTATION</a>
            </p>
        </div>

        <div class="lg:hidden flex justify-center">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/rocket-man.svg" class="w-40" />
        </div>

        <div class="space-y-5 max-w-4xl mx-auto text-center">
            <h1 class="md:text-5xl text-2xl font-display text-neutral-900 leading-tight">
                QUICK START
            </h1>
            <p class="md:text-xl text-sm text-neutral-600">
                CJT at its most fundamental level consists of a Code Block. This Code Block combines a Code Editor, an Assignment panel, and a bunch of other useful tools.
            </p>
            <p class="md:text-xl text-sm text-neutral-600">
                The behind-the-scenes functionality of a Code Block are Revisions and something we call Code Files. Each and every Code Block contains a Master Code File that will hold your Active Code. Every time you hit the Save button, CJT will automatically save a new revision for you. This allows you to go to any of your earlier revisions, load one into the editor, and decide whether to select it as the Active Code revision for the Code Block.
            </p>
            <p class="md:text-xl text-sm text-neutral-600">
                A very powerful feature that only CJT PLUS offers, is for you to create your own User Code Files.  This allows you to create mini projects within a Code Block so you can keep your code a lot more organised and maintained. <a href="/pricing" class="text-brand-blue underline font-bold">Click Code Files and Revisions for a better explanation.</a>
            </p>
        </div>
    </div>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-200/40 rotate-6 left-1/4 top-20 animate-small-blob']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/40 -rotate-6 left-[15%] bottom-1/2 animate-small-blob-3']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-300/20 rotate-3 right-[15%] top-1/4 animate-small-blob-4']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 right-1/4 top-[41%] animate-small-blob-5']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-40 -top-10 bg-red-300/50 blur-3xl size-[300px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-top-32 md:-right-20 -right-10 bg-red-300/30 blur-3xl md:size-[330px] size-[250px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-bottom-20 -bottom-64 right-0 bg-cyan-300/30 blur-3xl size-[300px]']); ?>
</section>