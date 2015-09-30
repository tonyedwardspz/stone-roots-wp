
<?php
/*
Template Name: events
*/
// Events template for stone-roots events page

?>
<?php get_header(); ?>

	<?php
	if ( shortcode_exists( 'ik_fb_feed' ) ) {
  		echo do_shortcode("[ik_fb_feed id=StoneRootsUK use_thumb=1 show_only_events=1 hide_feed_images=1 show_like_button=1 show_profile_picture=1 show_page_title=1 show_posted_by=0 show_date=1 use_human_timing=1]"); 
	}
  ?>

<?php get_footer(); ?>
