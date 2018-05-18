<?php if (have_posts()) : ?>
			<?php while (have_posts()) :the_post(); ?>

			<div class="fix post_single">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="post_info">
		Posted In: <?php the_category(', '); ?> | Posted On: <?php the_time('M d, Y'); ?> <?php comments_popup_link('No comment', '1 comment', '% comments'); ?>
		</div>
		<div class="fix post_single_con">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image', array('class' =>'post-thumb')); ?></a>
		<?php echo excerpt('60'); ?>

				</div>
					</div>

					<?php endwhile; ?>
					<?php endif; ?>
					<?php get_template_part('pagination'); ?>
