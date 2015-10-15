<?php

define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");


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


// Enqueue scripts, loading them in the footer
function load_my_script() {
  if ( !is_admin() ) { 
    wp_deregister_script('jquery');

    //register all scripts
    // wp_register_script($handle, $src, $deps, $ver, $in_footer);
    wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js', null, null, true);
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
  wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );

  wp_enqueue_style( 'font-awesome' );
}
add_action( 'wp_enqueue_scripts', 'load_my_styes');


// the_except() read more link
function new_excerpt_more( $more ) {
  return '<span class="more-wrapper"><a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'your-text-domain' ) . '</a></span>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


?>
