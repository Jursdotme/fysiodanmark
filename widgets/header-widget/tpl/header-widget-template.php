<?php
  // Setup Image data
  $id = $instance['image'];
  $size = 'full'; // (thumbnail, medium, large, full or custom size)
  $image_attributes = wp_get_attachment_image_src( $id, $size );
 ?>

<div class="title" style="-ms-flex: 0 1 <?php echo $instance['width']; ?>%; flex: 0 1 <?php echo $instance['width']; ?>%;">
	<h1><?php echo $instance['header']; ?></h1>
</div>
<div class="image" style="background-image: url(<?php echo $image_attributes[0]; ?>);">
</div>
