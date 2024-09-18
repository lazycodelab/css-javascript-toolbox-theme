<section class="relative bg-white md:py-24 py-10 md:px-0 px-5 overflow-hidden">
    <div class="absolute right-1/4 bottom-0 lg:block hidden">
        <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/vector/ftp.svg" />
    </div>
    <div class="max-w-7xl mx-auto space-y-10">
        <h2 class="md:text-4xl text-2xl text-center font-display font-semibold text-neutral-900">
            Manually via <span class="text-brand-blue">FTP</span>
        </h2>
        <div class="space-y-5 md:max-w-3xl mx-auto">
            <div class="flex items-center justify-start md:gap-5 gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path d="M12 6v12"/><path d="M17.196 9 6.804 15"/><path d="m6.804 9 10.392 6"/></svg>
                <span class="md:text-xl text-sm font-normal text-neutral-600">In your FTP program, locate the WordPress Plugins directory on your server. This will look like: /wp-content/plugins/</span>
            </div>
            <div class="flex items-center justify-start md:gap-5 gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path d="M12 6v12"/><path d="M17.196 9 6.804 15"/><path d="m6.804 9 10.392 6"/></svg>
                <span class="md:text-xl text-sm font-normal text-neutral-600">Upload the entire css-javascript-toolbox-plus folder (not zip file) to this /wp-content/plugins/directory</span>
            </div>
            <div class="flex items-center justify-start md:gap-5 gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path d="M12 6v12"/><path d="M17.196 9 6.804 15"/><path d="m6.804 9 10.392 6"/></svg>
                <span class="md:text-xl text-sm font-normal text-neutral-600">Make sure you are in the Admin section of WordPress</span>
            </div>
            <div class="flex items-center justify-start md:gap-5 gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path d="M12 6v12"/><path d="M17.196 9 6.804 15"/><path d="m6.804 9 10.392 6"/></svg>
                <span class="md:text-xl text-sm font-normal text-neutral-600">Click Plugins in the lefthand side menu or refresh the Plugins page if you are already on it</span>
            </div>
            <div class="flex items-center justify-start md:gap-5 gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path d="M12 6v12"/><path d="M17.196 9 6.804 15"/><path d="m6.804 9 10.392 6"/></svg>
                <span class="md:text-xl text-sm font-normal text-neutral-600">Activate the CSS & JavaScript Toolbox PLUS plugin</span>
            </div>
            <div class="flex items-center justify-start md:gap-5 gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path d="M12 6v12"/><path d="M17.196 9 6.804 15"/><path d="m6.804 9 10.392 6"/></svg>
                <span class="md:text-xl text-sm font-normal text-neutral-600">Go through any additional setup wizards if prompted</span>
            </div>
            <div class="flex items-center justify-start md:gap-5 gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path d="M12 6v12"/><path d="M17.196 9 6.804 15"/><path d="m6.804 9 10.392 6"/></svg>
                <span class="md:text-xl text-sm font-normal text-neutral-600">CSS & JavaScript Toolbox PLUS should now be installed</span>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-200/50 rotate-6 left-1/4 top-20 animate-small-blob']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 -rotate-6 left-[15%] bottom-1/2 animate-small-blob-2']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 rotate-3 right-[15%] top-1/4 animate-small-blob-3']); ?>
    <?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-200/50 right-1/4 top-2/4 animate-small-blob-4']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => '-left-32 -top-28 bg-orange-200/40 blur-3xl size-[300px]']); ?>
    <?php get_template_part('template-parts/components/component', 'blob', ['class' => 'bottom-0 -right-56 bg-cyan-400/40 blur-3xl size-[300px]']); ?>
</section>
