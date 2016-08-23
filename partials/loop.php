<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('basic-news-loop'); ?>>

		<?php if (!get_field('legacy', 'option')) { ?>

			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<div class="thumbnail">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('medium'); // Declare pixel size you need inside the array ?>
					</a>
				</div>
			<?php endif;
		} ?>

		<div class="content">

			<?php if (get_field('legacy', 'option')) { ?>
				<p class="date"><?php the_time('j. F - Y'); ?></p>
				<h2 class="title">
					<i class="fa fa-angle-double-right"></i> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
			<?php } ?>



			<?php if (!get_field('legacy', 'option')) { ?>
				<h2 class="title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<p class="date"><?php the_time('j. F - Y'); ?></p>
				<?php secondthoughtwp_excerpt('secondthoughtwp_index');
			} ?>
		</div>

	</article>

<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'secondthought' ); ?></h2>
	</article>

<?php endif; ?>
