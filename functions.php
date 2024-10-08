<?php
/**
 * cjt functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cjt
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cjt_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cjt, use a find and replace
	 * to change 'cjt' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('cjt', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'cjt'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cjt_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'cjt_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cjt_content_width()
{
	$GLOBALS['content_width'] = apply_filters('cjt_content_width', 640);
}
add_action('after_setup_theme', 'cjt_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cjt_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'cjt'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'cjt'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'cjt_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function cjt_scripts()
{
	wp_enqueue_style('cjt-style', get_stylesheet_uri(), array(), _S_VERSION);

	wp_enqueue_script('cjt-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('cjt-marquee', get_template_directory_uri() . '/assets/js/marquee.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'cjt_scripts', 9999);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Add this function to your theme's functions.php file
function cjt_widget_classes($params) {
    // Add classes to the widget container
    $params[0]['before_widget'] = str_replace('class="', 'class="mb-8 last:mb-0 ', $params[0]['before_widget']);

    // Add classes to the widget title
    $params[0]['before_title'] = '<h2 class="text-xl font-bold mb-4 pb-2 border-b border-gray-200">';
    $params[0]['after_title'] = '</h2>';

    return $params;
}
add_filter('dynamic_sidebar_params', 'cjt_widget_classes');

// Add this function to your theme's functions.php file
function cjt_widget_list_classes($output) {
    $output = str_replace('<ul', '<ul class="space-y-2"', $output);
    $output = str_replace('<li', '<li class="text-gray-700"', $output);
    $output = str_replace('<a', '<a class="text-blue-600 hover:text-blue-800 transition-colors duration-200"', $output);
    return $output;
}
add_filter('widget_output', 'cjt_widget_list_classes', 10, 3);

// Add this function to your theme's functions.php file
function cjt_search_form( $form ) {
    $form = '<form role="search" method="get" class="search-form flex" action="' . home_url( '/' ) . '">
        <label class="sr-only">
            <span class="screen-reader-text">' . _x( 'Search for:', 'label' ) . '</span>
        </label>
        <input type="search" class="flex-grow border border-gray-300 rounded-l-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="' . esc_attr_x( 'Search …', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" />
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-600 transition-colors duration-200">' . esc_attr_x( 'Search', 'submit button' ) . '</button>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'cjt_search_form' );
