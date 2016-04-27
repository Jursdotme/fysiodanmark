<?php
function produktoversigt_layout($layouts){
  $layouts['produktoversigt'] = array (
    'screenshot' => get_template_directory_uri() . '/img/template-screeshots/produktoversigt.png',
    'name' => __('Produktoversigt', 'vantage'),    // Required
    'description' => __('Listning af produkter fra produkt sektionen.', 'vantage'),    // Optional
    'widgets' =>
    array (
      0 =>
      array (
        'type' => 'visual',
        'title' => '',
        'text' => '<p>I klinikken har vi en række salgsvarer, der kan bruges både til behandling, forebyggelse og træning.</p><p>Fælles for varerne er, at de alle er af høj kvalitet til en fornuftig pris, og at alle varerne kan ses og prøves før køb.</p><p>Vi bruger selv alle varerne, både i klinikken og træningscentret og har derfor stor erfaring med kvaliteten og funktionaliteten. Spørg os gerne, hvis du vil vide mere om den enkelte vare.</p>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
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
      1 =>
      array (
        'title' => '',
        'template' => 'partials/loop_produkter.php',
        'posts' => 'post_type=post_catalog&date_query={"after":"","before":""}&orderby=date&order=DESC&posts_per_page=-1&sticky=&additional=',
        'more' => false,
        'panels_info' =>
        array (
          'class' => 'SiteOrigin_Panels_Widgets_PostLoop',
          'raw' => false,
          'grid' => 1,
          'cell' => 0,
          'id' => 1,
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
      1 =>
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
      1 =>
      array (
        'grid' => 1,
        'weight' => 1,
      ),
    ),
  );

  return $layouts;

}
add_filter('siteorigin_panels_prebuilt_layouts','fysiodanmark_prebuilt_layouts');
