<?php
/*
Template Name: Image Gallery
*/
?>

<?php get_header(); ?>

	<h1>Gallery</h1>

  <?php 
  	if ( shortcode_exists( 'srizonfbgallery' ) ) {
  		echo do_shortcode("[srizonfbgallery id=1]"); 
  	}
  ?>

<?php get_footer(); ?>
