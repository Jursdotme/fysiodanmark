<!-- header -->

<?php
  // Setup Image data
  $id = get_field('header_logo', 'option');
  $size = 'full'; // (thumbnail, medium, large, full or custom size)
  $image_attributes = wp_get_attachment_image_src( $id, $size );
 ?>

<div class="header_wrapper">
  <header class="header clear" role="banner">
    <div class="header-inner nav-right">

      <div class='logo'>
        <a href='<?php echo home_url(); ?>'>
          <img src='<?php echo $image_attributes[0]; ?>' alt='Logo' class='logo-img'>
        </a>
      </div>

      <?php secondthought_nav(); ?>

    </div>
  </header>
</div>

<div class="utilities">
  <div class="text-sizer">
   	<div class="help-text"><p>Tekst størrelse:</p></div>
  	<div id="slider"></div>
  </div>
</div>

<!-- /header -->

<?php get_template_part('partials/mobile_navigation'); ?>
