<?php get_header(); ?>

<div class="blog-wrapper">

  <h1>Audio &amp; Video</h1>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="blog-item">
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
