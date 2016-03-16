<div class="secondthought-feature-item <?php echo $instance['text_placement']; ?>" data-mh="feature">

  <?php
    // Setup Image data
    $id = $instance['image'];
    $size = 'secondthought_feature'; // (thumbnail, medium, large, full or custom size)
    $image_attributes = wp_get_attachment_image_src( $id, $size );
  ?>
  <a href="<?php echo sow_esc_url($instance['link']); ?>">

    <?php if ($instance['header_text']): ?>
      <h4 class="title"><?php echo $instance['header_text']; ?></h4>
    <?php endif; ?>

    <img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">

    <div class="caption" data-mh="caption">
      <?php if ($instance['label_text']): ?>
        <p><?php echo $instance['label_text']; ?></p>
      <?php endif; ?>
    </div>
  </a>
  <div class="meta">
    <a href="<?php echo sow_esc_url($instance['link']); ?>" class="bottom-link">Læs mere <i class="fa fa-chevron-right"></i></a>
  </div>
</div>
