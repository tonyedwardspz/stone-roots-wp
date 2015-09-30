<?php
/*
Template Name: gallery
*/
// Events template for stone-roots gallery page


?>

<?php get_header(); ?>

  <?php 
  	if ( shortcode_exists( 'srizonfbgallery' ) ) {
  		echo do_shortcode("[srizonfbgallery id=1]"); 
  	}
  ?>

<?php get_footer(); ?>
