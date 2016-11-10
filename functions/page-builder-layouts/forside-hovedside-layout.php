<?php
function forside_hovedside_layout($layouts) {
  $layouts['forside-hovedside'] = array (
    'screenshot' => get_template_directory_uri() . '/img/template-screeshots/forside-hovedside.png',
    'name' => __('Forside (Hovedside)', 'vantage'),    // Required
    'description' => __('Forside for fysiodanmark hovedsiden.', 'vantage'),    // Optional
    'widgets' => array (
      0 => array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h1 class="p1 display-1">Find din lokale FysioDanmark klinik</h1><h3 class="p1">54 klinikker med kvalitetsyddelser indenfor fysioterapi og sund livsstil med høj kundetilfredshed.</h3>',
        'filter' => '1',
        'panels_info' => array (
          'class' => 'SiteOrigin_Widget_Editor_Widget',
          'grid' => 0,
          'cell' => 0,
          'id' => 0,
          'style' => array (
            'background_image_attachment' => false,
            'background_display' => 'tile',
            'font_color' => '#ffffff',
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      1 => array (
        'text' => 'Hello world!',
        '_sow_form_id' => '568d25790c3d2',
        'panels_info' => array (
          'class' => 'Location_Search_Widget',
          'raw' => false,
          'grid' => 0,
          'cell' => 0,
          'id' => 1,
        ),
      ),
      2 => array (
        'type' => 'visual',
        'title' => '',
        'text' => '',
        'filter' => '1',
        'panels_info' => array (
          'class' => 'SiteOrigin_Widget_Editor_Widget',
          'raw' => false,
          'grid' => 1,
          'cell' => 0,
          'id' => 2,
          'style' => array (
            'background_image_attachment' => 950,
            'background_display' => 'cover',
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => true,
          ),
        ),
      ),
      3 => array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h2 class="p1"><span class="s1">Hos FysioDanmark er du i de bedste hænder</span></h2><ul><li class="p1"><span class="s1">Du bliver tilbudt de bedste og nyeste behandlingsmetoder.</span></li><li class="p1"><span class="s1">Du er sikret behandling af veluddannede og fagligt dygtige medarbejdere.</span></li><li class="p1"><span class="s1">Du sikres samme høje behandling i hele Danmark på alle vores 60 klinikker.</span></li></ul><p class="p1"><span class="s1">En vigtig del af FysioDanmark-samarbejdet at dele viden og erfaring på tværs af klinikkerne. Dette gør, at du som patient hos en FysioDanmark-klinik altid kan være sikker på, at du modtager den bedst mulige behandling baseret på den nyeste faglige viden.</span></p>',
        'filter' => '1',
        'panels_info' => array (
          'class' => 'SiteOrigin_Widget_Editor_Widget',
          'raw' => false,
          'grid' => 1,
          'cell' => 1,
          'id' => 3,
          'style' => array (
            'padding' => '60px 0px 60px 60px',
            'background_display' => 'tile',
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      4 => array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h2>Fysioterapi</h2><p><strong>Hos FysioDanmark er du i de bedste hænder: </strong></p><ul><li>Du bliver tilbudt de bedste og nyeste behandlingsmetoder.</li><li>Du er sikret behandling af veluddannede og fagligt dygtige medarbejdere.</li><li>Du sikres samme høje behandling i hele Danmark på alle vores 60 klinikker.</li></ul><p>En vigtig del af FysioDanmark-samarbejdet at dele viden og erfaring på tværs af klinikkerne. Dette gør, at du som patient hos en FysioDanmark-klinik altid kan være sikker på, at du modtager den bedst mulige behandling baseret på den nyeste faglige viden.</p><ul class="button-list"><li><a class="btn btn-default btn-white" href="/fysioterapi/arme-albuer-skuldre/">Arme – albuer – skuldre</a></li><li><a class="btn btn-default btn-white" href="/fysioterapi/ben-knae-foedder/">Ben – knæ – fødder</a></li><li><a class="btn btn-default btn-white" href="/fysioterapi/hoved-nakke/">Hoved – Nakke</a></li><li><a class="btn btn-default btn-white" href="/fysioterapi/ryg-torso/">Ryg - Torso</a></li></ul>',
        'filter' => '1',
        'panels_info' => array (
          'class' => 'SiteOrigin_Widget_Editor_Widget',
          'raw' => false,
          'grid' => 2,
          'cell' => 0,
          'id' => 4,
          'style' => array (
            'padding' => '30px 30px 30px 0px',
            'background_display' => 'tile',
            'font_color' => '#ffffff',
            'parallax' => '',
            'center-content' => '',
            'border-radius' => '5px',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      5 => array (
        'style' => 'white',
        '_sow_form_id' => '568d038c189d6',
        'panels_info' => array (
          'class' => 'Fysiodanmark_Mand_Widget',
          'raw' => false,
          'grid' => 2,
          'cell' => 1,
          'id' => 5,
          'style' => array (
            'background_display' => 'tile',
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      6 => array (
        'title' => '',
        'template' => 'partials/loop-youtube.php',
        'posts' => 'post_type=videos&orderby=date&order=DESC&posts_per_page=&sticky=&additional=',
        'more' => false,
        'panels_info' => array (
          'class' => 'SiteOrigin_Panels_Widgets_PostLoop',
          'raw' => false,
          'grid' => 3,
          'cell' => 0,
          'id' => 6,
          'style' => array (
            'background_display' => 'tile',
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      7 => array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h3 style="text-align: center;"><i class="fa fa-facebook-square"></i> <span style="color: #ffffff;"><a style="color: #ffffff;" href="https://www.facebook.com/FysioDanmark-167393780037226/" target="_blank">Find os på Facebook</a></span></h3>',
        'filter' => '1',
        'panels_info' => array (
          'class' => 'SiteOrigin_Widget_Editor_Widget',
          'raw' => false,
          'grid' => 4,
          'cell' => 0,
          'id' => 7,
          'style' => array (
            'background_display' => 'tile',
            'font_color' => '#ffffff',
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
    ),
    'grids' => array (
      0 => array (
        'cells' => 2,
        'style' => array (
          'bottom_margin' => '0px',
          'row_stretch' => 'full',
          'background' => '#0a0a0a',
          'background_image_attachment' => 700,
          'background_display' => 'cover',
          'center-content' => true,
          'matchheight' => '',
          'fillheight' => true,
          'heightMin' => '500px',
          'heightMax' => '0px',
          'subtractheight' => '187px',
          'backgroundOpacity' => '50',
          'scrollToRowButton' => true,
          'scrollToRowColor' => '#ffffff',
        ),
      ),
      1 => array (
        'cells' => 2,
        'style' => array (
          'bottom_margin' => '0px',
          'row_stretch' => 'full',
          'background' => '#ffffff',
          'background_display' => 'tile',
          'center-content' => true,
          'matchheight' => true,
          'fillheight' => '',
          'scrollToRowButton' => '',
        ),
      ),
      2 => array (
        'cells' => 2,
        'style' => array (
          'padding' => '30px',
          'row_stretch' => 'full',
          'background' => '#71bf44',
          'background_display' => 'tile',
          'center-content' => '',
          'matchheight' => '',
          'fillheight' => '',
          'scrollToRowButton' => '',
        ),
      ),
      3 => array (
        'cells' => 1,
        'style' => array (
          'row_stretch' => 'full-stretched',
          'background_display' => 'tile',
          'center-content' => '',
          'matchheight' => '',
          'fillheight' => '',
          'scrollToRowButton' => '',
        ),
      ),
      4 => array (
        'cells' => 1,
        'style' => array (
          'bottom_margin' => '0px',
          'padding' => '30px',
          'row_stretch' => 'full',
          'background' => '#3b5998',
          'background_display' => 'tile',
          'center-content' => '',
          'matchheight' => '',
          'fillheight' => '',
          'scrollToRowButton' => '',
        ),
      ),
    ),
    'grid_cells' => array (
      0 => array (
        'grid' => 0,
        'weight' => 0.65257879656100004073238096680142916738986968994140625,
      ),
      1 => array (
        'grid' => 0,
        'weight' => 0.347421203439000014778770264456397853791713714599609375,
      ),
      2 => array (
        'grid' => 1,
        'weight' => 0.299999999999999988897769753748434595763683319091796875,
      ),
      3 => array (
        'grid' => 1,
        'weight' => 0.6999999999999999555910790149937383830547332763671875,
      ),
      4 => array (
        'grid' => 2,
        'weight' => 0.6584837545130000080462195910513401031494140625,
      ),
      5 => array (
        'grid' => 2,
        'weight' => 0.3415162454869999919537804089486598968505859375,
      ),
      6 => array (
        'grid' => 3,
        'weight' => 1,
      ),
      7 => array (
        'grid' => 4,
        'weight' => 1,
      ),
    ),
  );

  return $layouts;

}
