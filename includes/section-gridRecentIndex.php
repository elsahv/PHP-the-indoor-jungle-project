<div class="container-fluid">
  <div class="recent-grid-title">Recent Posts</div>

  <div class="frontpage-grid">
    <?php
    $the_query = new WP_Query(array(
      'posts_per_page' => 3,
      'offset' => 1,
    ));
    ?>

    <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="card bg-primary border border-dark border-2 rounded-4">
          <a class="text-light" style="text-decoration: none" href="<?php the_permalink(); ?>">
            <h3 class="px-3 py-2 text-light"><?php the_title(); ?></h3>

            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid border-top border-bottom border-2 border-dark">
            <?php endif; ?>
            <div class="card-body"><?php the_excerpt(); ?></div>
          </a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>


</div>