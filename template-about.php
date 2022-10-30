    <?php
    /*
Template Name: About 
*/
    ?>

    <?php get_header(); ?>
    <!-- <div style="margin-top: 115px" class=""> -->
        <div class="about-section">

            <section class="about-left-side px-5">
                <?php get_template_part('includes/section', 'content') ?>
            </section>


            <section class="about-right-side p-5 my-5 bg-danger">
                <div class="" id="about-sidebar">
                    <?php if (is_active_sidebar('about-sidebar')) : ?>
                        <?php dynamic_sidebar('about-sidebar'); ?>
                    <?php endif; ?>
                </div>
            </section>

        <!-- </div> -->
    </div>



    <?php get_footer(); ?>