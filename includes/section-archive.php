<div class="container-fluid">
        <div class="archive-grid">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <div class="card bg-primary border border-dark rounded-4">
                                <a class="text-light"  style="text-decoration: none" href="<?php the_permalink(); ?>">
                                       
                                        <h3 class="px-3 py-2 text-light"><?php the_title(); ?></h3>
        
                     
                                        <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                        <?php endif; ?>
                                      <div class="card-body"><?php the_excerpt(); ?></div>
                                        </a>

                                        </div>

                <?php endwhile;
                else : endif; ?>
        </div>
</div>