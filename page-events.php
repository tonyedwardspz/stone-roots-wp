
<?php
/*
Template Name: Events Page
*/
?>
<?php get_header(); ?>

	<h1>Upcoming Events</h1>

	<?php
	if ( shortcode_exists( 'fts facebook' ) ) {
  	echo do_shortcode("[fts facebook id=StoneRootsUK type=events]");
	}
	
  ?>

<?php get_footer(); ?>
