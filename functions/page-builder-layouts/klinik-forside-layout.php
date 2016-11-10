<?php
function klinik_forside_layout($layouts) {
  $layouts['forside-klinik'] = array (
    'screenshot' => get_template_directory_uri() . '/img/template-screeshots/forside-klinik.png',
    'name' => __('Forside (Klinik)', 'vantage'),    // Required
    'description' => __('Forside for fysiodanmark kliniksider.', 'vantage'),    // Optional
    'widgets' =>
  array (
    0 =>
    array (
      'title' => '',
      'text' => '<h1 class="p1 display-1">Vi hjælper dig til dine mål</h1>
<h3 class="p1">Praeterea iter est quasdam res quas ex communi. Qui ipsorum lingua Celtae, nostra Galli appellantur. Integer legentibus erat a ante historiarum dapibus.</h3>',
      'text_selected_editor' => 'html',
      'autop' => true,
      '_sow_form_id' => '572059cd60507',
      'panels_info' =>
      array (
        'class' => 'SiteOrigin_Widget_Editor_Widget',
        'raw' => false,
        'grid' => 0,
        'cell' => 0,
        'id' => 0,
        'style' =>
        array (
          'background_display' => 'tile',
          'font_color' => '#ffffff',
          'center-content' => '',
          'remove-outer-margin' => '',
        ),
      ),
    ),
    1 =>
    array (
      'panels_data' =>
      array (
        'widgets' =>
        array (
          0 =>
          array (
            'header_text' => 'Sund livsstil',
            'label_text' => 'Sund livsstil handler om at skabe balance i dit liv med hensyn til din kost, din måde at bruge kroppen på – og det du oplever.',
            'link' => '#',
            'text_placement' => 'text-below-image',
            'image' => '872',
            '_sow_form_id' => '56cece56d468e',
            'panels_info' =>
            array (
              'class' => 'Secondthought_feature_widget',
              'raw' => false,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' =>
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'border-radius' => '',
                'background_image_attachment' => '0',
                'box-shadow' => '',
                'background_display' => 'tile',
                'backgroundOpacity' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 =>
          array (
            'header_text' => 'Fysioterapi',
            'label_text' => 'Hos FysioDanmark deler vi viden og erfaring på tværs af klinikkerne. Dette gør, at modtager den bedst behandling.',
            'link' => '#',
            'text_placement' => 'text-below-image',
            'image' => '872',
            '_sow_form_id' => '56ceda6571d6f',
            'panels_info' =>
            array (
              'class' => 'Secondthought_feature_widget',
              'raw' => true,
              'grid' => 0,
              'cell' => 1,
              'id' => 1,
              'style' =>
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'border-radius' => '',
                'background_image_attachment' => '0',
                'box-shadow' => '',
                'background_display' => 'tile',
                'backgroundOpacity' => '',
                'font_color' => '',
              ),
            ),
          ),
          2 =>
          array (
            'header_text' => 'Om os',
            'label_text' => 'Mød vores erfarne team af fysioterapeuter, ergoterapeuter og træningsvejledere.',
            'link' => '#',
            'text_placement' => 'text-below-image',
            'image' => '872',
            '_sow_form_id' => '56cedabacb757',
            'panels_info' =>
            array (
              'class' => 'Secondthought_feature_widget',
              'raw' => true,
              'grid' => 0,
              'cell' => 2,
              'id' => 2,
              'style' =>
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'border-radius' => '',
                'background_image_attachment' => '0',
                'box-shadow' => '',
                'background_display' => 'tile',
                'backgroundOpacity' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' =>
        array (
          0 =>
          array (
            'cells' => 3,
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
            'weight' => 0.333333333333000025877623784253955818712711334228515625,
          ),
          1 =>
          array (
            'grid' => 0,
            'weight' => 0.333333333333000025877623784253955818712711334228515625,
          ),
          2 =>
          array (
            'grid' => 0,
            'weight' => 0.333333333333000025877623784253955818712711334228515625,
          ),
        ),
      ),
      'builder_id' => '56cedac8d0af8',
      'panels_info' =>
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'raw' => false,
        'grid' => 0,
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
    2 =>
    array (
      'title' => '',
      'text' => '',
      'text_selected_editor' => 'html',
      'autop' => true,
      '_sow_form_id' => '57205a0b1efdc',
      'panels_info' =>
      array (
        'class' => 'SiteOrigin_Widget_Editor_Widget',
        'raw' => false,
        'grid' => 1,
        'cell' => 0,
        'id' => 2,
        'style' =>
        array (
          'background_image_attachment' => 970,
          'background_display' => 'cover',
          'center-content' => '',
          'remove-outer-margin' => true,
        ),
      ),
    ),
    3 =>
    array (
      'title' => '',
      'text' => '<h2 class="p1"><span class="s1">Hos FysioDanmark er du i de bedste hænder</span></h2>
<ul>
 	<li class="p1"><span class="s1">Du bliver tilbudt de bedste og nyeste behandlingsmetoder.</span></li>
 	<li class="p1"><span class="s1">Du er sikret behandling af veluddannede og fagligt dygtige medarbejdere.</span></li>
 	<li class="p1"><span class="s1">Du sikres samme høje behandling i hele Danmark på alle vores 60 klinikker.</span></li>
</ul>
<p class="p1"><span class="s1">En vigtig del af FysioDanmark-samarbejdet at dele viden og erfaring på tværs af klinikkerne. Dette gør, at du som patient hos en FysioDanmark-klinik altid kan være sikker på, at du modtager den bedst mulige behandling baseret på den nyeste faglige viden.</span></p>',
      'text_selected_editor' => 'html',
      'autop' => true,
      '_sow_form_id' => '57205a8629dad',
      'panels_info' =>
      array (
        'class' => 'SiteOrigin_Widget_Editor_Widget',
        'raw' => false,
        'grid' => 1,
        'cell' => 1,
        'id' => 3,
        'style' =>
        array (
          'widget_css' => 'min-height: 375px;',
          'padding' => '30px 0px',
          'background_display' => 'tile',
          'center-content' => true,
          'remove-outer-margin' => '',
        ),
      ),
    ),
    4 =>
    array (
      'title' => '',
      'text' => '<h2>Fysioterapi</h2>
<strong>Hos FysioDanmark er du i de bedste hænder: </strong>
<ul>
 	<li>Du bliver tilbudt de bedste og nyeste behandlingsmetoder.</li>
 	<li>Du er sikret behandling af veluddannede og fagligt dygtige medarbejdere.</li>
 	<li>Du sikres samme høje behandling i hele Danmark på alle vores 60 klinikker.</li>
</ul>
En vigtig del af FysioDanmark-samarbejdet at dele viden og erfaring på tværs af klinikkerne. Dette gør, at du som patient hos en FysioDanmark-klinik altid kan være sikker på, at du modtager den bedst mulige behandling baseret på den nyeste faglige viden.
<ul class="button-list">
 	<li><a class="btn btn-default btn-white" href="/fysioterapi/arme-albuer-skuldre/">Arme – albuer – skuldre</a></li>
 	<li><a class="btn btn-default btn-white" href="/fysioterapi/ben-knae-foedder/">Ben – knæ – fødder</a></li>
 	<li><a class="btn btn-default btn-white" href="/fysioterapi/hoved-nakke/">Hoved – Nakke</a></li>
 	<li><a class="btn btn-default btn-white" href="/fysioterapi/ryg-torso/">Ryg - Torso</a></li>
</ul>',
      'text_selected_editor' => 'html',
      'autop' => true,
      '_sow_form_id' => '57205d757ffa3',
      'panels_info' =>
      array (
        'class' => 'SiteOrigin_Widget_Editor_Widget',
        'grid' => 2,
        'cell' => 0,
        'id' => 4,
        'style' =>
        array (
          'padding' => '30px 0px',
          'background_image_attachment' => false,
          'background_display' => 'tile',
          'font_color' => '#ffffff',
          'center-content' => true,
          'remove-outer-margin' => '',
        ),
      ),
    ),
    5 =>
    array (
      'style' => 'white',
      '_sow_form_id' => '568d038c189d6',
      'panels_info' =>
      array (
        'class' => 'Fysiodanmark_Mand_Widget',
        'raw' => false,
        'grid' => 2,
        'cell' => 1,
        'id' => 5,
        'style' =>
        array (
          'background_display' => 'tile',
          'center-content' => '',
          'remove-outer-margin' => '',
        ),
      ),
    ),
    6 =>
    array (
      'title' => 'Nyheder',
      'template' => 'partials/loop.php',
      'posts' => 'post_type=post&orderby=date&order=DESC&posts_per_page=5&sticky=&additional=',
      'more' => false,
      'panels_info' =>
      array (
        'class' => 'SiteOrigin_Panels_Widgets_PostLoop',
        'raw' => false,
        'grid' => 3,
        'cell' => 0,
        'id' => 6,
        'style' =>
        array (
          'padding' => '30px',
          'background' => '#ffffff',
          'background_display' => 'tile',
          'center-content' => '',
          'border-radius' => '2px',
          'remove-outer-margin' => '',
          'box-shadow' => '2dp',
        ),
      ),
    ),
    7 =>
    array (
      'title' => '',
      'text' => '<a class="btn btn-default btn-brand" href="/nyheder">Se flere nyheder</a>',
      'text_selected_editor' => 'html',
      'autop' => true,
      '_sow_form_id' => '57205da720335',
      'panels_info' =>
      array (
        'class' => 'SiteOrigin_Widget_Editor_Widget',
        'grid' => 3,
        'cell' => 0,
        'id' => 7,
        'style' =>
        array (
          'background_image_attachment' => false,
          'background_display' => 'tile',
          'center-content' => '',
          'remove-outer-margin' => '',
        ),
      ),
    ),
    8 =>
    array (
      'title' => '',
      'template' => 'partials/loop-youtube.php',
      'posts' => 'post_type=videos&orderby=date&order=DESC&posts_per_page=&sticky=&additional=',
      'more' => false,
      'panels_info' =>
      array (
        'class' => 'SiteOrigin_Panels_Widgets_PostLoop',
        'raw' => false,
        'grid' => 3,
        'cell' => 1,
        'id' => 8,
        'style' =>
        array (
          'background_display' => 'tile',
          'center-content' => '',
          'remove-outer-margin' => '',
        ),
      ),
    ),
    9 =>
    array (
      'title' => '',
      'text' => '<h3 style="text-align: center;"><i class="fa fa-facebook-square"></i> <span style="color: #ffffff;"><a style="color: #ffffff;" href="https://www.facebook.com/FysioDanmark-167393780037226/" target="_blank">Find os på Facebook</a></span></h3>',
      'text_selected_editor' => 'tmce',
      'autop' => true,
      '_sow_form_id' => '57205dc6d837d',
      'panels_info' =>
      array (
        'class' => 'SiteOrigin_Widget_Editor_Widget',
        'grid' => 4,
        'cell' => 0,
        'id' => 9,
        'style' =>
        array (
          'background_image_attachment' => false,
          'background_display' => 'tile',
          'font_color' => '#ffffff',
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
        'bottom_margin' => '0px',
        'row_stretch' => 'full',
        'background' => '#0a0a0a',
        'background_image_attachment' => 700,
        'background_display' => 'cover',
        'center-content' => true,
        'matchheight' => '',
        'fillheight' => true,
        'heightMin' => '500',
        'heightMax' => '0',
        'subtractheaderheight' => true,
        'backgroundOpacity' => '50',
        'backgroundGradient' => '',
        'gradientdeg' => '270',
        'scrollToRowButton' => true,
        'scrollToRowColor' => '#ffffff',
      ),
    ),
    1 =>
    array (
      'cells' => 2,
      'style' =>
      array (
        'bottom_margin' => '0px',
        'gutter' => '60px',
        'row_stretch' => 'full',
        'background' => '#ffffff',
        'background_display' => 'tile',
        'center-content' => '',
        'matchheight' => true,
        'fillheight' => '',
        'subtractheaderheight' => '',
        'backgroundGradient' => '',
        'gradientdeg' => '270',
        'scrollToRowButton' => '',
      ),
    ),
    2 =>
    array (
      'cells' => 2,
      'style' =>
      array (
        'row_stretch' => 'full',
        'background' => '#71bf44',
        'background_display' => 'tile',
        'center-content' => '',
        'matchheight' => '',
        'fillheight' => '',
        'subtractheaderheight' => '',
        'backgroundGradient' => '',
        'gradientdeg' => '270',
        'scrollToRowButton' => '',
      ),
    ),
    3 =>
    array (
      'cells' => 2,
      'style' =>
      array (
        'background_display' => 'tile',
        'center-content' => '',
        'matchheight' => '',
        'fillheight' => '',
        'subtractheaderheight' => '',
        'backgroundGradient' => '',
        'scrollToRowButton' => '',
      ),
    ),
    4 =>
    array (
      'cells' => 1,
      'style' =>
      array (
        'bottom_margin' => '0px',
        'padding' => '30px',
        'row_stretch' => 'full',
        'background' => '#3b5998',
        'background_display' => 'tile',
        'center-content' => '',
        'matchheight' => '',
        'fillheight' => '',
        'subtractheaderheight' => '',
        'backgroundGradient' => '',
        'scrollToRowButton' => '',
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
      'weight' => 0.299999999999999988897769753748434595763683319091796875,
    ),
    2 =>
    array (
      'grid' => 1,
      'weight' => 0.6999999999999999555910790149937383830547332763671875,
    ),
    3 =>
    array (
      'grid' => 2,
      'weight' => 0.6584837545130000080462195910513401031494140625,
    ),
    4 =>
    array (
      'grid' => 2,
      'weight' => 0.3415162454869999919537804089486598968505859375,
    ),
    5 =>
    array (
      'grid' => 3,
      'weight' => 0.61803399209200005071096484243753366172313690185546875,
    ),
    6 =>
    array (
      'grid' => 3,
      'weight' => 0.381966007908000004800186388820293359458446502685546875,
    ),
    7 =>
    array (
      'grid' => 4,
      'weight' => 1,
    ),
  ),
  );

  return $layouts;

}
