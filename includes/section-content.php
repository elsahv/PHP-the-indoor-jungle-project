<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <!-- <div class="border border-2 border-dark bg-primary">
        <h2 class="text-light text-center p-5"><?php the_title(); ?></h2>
        </div> -->


        <div class="container p-5">
            <div class="p-5">
                <?php the_content(); ?>
            </div>
        </div>

<?php endwhile;
else : endif; ?>