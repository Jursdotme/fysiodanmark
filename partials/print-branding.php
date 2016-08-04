<?php
  // Setup Image data
  $id = get_field('header_logo', 'option');
  $size = 'medium'; // (thumbnail, medium, large, full or custom size)
  $image_attributes = wp_get_attachment_image_src( $id, $size );
 ?>

<div class="print-branding">
  <img src='<?php echo $image_attributes[0]; ?>' alt='Logo' class='logo-img-print'>
  <p class="small">
    (Denne artikel er printet fra <?php echo get_permalink(); ?>)
  </p>
</div>
