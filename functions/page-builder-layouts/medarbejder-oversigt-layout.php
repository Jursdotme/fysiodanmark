<?php
function medarbejder_oversigt_layout($layouts) {
  $layouts['medarbejder-oversigt'] = array (
    'screenshot' => get_template_directory_uri() . '/img/template-screeshots/medarbejder-oversigt.png',
    'name' => __('Medarbejder Oversigt', 'vantage'),    // Required
    'description' => __('Listning af medarbejdere.', 'vantage'),    // Optional
    'widgets' =>
    array (
      0 =>
      array (
        'title' => '',
        'template' => 'partials/loop_medarbejdere.php',
        'posts' => 'post_type=medarbejder&date_query={"after":"","before":""}&orderby=title&order=DESC&posts_per_page=-1&sticky=&additional=',
        'more' => false,
        'panels_info' =>
        array (
          'class' => 'SiteOrigin_Panels_Widgets_PostLoop',
          'raw' => false,
          'grid' => 0,
          'cell' => 0,
          'id' => 0,
          'style' =>
          array (
            'background_display' => 'tile',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
    ),
    'grids' =>
    array (
      0 =>
      array (
        'cells' => 1,
        'style' =>
        array (
        ),
      ),
    ),
    'grid_cells' =>
    array (
      0 =>
      array (
        'grid' => 0,
        'weight' => 1,
      ),
    ),
  );


  return $layouts;

}
add_filter('siteorigin_panels_prebuilt_layouts','fysiodanmark_prebuilt_layouts');
