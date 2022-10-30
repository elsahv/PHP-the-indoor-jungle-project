<div class="most-recent-img">
  <?php
  $the_query = new WP_Query(array(
    'posts_per_page' => 1,
  ));
  ?>

  <?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


      <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('blog-fullscreen'); ?>" alt="<?php the_title(); ?>" class="">
      <?php endif; ?>


      <div class="text-light" id="most-recent-content">
        <div class="most-recent-title text-capitalize" id="most-recent-text"><?php the_title(); ?></div>
        <div class="most-recent-excerpt" id="most-recent-text"> <?php the_excerpt(); ?></div>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary border border-dark border-1">Read More</a>
      </div>


    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

  <?php endif; ?>


</div>