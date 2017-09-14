<?php
// Theme Support - Post Thumbnails
// add_theme_support( 'post-thumbnails' );

// Register Menu
// register_nav_menu( 'primary', 'Primary Menu' );

// Remove from Post Content
// remove_filter('the_content', 'wptexturize');
// Remove from Post Title
// remove_filter('the_title', 'wptexturize');
// Remove from Post Excerpt
// remove_filter('the_excerpt', 'wptexturize');
// Remove from Post Comments
// remove_filter('comment_text', 'wptexturize');

add_action('init', 'fr_custom_init');
function fr_custom_init() {
	add_post_type_support( 'page', 'excerpt' );
}

// Register Styles and Scripts
add_action('wp_enqueue_scripts', 'fr_register_style');
function fr_register_style()
{
	wp_register_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAqWbmpL1XAqw5bNkVVCPjujawIHyKwntA', array(), '1.0.0', true );
	wp_register_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array( 'jquery' ), '3.3.5', true );
	wp_register_script( 'validate', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery.validate.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'cycle2', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery.cycle2.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'flexslider', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery.flexslider-min.js', array( 'jquery' ), false, true );
	wp_register_script( 'lightbox', get_stylesheet_directory_uri() . '/assets/js/vendor/lightbox.min.js', array( 'jquery' ), '2.8.2', true );
	wp_register_script( 'moment', get_stylesheet_directory_uri() . '/assets/js/vendor/moment.min.js', array(), '3.3.5', true );
	wp_register_script( 'wow', get_stylesheet_directory_uri() . '/assets/js/vendor/wow.min.js', array(), '1.3.0', true );
	// wp_register_script( 'select2', get_stylesheet_directory_uri() . '/assets/js/vendor/select2.min.js', array('jquery'), '4.0.3', true );
	// wp_register_script( 'pikaday', get_stylesheet_directory_uri() . '/assets/js/vendor/pikaday.min.js', array( 'jquery', 'moment' ), '1', true );
	// wp_register_script( 'pikaday-jquery', get_stylesheet_directory_uri() . '/assets/js/vendor/pikaday.jquery.min.js', array( 'jquery', 'pikaday' ), '1', true );
	wp_register_script( 'helper', get_stylesheet_directory_uri() . '/assets/js/helper.js', array( 'jquery' ), '1.0.0', true );
	wp_register_script( 'acf-map', get_stylesheet_directory_uri() . '/assets/js/acf-map.js', array( 'jquery' ), '1.0.0', true );
	wp_register_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery', 'flexslider' ), '1.0.0', true );
	
	wp_register_style( 'google-font', 'https://fonts.googleapis.com/css?family=Noto+Sans', null, null, 'all' );
	wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', null, '3.3.5', 'all' );
	wp_register_style( 'bootstrap-grid', get_stylesheet_directory_uri() . '/assets/css/bootstrap-grid.min.css', null, '3.3.5', 'all' );
	wp_register_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', null, '4.6.3', 'all' );
	wp_register_style( 'flexslider', get_stylesheet_directory_uri() . '/assets/css/flexslider.css', null, '2.6.1', 'all' );
	wp_register_style( 'animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', null, '3.5.2', 'all' );
	// wp_register_style( 'select2', get_stylesheet_directory_uri() . '/assets/css/select2.min.css', null, '4.0.3', 'all' );
	wp_register_style( 'select2-bootstrap', get_stylesheet_directory_uri() . '/assets/css/select2-bootstrap.min.css', array('select2'), '4.0.3', 'all' );
	// wp_register_style( 'pikaday', get_stylesheet_directory_uri() . '/assets/css/pikaday.min.css', null, '1', 'all' );
	// wp_register_style( 'pikaday-theme', get_stylesheet_directory_uri() . '/assets/css/pikaday.theme.min.css', null, '1', 'all' );
	// wp_register_style( 'lightbox', get_stylesheet_directory_uri() . '/assets/css/lightbox.min.css', null, '2.8.2', 'all' );
	wp_register_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css', array( 'storefront-style', 'storefront-woocommerce-style', 'storefront-child-style' ), '1.1.0', 'all' );
	
	wp_enqueue_script('google-map');
	// wp_enqueue_script('bootstrap');
	wp_enqueue_script('flexslider');
	wp_enqueue_script('moment');
	wp_enqueue_script('wow');
	wp_enqueue_script('select2');
	// wp_enqueue_script('pikaday');
	// wp_enqueue_script('pikaday-jquery');
	wp_enqueue_script('helper');
	wp_enqueue_script('acf-map');
	wp_enqueue_script('main');

	// wp_enqueue_style('google-font');
	// wp_enqueue_style('bootstrap');
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('flexslider');
	wp_enqueue_style('animate');
	wp_enqueue_style('select2');
	wp_enqueue_style('select2-bootstrap');
	// wp_enqueue_style('pikaday');
	// wp_enqueue_style('pikaday-theme');
	wp_enqueue_style('main');
}

// Custom Dashboard Stylesheet
function fr_admin_custom_css()
{
	wp_register_style( 'fr-admin', get_stylesheet_directory_uri() . '/assets/css/admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'fr-admin' );
}
add_action( 'admin_init', 'fr_admin_custom_css', 1 );

// Add IE conditional html5 shim to header
function add_ie_html5_shim ()
{
	echo '<!--[if lt IE 9]>';
	echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

// Restrict dashboard access to administrator only
function fr_restrict_admin()
{
	if ( ! current_user_can( 'manage_options' ) && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF'] ) {
		wp_redirect( site_url() );
	}
}
add_action( 'admin_init', 'fr_restrict_admin', 1 );

function fr_fromemail($email)
{
	$wpfrom = 'no-reply@aegis.id';
	return $wpfrom;
}
// add_filter('wp_mail_from', 'fr_fromemail');

function fr_fromname($email)
{
	$wpfrom = get_option('blogname');
	return $wpfrom;
}
// add_filter('wp_mail_from_name', 'fr_fromname');

function fr_add_favicon()
{
	$favicon_url = get_stylesheet_directory_uri() . '/assets/images/favicon.ico';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" type="image/x-icon" />';
}
add_action('login_head', 'fr_add_favicon');
add_action('admin_head', 'fr_add_favicon');

// Custom Logo
function fr_setup() {
	
	add_theme_support( 'custom-logo', array(
		'width'       => 400,
		'height'      => 100,
		'flex-width' => true,
		'flex-height' => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

}
// add_action( 'after_setup_theme', 'fr_setup' );

// Change Custom Logo Class
function fr_logo_class( $html ) {

	$html = str_replace( 'class="custom-logo"', 'class="navbar-brand-image"', $html );
	$html = str_replace( 'class="custom-logo-link"', 'class="navbar-brand"', $html );

	return $html;
}
// add_filter( 'get_custom_logo', 'fr_logo_class' );

// Text Domain
function fr_textdomain() {
	load_theme_textdomain('xscoop', get_stylesheet_directory() . '/languages');
	load_theme_textdomain('woocommerce', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'fr_textdomain');

function fr_child_textdomain() {
	load_child_theme_textdomain( 'xscoop', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'fr_child_textdomain' );

// Register widget area
function fr_widgets_init() {
		
	$sidebar_args = array(
		'name'          => __( 'Sidebar Shop', 'xscoop' ),
		'id'            => 'sidebar-shop',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="gamma widget-title">',
		'after_title'   => '</span>'
	);

	// register_sidebar( $sidebar_args );

	$sidebar_news_args = array(
		'name'          => __( 'Sidebar News', 'xscoop' ),
		'id'            => 'sidebar-blog',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="gamma widget-title">',
		'after_title'   => '</span>'
	);

	register_sidebar( $sidebar_news_args );

	$sidebar_footer_args = array(
		'name'          => __( 'Sidebar Footer', 'xscoop' ),
		'id'            => 'sidebar-footer',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="gamma widget-title">',
		'after_title'   => '</span>'
	);
	
	register_sidebar( $sidebar_footer_args );
}
add_action('widgets_init', 'fr_widgets_init');

?>