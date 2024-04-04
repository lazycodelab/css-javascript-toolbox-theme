<section class="pt-24 py-40 bg-sky-100 relative">
    <div class="absolute top-0 w-full right-0 z-10 rotate-180">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#3AAAFF" fill-opacity="0.35" d="M0,192L40,213.3C80,235,160,277,240,250.7C320,224,400,128,480,128C560,128,640,224,720,245.3C800,267,880,213,960,160C1040,107,1120,53,1200,32C1280,11,1360,21,1400,26.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </div>
    <div class="absolute top-0 w-full left-0 rotate-180">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#005DA4" fill-opacity="1" d="M0,32L34.3,32C68.6,32,137,32,206,58.7C274.3,85,343,139,411,176C480,213,549,235,617,224C685.7,213,754,171,823,149.3C891.4,128,960,128,1029,144C1097.1,160,1166,192,1234,176C1302.9,160,1371,96,1406,64L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </div>
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
    <div class="mx-auto max-w-7xl md:pb-40 md:pt-60 pb-0 pt-20">
        <div class="space-y-5 max-w-3xl mx-auto text-center">
            <h2 class="text-2xl font-bold md:text-5xl font-display">
                CJT Plus vs CJT Free
            </h2>

            <p class="hidden text-base font-medium sm:block text-neutral-500">
                Check out what you get in CJT PLUS compared to <a class="text-brand-blue font-normal underline" href="https://wordpress.org/plugins/css-javascript-toolbox/">CJT Free version on WordPress.org</a>
            </p>
        </div>
        <div class="py-10">
            <table class="table-fixed w-full border border-neutral-500 rounded">
                <thead>
                    <tr class="border-b border-neutral-500 divide-x divide-neutral-500">
                        <th class="p-4 bg-white">
                            <h2 class="font-display md:text-3xl text-neutral-900 text-sm">Features</h2>
                        </th>
                        <th class="bg-brand-blue/10">
                            <img class="mx-auto" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/logo.svg" />
                        </th>
                        <th class="p-4 bg-white">
                            <h2 class="font-display md:text-3xl text-neutral-900 text-sm">CJT Free on WordPress.org</h2>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white text-center">
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Supported languages</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">CSS, HTML, JavaScript, PHP, plain text</td>
                        <td class="p-6">CSS, HTML, JavaScript, PHP, plain text</td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Optimised for devices</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Create as many code blocks as needed (Tested with over 100 of code blocks)</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block maximum data size</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            LONGTEXT (up to 4GB of data)
                        </td>
                        <td class="p-6">
                            LONGTEXT (up to 4GB of data)
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block On/Off switch</td>
                        <td class="p-6 bg-brand-blue/10">
                            <div class="flex justify-center items-center gap-2.5 text-brand-blue">
                                <?php get_template_part('template-parts/components/component', 'check'); ?> (Yes. On and Off)
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center items-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                Always On
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Header and Footer output hooks(Code block to header or footer of page)</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes. Header and Footer
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                Header only
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Additional output hooks(Code block to page sections)</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex flex-col justify-center gap-2.5">
                                <div class="flex justify-center items-center gap-1">
                                    <?php get_template_part('template-parts/components/component', 'check'); ?>
                                    Yes
                                </div>
                                Body Open, Before Post Content, After Post Content, Before Post Excerpt, After Post Excerpt, Before Post List, After Post List, Before Post
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Assignment inverter function (i.e. run code everywhere but …)</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            Posts, Pages, Categories, Tags, Custom Posts
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Assignment smart pagination/scrolling</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block shortcode support</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block shortcode embed button <br> (CJT embed button in Page/Post editor)</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block to Gutenburg blocks</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Metabox code block for Page/Post edit pages</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block to widget controller</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Templates Manager <br> (for storing all your code templates)</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Embed/Link Templates to code blocks <br /> (stored templates / WordPress bundled scripts)</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Templates from external scripts <br /> (e.g. from a CDN such as jQuery)</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code Auto Completion (CAC)</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Full-screen editing mode</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code beautify function</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code minify function</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block editor themes</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            32 editor themes
                        </td>
                        <td class="p-6">
                            1 default theme
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code files support</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block batch functions</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            Activate All, Deactivate All, Revert State,<br />Footer All, Header All, and Delete All
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block backups and revisions</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block information panel</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Code block information panel</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Prioritise code block run order via drag'n drop</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Close All code block function</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                    <tr class="text-neutral-500 font-medium divide-x divide-neutral-500">
                        <td class="p-6">Privilege setting for metabox code blocks</td>
                        <td class="p-6 text-brand-blue bg-brand-blue/10">
                            <div class="flex items-center justify-center gap-1">
                                <?php get_template_part('template-parts/components/component', 'check'); ?>
                                Yes
                            </div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center gap-1 items-center">
                                <?php get_template_part('template-parts/components/component', 'uncheck'); ?>
                                No
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php get_template_part('template-parts/components/component', 'button', ['content' => 'Get CJT PLUS NOW', 'url' => '/']); ?>
    </div>
</section>