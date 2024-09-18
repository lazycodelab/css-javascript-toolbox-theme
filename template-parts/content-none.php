<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package cjt
 */
?>

<section class="no-results not-found text-center py-16 px-4">
    <header class="page-header">
        <h1 class="page-title text-4xl font-display font-semibold tracking-wide mb-6"><?php esc_html_e( 'Nothing Found', 'cjt' ); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content text-lg text-gray-700 max-w-2xl mx-auto">
        <?php
        if ( is_home() && current_user_can( 'publish_posts' ) ) :

            printf(
                '<p class="mb-8">' . wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                    __( 'Ready to publish your first post? <a href="%1$s" class="text-blue-600 hover:text-blue-800 underline">Get started here</a>.', 'cjt' ),
                    array(
                        'a' => array(
                            'href' => array(),
                            'class' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url( admin_url( 'post-new.php' ) )
            );

        elseif ( is_search() ) :
            ?>

            <p class="mb-8"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'cjt' ); ?></p>
            <div class="max-w-md mx-auto">
                <?php get_search_form(); ?>
            </div>

        <?php else : ?>

            <p class="mb-8"><?php esc_html_e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', 'cjt' ); ?></p>
            <div class="max-w-md mx-auto">
                <?php get_search_form(); ?>
            </div>

        <?php endif; ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->
