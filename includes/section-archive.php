<div class="container-fluid">
        <div class="archive-grid">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <div class="card bg-primary border border-dark border-2">
                                        <a class="text-light" style="text-decoration: none" href="<?php the_permalink(); ?>">

                                                <?php if (has_post_thumbnail()) : ?>
                                                        <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid border-bottom border-2 border-dark">
                                                <?php endif; ?>
                                                <div class="card-body">
                                                        <h3 class="text-light"><?php the_title(); ?></h3>
                                                        <p><?php echo get_the_date('l jS F, Y'); ?></p>
                                                        <?php the_excerpt(); ?>
                                                </div>
                                        </a>

                                </div>

                <?php endwhile;
                else : endif; ?>
        </div>
</div>