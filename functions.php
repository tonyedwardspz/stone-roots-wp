<?php

define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");
define( 'STYLE', TEMPPATH. "/css");
define( 'SCRIPT', TEMPPATH. "/scripts");


// Post thumbnails
add_theme_support( 'post-thumbnails' );
add_image_size( 'blog-thumb', 780, 300, true );


// Menu support
if ( function_exists('register_nav_menus')) {
  register_nav_menus(
  array(
    'main' => 'Main Nav'
    )
  );
}
add_theme_support('nav-menus');


// Load CDN jquery is there is a connection
function getJqueryURL() {
	$googleCDN = "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js";
	$test_url = @fopen($googleCDN,'r');

	if ($test_url !== false){
		return $googleCDN;
	} else {
		return SCRIPT. '/jquery-1.11.3.min.js';;
	}
}


// Load CDN Font Awesome if there is a connection
function getFontAwesomeURL() {
	$fontAwesomeCDN = "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css";
	$test_url = @fopen($fontAwesomeCDN,'r');

	if ($test_url !== false) {
		return $fontAwesomeCDN;
	} else {
		return STYLE. '/font-awesome.min.css';
	}
}


// Enqueue scripts, loading them in the footer
function load_my_script() {
  if ( !is_admin() ) {
    wp_deregister_script('jquery');

    $jqueryURL = getJqueryURL();

    //register all scripts
    // wp_register_script($handle, $src, $deps, $ver, $in_footer);
    wp_register_script('jquery', $jqueryURL, null, '1.11.3d', true);
    wp_register_script('fittext', get_template_directory_uri().'/scripts/fittext.js', array('jquery'), null, true);
    wp_register_script('bs', get_template_directory_uri().'/scripts/backstrech.js', array('jquery'), null, true);
    wp_register_script('myScript', get_template_directory_uri().'/scripts/script.js', array('jquery'), null, true);

    // enqueue scripts in the header
    wp_enqueue_script('jquery');
    wp_enqueue_script('fittext');
    wp_enqueue_script('bs');
    wp_enqueue_script('myScript');
  }
}
add_action( 'wp_enqueue_scripts', 'load_my_script' );


// Enqueue styles, loading them in the header
function load_my_styes(){
  // Font Awesome
  $fontAwesomeURL = getFontAwesomeURL();

  // Font Awesome
  wp_register_style( 'font-awesome', $fontAwesomeURL, null, '4.1.0', 'all');
  wp_enqueue_style( 'font-awesome' );
}
add_action( 'wp_enqueue_scripts', 'load_my_styes');


// the_except() read more link
function new_excerpt_more( $more ) {
  return '<span class="more-wrapper"><a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'your-text-domain' ) . '</a></span>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


// Jetpack fallback open graph image
function jetpack_og_custom_image( $media, $post_id, $args ) {
    if ( $media ) {
        return $media;
    } else {
        $permalink = get_permalink( $post_id );
        $url = apply_filters( 'jetpack_photon_url', IMAGES.'/sr-fallback-img.jpg' );

        return array( array(
            'type'  => 'image',
            'from'  => 'custom_fallback',
            'src'   => esc_url( $url ),
            'href'  => $permalink,
        ) );
    }
}
add_filter( 'jetpack_images_get_images', 'jetpack_og_custom_image', 10, 3 );

?>
