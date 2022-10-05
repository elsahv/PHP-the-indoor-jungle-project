<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

		<p><?php echo get_the_date('l jS F, Y'); ?></p>

		<?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
        <?php endif; ?>
		
		<?php the_content(); ?>


		<?php
		$tags = get_the_tags();
		if ($tags) :
			foreach ($tags as $tag) : ?>

				<a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-success">
					<?php echo $tag->name; ?>
				</a>
		<?php endforeach;
		endif; ?>


		<?php
		$categories = get_the_category();
		foreach ($categories as $cat) : ?>

			<a href="<?php echo get_category_link($cat->term_id); ?>">
				<?php echo $cat->name; ?>
			</a>


		<?php endforeach; ?>

		<?php
		//  comments_template();
		?>



<?php endwhile;
else : endif; ?>