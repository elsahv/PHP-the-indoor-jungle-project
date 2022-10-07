<?php get_header(); ?>


<!-- SINGLE NAVBAR -->
<div class="d-flex bg-primary p-4 border-bottom border-dark border-2">


  <!-- CATEGORIES -->
  <div class="mx-2">
    <?php
    $categories = get_the_category();
    foreach ($categories as $cat) : ?>

      <a class="badge bg-danger text-secondary p-2 text-decoration-none" style="font-size: 18px" href="<?php echo get_category_link($cat->term_id); ?>">
        <?php echo $cat->name; ?>
      </a>
    <?php endforeach; ?>
  </div>


  <!-- TAGS -->
  <div class="pt-1">
    <?php
    $tags = get_the_tags();
    if ($tags) :
      foreach ($tags as $tag) : ?>

        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="px-1 text-light">
          <?php echo $tag->name; ?>
        </a>
    <?php endforeach;
    endif; ?>
  </div>



</div>





<div class="container">
  <div class="archive-grid-section">
    <section class="left-side p-5">
      <p><?php echo get_the_date('l jS F, Y'); ?></p>

      <?php get_template_part('includes/section', 'content'); ?>
      <?php wp_link_pages(); ?>
    </section>



    <section class="right-side p-5 my-5 mx-4 bg-danger">
      <div class="" id="aside-sidebar">
        <?php if (is_active_sidebar('aside-sidebar')) : ?>
          <?php dynamic_sidebar('aside-sidebar'); ?>
        <?php endif; ?>
      </div>
    </section>

  </div>
</div>

<?php get_footer(); ?>