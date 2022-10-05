<?php get_header(); ?>

<div class="border border-2 border-dark bg-primary">
<h2 class="text-light text-center p-5">
  <?php echo single_cat_title(); ?>
</h2>
</div>


<div class="container-fluid">

   <div class="archive-grid-section">

      <section class="left-side">
      <?php get_template_part('includes/section', 'archive'); ?>
      </section>
      

      <section class="right-side p-5 my-5 mx-4 bg-danger">
      <?php get_template_part('includes/section', 'aside'); ?>
    </section>

</div>


  <?php previous_posts_link(); ?>
  <?php next_posts_link(); ?>
</div>


<?php get_footer(); ?>