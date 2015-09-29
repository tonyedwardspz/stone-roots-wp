<?php
/*
Template Name: gallery
*/
// Events template for stone-roots gallery page


?>

<?php get_header(); ?>

<!-- put the wp gallery into the centre of the page -->

<div class="gallery-mid">
  <?php echo do_shortcode("[srizonfbgallery id=1]"); ?>
</div>

<?php get_footer(); ?>
