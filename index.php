
<!-- Stone roots wordpress index -->

<?php get_header(); ?>

<!-- <!-- the gets and the LOOP -->
<div id="main" class ="group">

    <div id="blog" class ="left-col">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class ="byline">by <?php the_author_posts_link(); ?> on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a></div>
            <?php the_content('Read More...'); ?>
        </div>

      <?php endwhile; else: ?>
        <p><?php -e('No Posts were found. Sorry!'); ?></p>
      <?php endif; ?>

      <div class="navi">
        <div class="right">
          <?php previous_posts_link('Previous'); ?> / <?php next_posts_link('Next'); ?>
        </div>
      </div>

    </div> <!-- end of blog -->

    <!-- SIDEBAR -->
    <?php get_sidebar(); ?>

</div> <!-- end of main--> -->

<?php get_footer(); ?>
