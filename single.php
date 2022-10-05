<?php get_header(); ?>



<div class="bg-primary text-light p-4 border border-dark border-1">df</div>


  <div class="container">
  <div class="archive-grid-section">

  
  <section class="left-side p-5">
          <?php get_template_part('includes/section', 'blogcontent'); ?>

          <?php wp_link_pages(); ?>
        </section>



    <section class="right-side p-5 my-5 bg-danger">
      <?php get_template_part('includes/section', 'aside'); ?>
    </section>


    </div>
  </div>

<?php get_footer(); ?>