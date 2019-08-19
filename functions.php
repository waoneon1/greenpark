<?php
/**
 * terrace functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package terrace
 */

if ( ! function_exists( 'terrace_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function terrace_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on terrace, use a find and replace
		 * to change 'terrace' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'terrace', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'terrace' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'terrace_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'terrace_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function terrace_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'terrace_content_width', 640 );
}
add_action( 'after_setup_theme', 'terrace_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function terrace_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'terrace' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'terrace' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'terrace_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function terrace_scripts() {

	// CSS 
	wp_enqueue_style( 'terrace-bootstrap', get_template_directory_uri() .'/src/css/bootstrap.min.css' );
	wp_enqueue_style( 'terrace-animsition', get_template_directory_uri() .'/src/css/animsition.min.css' );
	wp_enqueue_style( 'terrace-owl-carousel', get_template_directory_uri() .'/src/css/owl.carousel.min.css' );
	wp_enqueue_style( 'terrace-owl-theme', get_template_directory_uri() .'/src/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'terrace-socicon-css', get_template_directory_uri() .'/src/css/socicon.css' );
	wp_enqueue_style( 'terrace-ionicons', get_template_directory_uri() .'/src/css/ionicons.min.css' );
	wp_enqueue_style( 'terrace-animate', get_template_directory_uri() .'/src/css/animate.min.css' );
	wp_enqueue_style( 'terrace-jquery-fancybox', get_template_directory_uri() .'/src/css/jquery.fancybox.min.css' );
	
	// Main CSS
	wp_enqueue_style( 'terrace-style', get_template_directory_uri() .'/src/css/style.css' );
	wp_enqueue_style( 'terrace-custom', get_stylesheet_uri() );

	// JS
	wp_enqueue_script( 'terrace-jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-smoothscroll', get_template_directory_uri() . '/src/js/smoothscroll.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-popper', get_template_directory_uri() . '/src/js/popper.min.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-bootstrap', get_template_directory_uri() . '/src/js/bootstrap.min.js', array(), '1.0', true );	
	wp_enqueue_script( 'terrace-animsition', get_template_directory_uri() . '/src/js/animsition.min.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-owl.carousel', get_template_directory_uri() . '/src/js/owl.carousel.min.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-wow', get_template_directory_uri() . '/src/js/wow.min.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-pagepiling', get_template_directory_uri() . '/src/js/jquery.pagepiling.min.js', array(), '1.0', true );	
	wp_enqueue_script( 'terrace-isotope-pkgd', get_template_directory_uri() . '/src/js/isotope.pkgd.min.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-jquery-fancybox', get_template_directory_uri() . '/src/js/jquery.fancybox.min.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-TweenMax', get_template_directory_uri() . '/src/js/TweenMax.min.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-ScrollMagic', get_template_directory_uri() . '/src/js/ScrollMagic.min.js', array(), '1.0', true );	
	wp_enqueue_script( 'terrace-anim-gsap', get_template_directory_uri() . '/src/js/animation.gsap.min.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-jquery-viewport', get_template_directory_uri() . '/src/js/jquery.viewport.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-jquery-countdown', get_template_directory_uri() . '/src/js/jquery.countdown.min.js', array(), '1.0', true );
	wp_enqueue_script( 'terrace-script', get_template_directory_uri() . '/src/js/script.js', array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'terrace_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

