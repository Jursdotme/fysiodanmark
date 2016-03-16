<?php
  // Setup Image data
  $id = $instance['icon'];
  $size = 'full'; // (thumbnail, medium, large, full or custom size)
  $image_attributes = wp_get_attachment_image_src( $id, $size );
 ?>


<?php if ($instance['content']) { ?>
	<div class="wrapper" style="background-image: url(<?php echo $image_attributes[0]; ?>); background-size: <?php echo $instance['icon_size']; ?>; background-position: <?php echo $instance['pos_v']; ?> <?php echo $instance['pos_h']; ?>;">
		<div class="content">
			<div class="title">
				<a href="<?php echo sow_esc_url($instance['header_link']); ?>">
					<h3><?php echo $instance['header']; ?></h3>
				</a>
			</div>
			<div class="caption">
				<?php echo $instance['content']; ?>
			</div>
		</div>

	</div>
<?php } else {?>
	<a href="<?php echo sow_esc_url($instance['header_link']); ?>" class="wrapper" style="background-image: url(<?php echo $image_attributes[0]; ?>); background-size: <?php echo $instance['icon_size']; ?>; background-position: <?php echo $instance['pos_v']; ?> <?php echo $instance['pos_h']; ?>;">
		<div class="content">
			<div class="title">
					<h3><?php echo $instance['header']; ?></h3>
			</div>
		</div>

	</a>
<?php } ?>
