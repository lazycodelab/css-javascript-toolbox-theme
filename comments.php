<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area bg-white rounded shadow-lg p-8 mt-8">
    <div class="max-w-3xl mx-auto">
        <?php
        if (have_comments()) :
            $cjt_comment_count = get_comments_number();
        ?>
            <h2 class="comments-title text-2xl font-bold mb-6">
                <?php
                if ('1' === $cjt_comment_count) {
                    printf(
                        /* translators: 1: title. */
                        esc_html__('One thought on &ldquo;%1$s&rdquo;', 'cjt'),
                        '<span class="font-normal">' . wp_kses_post(get_the_title()) . '</span>'
                    );
                } else {
                    printf(
                        /* translators: 1: comment count number, 2: title. */
                        esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $cjt_comment_count, 'comments title', 'cjt')),
                        number_format_i18n($cjt_comment_count), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        '<span class="font-normal">' . wp_kses_post(get_the_title()) . '</span>'
                    );
                }
                ?>
            </h2>

            <?php the_comments_navigation(array(
                'prev_text' => '<span class="text-brand-blue hover:text-brand-blue/80">&larr; ' . __('Older Comments', 'cjt') . '</span>',
                'next_text' => '<span class="text-brand-blue hover:text-brand-blue/80">' . __('Newer Comments', 'cjt') . ' &rarr;</span>',
            )); ?>

            <ul class="comment-list space-y-6 mb-6">
                <?php
                wp_list_comments(array(
                    'style'      => 'ul',
                    'short_ping' => true,
                    'callback'   => 'cjt_custom_comment_output'
                ));
                ?>
            </ul>

            <?php
            the_comments_navigation(array(
                'prev_text' => '<span class="text-brand-blue hover:text-brand-blue/80">&larr; ' . __('Older Comments', 'cjt') . '</span>',
                'next_text' => '<span class="text-brand-blue hover:text-brand-blue/80">' . __('Newer Comments', 'cjt') . ' &rarr;</span>',
            ));

            if (!comments_open()) :
            ?>
                <p class="no-comments bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-6">
                    <?php esc_html_e('Comments are closed.', 'cjt'); ?>
                </p>
            <?php
            endif;

        endif; // Check for have_comments().

        comment_form(array(
            'class_form'           => 'space-y-4',
            'class_submit'         => 'bg-brand-blue hover:bg-brand-blue/80 text-white font-bold py-2 px-4 rounded',
            'comment_field'        => '<div class="comment-form-comment">
                                        <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">' . _x('Comment', 'noun') . '</label>
                                        <textarea id="comment" name="comment" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-brand-blue/30 focus:ring focus:ring-brand-blue/20 focus:ring-opacity-50" required></textarea>
                                    </div>',
            'fields'               => array(
                'author' => '<div class="comment-form-author">
                                <label for="author" class="block text-sm font-medium text-gray-700 mb-1">' . __('Name', 'cjt') . '</label>
                                <input type="text" id="author" name="author" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                            </div>',
                'email'  => '<div class="comment-form-email">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">' . __('Email', 'cjt') . '</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                            </div>',
                'url'    => '<div class="comment-form-url">
                                <label for="url" class="block text-sm font-medium text-gray-700 mb-1">' . __('Website', 'cjt') . '</label>
                                <input type="url" id="url" name="url" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>',
            ),
            'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title text-xl font-bold mb-4">',
            'title_reply_after'    => '</h3>',
        ));
        ?>
    </div>
</div>

<?php
// Custom comment output function
function cjt_custom_comment_output($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li id="comment-<?php comment_ID(); ?>" <?php comment_class('bg-gray-50 p-4 rounded-lg'); ?>>
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
            <footer class="comment-meta mb-2">
                <div class="comment-author vcard flex items-center">
                    <?php echo get_avatar($comment, 40, '', '', array('class' => 'rounded-full mr-2')); ?>
                    <?php printf('<b class="fn">%s</b>', get_comment_author_link()); ?>
                </div>
                <div class="comment-metadata text-sm text-gray-500 mt-1">
                    <time datetime="<?php comment_time('c'); ?>">
                        <?php printf(_x('%1$s at %2$s', '1: date, 2: time'), get_comment_date(), get_comment_time()); ?>
                    </time>
                    <?php edit_comment_link(__('Edit'), ' <span class="mx-1">|</span> <span class="edit-link">', '</span>'); ?>
                </div>
            </footer>
            <div class="comment-content prose mt-2">
                <?php comment_text(); ?>
            </div>
            <div class="reply mt-2">
                <?php
                comment_reply_link(array_merge($args, array(
                    'add_below' => 'div-comment',
                    'depth'     => $depth,
                    'max_depth' => $args['max_depth'],
                    'before'    => '<div class="reply">',
                    'after'     => '</div>',
                    'class'     => 'text-brand-blue hover:text-brand-blue/50'
                )));
                ?>
            </div>
        </article>
    </li>
    <?php
}
?>
