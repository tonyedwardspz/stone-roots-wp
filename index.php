<?php get_header(); ?>

<div class="blog-wrapper">

  <h1>Blog</h1>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="blog-item">
      <!-- Blog image here -->
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class ="byline"><?php the_time('l F d, Y'); ?></a></div>
      <?php
          if ( has_post_thumbnail() ) {
              the_post_thumbnail('blog-thumb');
          }
      ?>

      <?php the_content(); ?>
    </div>

  <?php endwhile; else: ?>
    <p><?php -e('No Posts were found. Sorry!'); ?></p>
  <?php endif; ?>

  <div class="navi">
    <div class="right">
      <?php previous_posts_link('Previous'); ?> / <?php next_posts_link('Next'); ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
