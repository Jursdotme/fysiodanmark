<!-- header -->

<div class="header_wrapper">
  <header class="header clear" role="banner">
    <div class="header-inner nav-right">

      <div class='logo'>
        <a href='<?php echo home_url(); ?>'>
          <img src='<?php echo get_template_directory_uri(); ?>/img/fd-logo.svg' alt='Logo' class='logo-img'>
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
