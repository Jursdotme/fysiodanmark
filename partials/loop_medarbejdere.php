<?php

	$medarbejderid = 0;

	if (have_posts()):
		while (have_posts()) : the_post(); ?>

	<?php
	$medarbejderid++;
	// Setup Image data
	$id = get_field('portrat');
	$size = 'portrait'; // (thumbnail, medium, large, full or custom size)
	$image_attributes = wp_get_attachment_image_src( $id, $size );

	$employee_style = get_field('employee_style', 'option');
	?>

	<div class="medarbejder_thumbnail <?php echo $employee_style; ?>">
		<div class="portrait">
			<?php if ( has_post_thumbnail() ) {
			    the_post_thumbnail('portrait');
			} else { ?>
			<img src="<?php echo $image_attributes[0]; ?>" alt="" />
			<?php } ?>
		</div>
		<div class="caption" data-mh="medarbejder-caption">
			<h3><?php the_title(); ?></h3>
			<p class="titel"><?php the_field('titel'); ?></p>
		</div>
		<div class="read-more">
			<a href="javascript:void(0)" class="fire_modal" data-modal="#modal_<?php echo $medarbejderid; ?>">
				Læs mere
			</a>
		</div>
	</div>

<?php endwhile; ?>

<?php endif;

$medarbejderid = 0;

if (have_posts()):
	while (have_posts()) : the_post();

	$medarbejderid++;
	$id = get_field('portrat');
	$size = 'portrait'; // (thumbnail, medium, large, full or custom size)
	$image_attributes = wp_get_attachment_image_src( $id, $size );
	?>

	<div class="medarbejder-details" id="modal_<?php echo $medarbejderid; ?>">
		<div class="medarbejder-details-inner">
				<span class="icon icon-close close"><i class="fa fa-times"></i></span>
				<div class="basic-info">
					<div class="image">
						<img src="<?php echo $image_attributes[0]; ?>" />
					</div>
					<div class="meta">
						<h2><?php the_title(); ?></h2>
						<?php if (get_field('email_addresse')): ?>
							<p>
								<i class="fa fa-fw fa-envelope"></i> <a href="mailto:<?php the_field('email_addresse'); ?>"><?php the_field('email_addresse'); ?></a>
							</p>
						<?php endif; ?>
					</div>
				</div>
				<div class="biography">
					<?php the_content(); ?>
				</div>
		</div>
	</div>
<?php endwhile; ?>

<?php endif;
