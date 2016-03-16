<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php
	$medarbejderid++;
	// Setup Image data
	$id = get_field('portrat');
	$size_1 = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
	$size_2 = 'medium';
	$image_attributes_1 = wp_get_attachment_image_src( $id, $size_1 );
	$image_attributes_2 = wp_get_attachment_image_src( $id, $size_2 );
	?>

	<div class="medarbejder">
		<div class="portrait">
			<img src="<?php echo $image_attributes_1[0]; ?>" alt="" />
		</div>
		<div class="caption" data-mh="medarbejder-caption">
			<h3><?php the_title(); ?></h3>
			<p class="titel"><?php the_field('titel'); ?></p>
		</div>
		<div class="morph-button morph-button-overlay morph-button-fixed modal-<?php echo $medarbejderid; ?>">
			<button type="button">
				Læs mere
			</button>
			<div class="morph-content" style="left: 802.5px; top: 130.234px;">
				<div>
					<div class="content-style-overlay">
						<span class="icon icon-close">Close the overlay</span>
						<div class="image">
							<img src="<?php echo $image_attributes_1[0]; ?>" />
						</div>
						<h2><?php the_title(); ?></h2>
						<p>
							<i class="fa fa-fw fa-envelope"></i> <a href="mailto:<?php the_field('email_addresse'); ?>"><?php the_field('email_addresse'); ?></a>
						</p>
						<div class="biography">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php endwhile; ?>

<?php endif; ?>
