<?php


session_start();

if(!array_key_exists('cart',$_SESSION)){
	$_SESSION['cart']=array();
}


function addToCart()
{
    array_push($_SESSION['cart'], $_POST['product-id']);
	
}
if(isset($_POST['product-id']))
{
	addToCart();
	header("Location: " . $_SERVER['PHP_SELF']);
}
function removeFromCart()
{
    if (($key = array_search($_POST['product-id-remove'], $_SESSION['cart'])) !== false) {
		unset($_SESSION['cart'][$key]);
	}
}
if(isset($_POST['product-id-remove']))
{
	removeFromCart();
	header("Location: " . $_SERVER['PHP_SELF']);
}



if(isset($_POST['submit'])){
	$to = "vrapic@gmail.com"; // this is your Email address
	$from = $_POST['e-mail']; // this is the sender's Email address
	$name = $_POST['user_name'];
	$subject = "Upit od ". $name;
	$cart = "";

	foreach($_SESSION["cart"] as $value)
	{
	$link =  get_permalink($value);
	$title =  get_the_title( $value );
	$price =  get_field( "cijena_komad", $value );
	$cart .= '

	<div class="row pb-1">
		<div class="col ml-1">
			<a href="'. $link .'" style="display:flex; color:black;">
				<h3 class="text-white ml-1">' . $title.' '. $price . ' kn/kom</h3>
			</a>
		</div>
		
	</div>
	';

	};






	$message =
	'<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	
	
	</head>
	<body>
			<h2>'.$name . ' | ' . $from . ' ima upit: </h2></br>' . $cart . ' <h2>Napomena:</h2> </br>'. $_POST['napomena'];'
	</body>
	</html>';
	
	
	
	

	$headers .= 'Content-type: text/html; charset=iso-8859-2' . "\r\n";

	wp_mail($to,$subject,$message,$headers);
	unset($_SESSION['cart']);
	$_SESSION['cart']=array();
}




/**
 * Shop.style functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shop.style
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'shop_style_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shop_style_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Shop.style, use a find and replace
		 * to change 'shop-style' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shop-style', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'shop-style' ),
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
				'shop_style_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'shop_style_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shop_style_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shop_style_content_width', 640 );
}
add_action( 'after_setup_theme', 'shop_style_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shop_style_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'shop-style' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'shop-style' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'shop_style_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shop_style_scripts() {
	wp_enqueue_style( 'shop-style-min', get_template_directory_uri() . '/assets/css/style.min.css' , array(), _S_VERSION );

	//wp_enqueue_script( 'shop-style-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'shop-style-js-min', get_template_directory_uri() . '/assets/js/script.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shop_style_scripts' );

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

