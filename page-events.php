
<?php
/*
Template Name: events
*/
// Events template for stone-roots events page

?>
<?php get_header(); ?>

	<h1>Upcoming Events</h1>

	<?php
	// if ( shortcode_exists( 'fts' ) ) {
  	echo do_shortcode("[fts facebook id=StoneRootsUK type=events]");
	// }
	
  ?>

<?php get_footer(); ?>
