<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");

add_theme_support('nav-menus');

// Menu support
if ( function_exists('register_nav_menus')) {
  register_nav_menus(
  array(
    'main' => 'Main Nav'
    )
  );
}

//sidebar support
if ( function_exists( 'register_sidebar' ) ) {
  register_sidebar( array (
    'name' => __( 'Primary Sidebar', 'primary-sidebar' ),
    'id' => 'primary-widget-area',
    'description' => __( 'The primary widget area', 'dir' ),
    'before_widget' => '<div class="widget">',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
}


//enqueue scripts, loading them in the footer
function load_my_script() {
  if ( !is_admin() ) { // do not load scripts on admin page
    //de register the built in jquery (it out of date)
    wp_deregister_script('jquery');

    //register all scripts
    // wp_register_script($handle, $src, $deps, $ver, $in_footer);
    wp_register_script('jquery', get_template_directory_uri().'/scripts/jquery-1.11.3.min.js', null, null, true);
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

// enqueue styles, loading them in the header
function load_my_styes(){

  // Font Awesome
  wp_register_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css',  null, null, 'all' );

  wp_enqueue_style( 'font-awesome' );
}
add_action( 'wp_enqueue_scripts', 'load_my_styes');

?>
