<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php echo get_field('no_pagetitle') || get_field('no_headers', 'option') ? '' : '<h1 class="heading">' . get_the_title() . '</h1>'; ?>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->

	</main>

<?php get_footer(); ?>
