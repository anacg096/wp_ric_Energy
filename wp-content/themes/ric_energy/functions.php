<?php
/**
 * ric_energy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ric_energy
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// Remove comments links from admin bar
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    show_admin_bar(false);
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ric_energy_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ric_energy, use a find and replace
		* to change 'ric_energy' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ric_energy', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ric_energy' ),
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
			'ric_energy_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'ric_energy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ric_energy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ric_energy_content_width', 640 );
}
add_action( 'after_setup_theme', 'ric_energy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ric_energy_scripts() {
    wp_enqueue_style( 'ric_energy-style', get_stylesheet_uri(), array(), _S_VERSION );

    //Custom CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );
    wp_enqueue_style( 'ric_energy-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1' );
    wp_enqueue_style( 'ric_energy-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.8.1' );
    wp_enqueue_style( 'ric_energy-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );

    //Custom JS
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true );
    wp_enqueue_script( 'ric_energy-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), '2.3.1', true );
    wp_enqueue_script( 'ric_energy-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.8.1', true );
    wp_enqueue_script( 'ric_energy-slider', get_template_directory_uri() . '/assets/js/slider.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/slider.js'), true );

}
add_action( 'wp_enqueue_scripts', 'ric_energy_scripts' );

function footerStyle() {
    // Registrar y encolar el CSS del footer
    wp_enqueue_style('footer-styles', get_stylesheet_directory_uri() . '/assets/css/footer.css');
}
add_action('wp_enqueue_scripts', 'footerStyle');

//function ric_energy_widgets_init() {
//	register_sidebar(
//		array(
//			'name'          => esc_html__( 'Sidebar', 'ric_energy' ),
//			'id'            => 'sidebar-1',
//			'description'   => esc_html__( 'Add widgets here.', 'ric_energy' ),
//			'before_widget' => '<section id="%1$s" class="widget %2$s">',
//			'after_widget'  => '</section>',
//			'before_title'  => '<h2 class="widget-title">',
//			'after_title'   => '</h2>',
//		)
//	);
//}
//add_action( 'widgets_init', 'ric_energy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
//function ric_energy_scripts() {
//	wp_enqueue_style( 'ric_energy-style', get_stylesheet_uri(), array(), _S_VERSION );
//}
//add_action( 'wp_enqueue_scripts', 'ric_energy_scripts' );

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
require get_template_directory() . '/inc/blocks.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

