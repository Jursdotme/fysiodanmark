<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php echo get_the_archive_title(); ?></h1>

			<?php get_template_part('partials/loop_produkter'); ?>

			<?php get_template_part('partials/pagination'); ?>

		</section>
		<!-- /section -->

		<?php //get_sidebar(); ?>

	</main>

<?php get_footer(); ?>
