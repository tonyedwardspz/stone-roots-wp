<?php get_header(); ?>

<div class="blog-wrapper">


  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="blog-item">
      <!-- Blog image here -->
      <h2><?php the_title(); ?></h2>

      <?php the_content(); ?>
    </div>

  <?php endwhile; else: ?>
    <p><?php -e('No Posts were found. Sorry!'); ?></p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
