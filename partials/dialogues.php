<?php // WP_Query arguments
$args = array (
	'post_type'              => array( 'izd-post-type' ),
	'posts_per_page'         => '-1',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();

		// check if the flexible content field has rows of data
		if( have_rows('type') ):

		     // loop through the rows of data
		    while ( have_rows('type') ) : the_row();

		        if( get_row_layout() == 'topbanner' ):

		        	?>
							<div class="top-banner dialogue" style="background-color: <?php the_sub_field('bg-color'); ?>; color: <?php the_sub_field('color'); ?>;">
								<div class="inner">
									<?php the_sub_field('indhold'); ?>
								</div>
							</div>
							<?php

		        elseif( get_row_layout() == 'notifikation' ): ?>

							<div class="ns-box ns-show">
								<div class="ns-box-inner">
									<?php the_sub_field('indhold'); ?>
								</div>
								<span class="ns-close"></span>
							</div>

		        <?php endif;

		    endwhile;

		else :

		    // no layouts found

		endif;

	}
}

// Restore original Post Data
wp_reset_postdata(); ?>
