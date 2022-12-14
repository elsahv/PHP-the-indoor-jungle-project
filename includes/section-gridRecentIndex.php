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

        <div class="card bg-primary border border-dark border-1">
          <a class="text-light" style="text-decoration: none" href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid border-bottom border-1 border-dark">
            <?php endif; ?>
            <div class="card-body">
              <h3 class="text-light"><?php the_title(); ?></h3>
              <p><?php echo get_the_date('l jS F, Y'); ?></p>
              <?php the_excerpt(); ?>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>


</div>