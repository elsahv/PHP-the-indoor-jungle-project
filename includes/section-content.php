<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <p><?php echo get_the_date('l jS F, Y'); ?></p>

        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 border border-dark border-2">
        <?php endif; ?>

        <?php the_content(); ?>



<?php endwhile;
else : endif; ?>