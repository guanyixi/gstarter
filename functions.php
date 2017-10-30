<?php
/**
 * gstarter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gstarter
 */

if ( ! function_exists( 'gstarter_setup' ) ) :
	function gstarter_setup() {
		load_theme_textdomain( 'gstarter', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gstarter' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'gstarter_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

add_action( 'after_setup_theme', 'gstarter_setup' );


function gstarter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gstarter_content_width', 640 );
}
add_action( 'after_setup_theme', 'gstarter_content_width', 0 );


function gstarter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gstarter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gstarter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'gstarter_widgets_init' );

//Enqueue
function gstarter_scripts() {
	//Styles
	wp_enqueue_style( 'gstarter-style', get_stylesheet_uri() );
    wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', false );
    wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', false );
    wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/style.css' );

    //Scripts
	wp_enqueue_script( 'gstarter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'gstarter_scripts' );


 // Implement the Custom Header feature.

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';


// Option Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

//Create custom post type
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'work',
    array(
      'labels' => array(
        'name' => __( 'Work' ),
        'singular_name' => __( 'Work' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports'   => array( 'title', 'editor', 'thumbnail', ),
    )
  );
}

//Registering taxonomy type
function type_init() {
	// create a new taxonomy
	register_taxonomy(
		'work_cat',
		'work',
		array(
			'label' => __( 'Work Categories' ),
			'rewrite' => array( 'slug' => 'work-cat' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'type_init' );

//enable label visibility
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

//enable svg image upload
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



