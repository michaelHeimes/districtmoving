<?php
/**
 * districtmoving functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package districtmoving
 */

if ( ! function_exists( 'districtmoving_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function districtmoving_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on districtmoving, use a find and replace
		 * to change 'districtmoving' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'districtmoving', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'districtmoving' ),
			'menu-1' => esc_html__( 'Primary Top', 'districtmoving' ),
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
		add_theme_support( 'custom-background', apply_filters( 'districtmoving_custom_background_args', array(
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
    
        // Custom Image Sizes
        add_image_size('home-hero', 2826, 1280, true);
        add_image_size('service-card', 1020, 400, true);
        add_image_size('service-post', 1440, 1440, true);
        add_image_size('team-member-thumb', 300, 376, true);
        add_image_size('blog-thumb', 670, 400, true);
	}
endif;
add_action( 'after_setup_theme', 'districtmoving_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function districtmoving_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'districtmoving_content_width', 640 );
}
add_action( 'after_setup_theme', 'districtmoving_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function districtmoving_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'districtmoving' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'districtmoving' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
    'name'          => esc_html__( 'Top Header Left', 'districtmoving' ),
    'id'            => 'top-header-left',
    'description'   => esc_html__( 'Add widgets here.', 'districtmoving' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

	register_sidebar( array(
    'name'          => esc_html__( 'Top Header right', 'districtmoving' ),
    'id'            => 'top-header-right',
    'description'   => esc_html__( 'Add widgets here.', 'districtmoving' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

	register_sidebar( array(
    'name'          => esc_html__( 'Contact Form', 'districtmoving' ),
    'id'            => 'contact-form',
    'description'   => esc_html__( 'Add widgets here.', 'districtmoving' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

	register_sidebar( array(
    'name'          => esc_html__( 'Employment Form', 'districtmoving' ),
    'id'            => 'employment-form',
    'description'   => esc_html__( 'Add widgets here.', 'districtmoving' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar Right', 'districtmoving' ),
    'id'            => 'sidebar-right',
    'description'   => esc_html__( 'Add widgets here.', 'districtmoving' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar Right Alt', 'districtmoving' ),
    'id'            => 'sidebar-right-alt',
    'description'   => esc_html__( 'Add widgets here.', 'districtmoving' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

	for($i = 1; $i <= 4; $i ++) {
    register_sidebar ( array (
      'name' => __ ( 'Footer Area', 'abarca' ) . ' ' . $i,
      'id' => 'footer-area-' . $i,
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4>',
      'after_title' => '</h4>'
    ) );
  }
}

add_action( 'widgets_init', 'districtmoving_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 define('THEME_DEBUG', false);

 
 
function districtmoving_scripts() {
  if (THEME_DEBUG) {
    
    wp_enqueue_style( 'districtmoving-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri () . '/css/boostrap/bootstrap.css');
  
    //wp_enqueue_style( 'style-css', get_template_directory_uri () . '/css/style.css', array(), '20200219' );
    wp_enqueue_style( 'style-css', get_template_directory_uri () . '/css/style.css');
  
    
	  wp_enqueue_style( 'style-animate', get_template_directory_uri () . '/css/animate.css', array(), '20151215');
  
	  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '20151215', true );
  
	  wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array(), '20151215', true );
  
	  wp_enqueue_script( 'districtmoving-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
  
	  wp_enqueue_script( 'districtmoving-navigation', get_template_directory_uri() . '/js/navigation.min.js', array(), '20151215', true );
  
	  wp_enqueue_script( 'districtmoving-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20151215', true );
  
	  wp_enqueue_script( 'districtmoving-waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '20151215', true );
  
	  wp_enqueue_script( 'districtmoving-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20151215', true );
  
	  wp_enqueue_script( 'districtmoving-slick', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', true );
    
      wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

  
	  wp_enqueue_script( 'districtmoving-script', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );
  
	  wp_enqueue_script( 'districtmoving-main', get_template_directory_uri() . '/js/main.js', array(), '20200219', true );
  } else {
    wp_enqueue_style( 'districtmoving-style', get_stylesheet_uri() );
    wp_enqueue_style( 'style-css', get_template_directory_uri () . '/css/style.min.css', array(), '1.01');
    wp_enqueue_script( 'districtmoving-main', get_template_directory_uri() . '/js/main.min.js', array(), '1.01', true );
  }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'districtmoving_scripts' );

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
add_action('init', 'register_post_typ');
function register_post_typ(){
	register_post_type ( 'Services', array (
	    'labels' => array (
        'name' => __ ( 'Services', 'districtmoving' ),
        'singular_name' => __ ( 'Services', 'districtmoving' ),
        'add_new' => __ ( 'Add New', 'districtmoving' ),
        'add_new_item' => __ ( 'Add New Service', 'districtmoving' ),
        'edit_item' => __ ( 'Edit Service', 'districtmoving' ),
        'new_item' => __ ( 'New Service', 'districtmoving' ),
        'all_items' => __ ( 'All Service', 'districtmoving' ),
        'view_item' => __ ( 'View Service', 'districtmoving' ),
        'search_items' => __ ( 'Search Service', 'districtmoving' ),
        'not_found' => __ ( 'No service found', 'districtmoving' ),
        'not_found_in_trash' => __ ( 'No services found in Trash', 'districtmoving' ),
        'parent_item_colon' => '',
        'menu_name' => __ ( 'Services', 'districtmoving' )
	    ),
	    'public' => true,
	    'has_archive' => false,
	    'rewrite' => true,
	    'capability_type' => 'page',
	    'supports' => array (
        'title',
        'editor',
        // 'author',
        'thumbnail',
        // 'excerpt',
        // 'comments'
        'page-attributes'
	    )
	) );

	register_post_type ( 'ourteam', array (
    'labels' => array (
      'name' => __ ( 'Our team', 'districtmoving' ),
      'singular_name' => __ ( 'Our team', 'districtmoving' ),
      'add_new' => __ ( 'Add New', 'districtmoving' ),
      'add_new_item' => __ ( 'Add New Team', 'districtmoving' ),
      'edit_item' => __ ( 'Edit team member', 'districtmoving' ),
      'new_item' => __ ( 'New team member', 'districtmoving' ),
      'all_items' => __ ( 'All Our team', 'districtmoving' ),
      'view_item' => __ ( 'View Our team', 'districtmoving' ),
      'search_items' => __ ( 'Search Our team', 'districtmoving' ),
      'not_found' => __ ( 'No team found', 'districtmoving' ),
      'not_found_in_trash' => __ ( 'No team found in Trash', 'districtmoving' ),
      'parent_item_colon' => '',
      'menu_name' => __ ( 'Our team', 'districtmoving' )
    ),
    'public' => true,
    'has_archive' => false,
    'rewrite' => true,
    'capability_type' => 'page',
    'supports' => array (
      'title',
      'editor',
      // 'author',
      'thumbnail',
      // 'excerpt',
      // 'comments'
      'page-attributes'
    )
	) );

	register_post_type ( 'press', array (
    'labels' => array (
      'name' => __ ( 'Press', 'districtmoving' ),
      'singular_name' => __ ( 'Press', 'districtmoving' ),
      'add_new' => __ ( 'Add New', 'districtmoving' ),
      'add_new_item' => __ ( 'Add New Press', 'districtmoving' ),
      'edit_item' => __ ( 'Edit press', 'districtmoving' ),
      'new_item' => __ ( 'New press', 'districtmoving' ),
      'all_items' => __ ( 'All press', 'districtmoving' ),
      'view_item' => __ ( 'View Press', 'districtmoving' ),
      'search_items' => __ ( 'Search Press', 'districtmoving' ),
      'not_found' => __ ( 'No press found', 'districtmoving' ),
      'not_found_in_trash' => __ ( 'No press in Trash', 'districtmoving' ),
      'parent_item_colon' => '',
      'menu_name' => __ ( 'Press', 'districtmoving' )
    ),
    'public' => true,
    'has_archive' => false,
    'rewrite' => true,
    'capability_type' => 'page',
    'supports' => array (
      'title',
      'editor',
      // 'author',
      'thumbnail',
      // 'excerpt',
      // 'comments'
      'page-attributes'
    )
	) );

	register_post_type ( 'employment', array (
    'labels' => array (
      'name' => __ ( 'Employment', 'districtmoving' ),
      'singular_name' => __ ( 'Employment', 'districtmoving' ),
      'add_new' => __ ( 'Add New', 'districtmoving' ),
      'add_new_item' => __ ( 'Add New Employment', 'districtmoving' ),
      'edit_item' => __ ( 'Edit Employment', 'districtmoving' ),
      'new_item' => __ ( 'New Employment', 'districtmoving' ),
      'all_items' => __ ( 'All Employment', 'districtmoving' ),
      'view_item' => __ ( 'View Employment', 'districtmoving' ),
      'search_items' => __ ( 'Search Employment', 'districtmoving' ),
      'not_found' => __ ( 'No employment found', 'districtmoving' ),
      'not_found_in_trash' => __ ( 'No employment in Trash', 'districtmoving' ),
      'parent_item_colon' => '',
      'menu_name' => __ ( 'Employment', 'districtmoving' )
    ),
    'public' => true,
    'has_archive' => false,
    'rewrite' => true,
    'capability_type' => 'page',
    'supports' => array (
      'title',
      'editor',
      // 'author',
      'thumbnail',
      // 'excerpt',
      // 'comments'
      'page-attributes'
    )
	) );

	register_post_type ( 'slider', array (
    'labels' => array (
      'name' => __ ( 'Slider', 'districtmoving' ),
      'singular_name' => __ ( 'Slide', 'districtmoving' ),
      'add_new' => __ ( 'Add Slide', 'districtmoving' ),
      'add_new_item' => __ ( 'Add New Slide', 'districtmoving' ),
      'edit_item' => __ ( 'Edit Slide', 'districtmoving' ),
      'new_item' => __ ( 'New Slide', 'districtmoving' ),
      'all_items' => __ ( 'All Slide', 'districtmoving' ),
      'view_item' => __ ( 'View Slide', 'districtmoving' ),
      'search_items' => __ ( 'Search Slider', 'districtmoving' ),
      'not_found' => __ ( 'No slide found', 'districtmoving' ),
      'not_found_in_trash' => __ ( 'No slide in Trash', 'districtmoving' ),
      'parent_item_colon' => '',
      'menu_name' => __ ( 'Slider', 'districtmoving' )
    ),
    'public' => true,
    'has_archive' => false,
    'rewrite' => true,
    'capability_type' => 'page',
    'supports' => array (
      'title',
      'editor',
      // 'author',
      'thumbnail',
      // 'excerpt',
      // 'comments'
      'page-attributes'
    )
	) );
}


/*
 * Modify to add custom dropdown
 */

function districtmoving_add_arrow( $output, $item, $depth, $args ){

//Only add class to 'top level' items on the 'primary' menu.
if('menu-1' == $args->theme_location){
if (in_array("menu-item-has-children", $item->classes)) {
$output .='<span class="dropdown-toggle caret"></span></span>'; 
}
}
return $output; 
} 

add_filter( 'walker_nav_menu_start_el', 'districtmoving_add_arrow',10,4);  

add_action('acf/init', 'distmoving_acf_op_init');
function distmoving_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

include 'jobs-work.php';