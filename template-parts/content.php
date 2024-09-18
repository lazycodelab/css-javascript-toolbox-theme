<?php
/**
 * Template part for displaying posts
 *
 * @package cjt
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded shadow-md overflow-hidden mb-8'); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('full', array('class' => 'w-full h-64 object-cover')); ?>
        </a>
    <?php endif; ?>

    <div class="p-6">
        <header class="entry-header">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title font-display text-2xl font-bold mb-4">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title font-display text-2xl font-medium mb-4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-gray-800 hover:text-brand-blue">', '</a></h2>' );
            endif;
            ?>

            <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta text-gray-500 text-sm mb-4 flex items-center space-x-2">
                    <?php
                    cjt_posted_on();
                    echo '<span>•</span>';
                    cjt_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content text-gray-700 leading-relaxed">
            <?php
            if ( is_singular() ) :
                the_content();
            else :
                the_excerpt();
            endif;
            ?>
        </div><!-- .entry-content -->

        <?php if ( ! is_singular() ) : ?>
            <footer class="entry-footer mt-6">
                <a href="<?php the_permalink(); ?>" class="text-brand-blue hover:text-brand-blue/80 font-semibold">Read More &rarr;</a>
            </footer><!-- .entry-footer -->
        <?php endif; ?>
    </div><!-- .p-6 -->
</article><!-- #post-<?php the_ID(); ?> -->
