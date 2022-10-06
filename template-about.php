    <?php
    /*
Template Name: About 
*/
    ?>



    <?php get_header(); ?>

    <div class="container pt-5">
        <div class="archive-grid-section">

            <section class="left-side">
                <?php get_template_part('includes/section', 'content') ?>
            </section>

            <section class="right-side p-5 my-5 mx-4 bg-danger">

                <div class="" id="about-sidebar">
                    <?php if (is_active_sidebar('about-sidebar')) : ?>
                        <?php dynamic_sidebar('about-sidebar'); ?>
                    <?php endif; ?>
                </div>

            </section>

        </div>
    </div>



    <?php get_footer(); ?>