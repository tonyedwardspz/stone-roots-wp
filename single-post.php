
<?php get_header(); ?>

<div class="blog-wrapper">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="blog-item">
      <!-- Blog image here -->
      <h1><?php the_title(); ?></h1>
      <div class ="byline"><?php the_time('l F d, Y'); ?></a></div>
      <?php
          if ( has_post_thumbnail() ) {
              the_post_thumbnail('blog-thumb');
          }
      ?>

      <?php the_content() ?>
    </div>

  <?php endwhile; else: ?>
    <p><?php -e('No Posts were found. Sorry!'); ?></p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
