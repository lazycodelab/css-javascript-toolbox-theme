<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

get_header();
?>

<main id="primary"class="bg-gray-100 min-h-screen py-8">
<div class="container mx-auto px-4">
	<div class="flex flex-col lg:flex-row gap-x-4 md:gap-x-6">
			<div class="w-full">
		<?php if ( have_posts() ) : ?>

			<header class="page-header mb-5 md:mb-10">
				<?php
				the_archive_title( '<h1 class="font-display text-3xl md:text-4xl font-semibold text-gray-800 mb-4">', '</h1>' );
				the_archive_description( '<div class="text-sm text-gray-600 flex items-center space-x-2">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
<?php get_sidebar(); ?>
</div>

	</div>
</main>

<?php
get_footer();
