<?php
/**
 * The template for displaying all single posts
 *
 * @package cjt
 */

get_header();
?>

<main id="primary" class="site-main bg-gray-100 min-h-screen py-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-x-4 md:gap-x-6">
            <!-- Main Content Area -->
            <div class="w-full">
                <?php
                while (have_posts()) :
                    the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded shadow-lg overflow-hidden mb-8'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="aspect-w-16 aspect-h-9">
                                <?php the_post_thumbnail('large', array('class' => 'object-cover w-full h-full')); ?>
                            </div>
                        <?php endif; ?>

                        <div class="p-8">
                            <header class="entry-header mb-6">
                                <?php the_title('<h1 class="font-display text-3xl md:text-4xl font-semibold text-gray-800 mb-4">', '</h1>'); ?>
                                <div class="entry-meta text-sm text-gray-600 flex items-center space-x-2">
                                    <?php
                                    cjt_posted_on();
                                    echo '<span>•</span>';
                                    cjt_posted_by();
                                    ?>
                                </div>
                            </header>

                            <div class="entry-content prose max-w-none">
                                <?php the_content(); ?>
                            </div>

                            <footer class="entry-footer mt-8">
                                <?php cjt_entry_footer(); ?>
                            </footer>
                        </div>
                    </article>

                    <!-- Post Navigation -->
                    <nav class="post-navigation flex justify-between items-center mt-8">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>
                        <div class="w-1/2 pr-2">
                            <?php if (!empty($prev_post)) : ?>
                                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="flex items-center text-blue-600 hover:text-blue-800">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="text-sm"><?php echo get_the_title($prev_post->ID); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="w-1/2 pl-2 text-right">
                            <?php if (!empty($next_post)) : ?>
                                <a href="<?php echo get_permalink($next_post->ID); ?>" class="flex items-center justify-end text-blue-600 hover:text-blue-800">
                                    <span class="text-sm"><?php echo get_the_title($next_post->ID); ?></span>
                                    <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </nav>

                    <?php
                    // Comments Section
                    if (comments_open() || get_comments_number()) :
                        echo '<div class="mt-12">';
                        comments_template();
                        echo '</div>';
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>

			<?php get_sidebar(); ?>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
?>
