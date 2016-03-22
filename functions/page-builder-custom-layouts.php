<?php
function mytheme_prebuilt_layouts($layouts){
  $layouts['produktoversigt'] = array (
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
  $layouts['medarbejder-oversigt'] = array (
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
  $layouts['forside-klinik'] = array (
    'name' => __('Forside (Klinik)', 'vantage'),    // Required
    'description' => __('Forside for fysiodanmark kliniksider.', 'vantage'),    // Optional
    'widgets' =>
    array (
      0 =>
      array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h1 class="p1 display-1">Vi hjælper dig til dine mål</h1><h3 class="p1">Praeterea iter est quasdam res quas ex communi. Qui ipsorum lingua Celtae, nostra Galli appellantur. Integer legentibus erat a ante historiarum dapibus.</h3>',
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
            'font_color' => '#ffffff',
            'parallax' => '',
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
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      2 =>
      array (
        'type' => 'visual',
        'title' => '',
        'text' => '',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 1,
          'cell' => 0,
          'id' => 2,
          'style' =>
          array (
            'background_image_attachment' => 950,
            'background_display' => 'cover',
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => true,
          ),
        ),
      ),
      3 =>
      array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h2 class="p1"><span class="s1">Hos FysioDanmark er du i de bedste hænder</span></h2><ul><li class="p1"><span class="s1">Du bliver tilbudt de bedste og nyeste behandlingsmetoder.</span></li><li class="p1"><span class="s1">Du er sikret behandling af veluddannede og fagligt dygtige medarbejdere.</span></li><li class="p1"><span class="s1">Du sikres samme høje behandling i hele Danmark på alle vores 60 klinikker.</span></li></ul><p class="p1"><span class="s1">En vigtig del af FysioDanmark-samarbejdet at dele viden og erfaring på tværs af klinikkerne. Dette gør, at du som patient hos en FysioDanmark-klinik altid kan være sikker på, at du modtager den bedst mulige behandling baseret på den nyeste faglige viden.</span></p>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 1,
          'cell' => 1,
          'id' => 3,
          'style' =>
          array (
            'padding' => '60px 0px 60px 60px',
            'background_display' => 'tile',
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      4 =>
      array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h2>Fysioterapi</h2><p><strong>Hos FysioDanmark er du i de bedste hænder: </strong></p><ul><li>Du bliver tilbudt de bedste og nyeste behandlingsmetoder.</li><li>Du er sikret behandling af veluddannede og fagligt dygtige medarbejdere.</li><li>Du sikres samme høje behandling i hele Danmark på alle vores 60 klinikker.</li></ul><p>En vigtig del af FysioDanmark-samarbejdet at dele viden og erfaring på tværs af klinikkerne. Dette gør, at du som patient hos en FysioDanmark-klinik altid kan være sikker på, at du modtager den bedst mulige behandling baseret på den nyeste faglige viden.</p><ul class="button-list"><li><a class="btn btn-default btn-white" href="/fysioterapi/arme-albuer-skuldre/">Arme – albuer – skuldre</a></li><li><a class="btn btn-default btn-white" href="/fysioterapi/ben-knae-foedder/">Ben – knæ – fødder</a></li><li><a class="btn btn-default btn-white" href="/fysioterapi/hoved-nakke/">Hoved – Nakke</a></li><li><a class="btn btn-default btn-white" href="/fysioterapi/ryg-torso/">Ryg - Torso</a></li></ul>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 2,
          'cell' => 0,
          'id' => 4,
          'style' =>
          array (
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
            'parallax' => '',
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
        'panels_info' =>
        array (
          'class' => 'SiteOrigin_Panels_Widgets_PostLoop',
          'grid' => 3,
          'cell' => 0,
          'id' => 6,
          'style' =>
          array (
            'padding' => '30px',
            'background' => '#ffffff',
            'background_image_attachment' => false,
            'background_display' => 'tile',
            'parallax' => '',
            'center-content' => '',
            'border-radius' => '2px',
            'remove-outer-margin' => '',
            'box-shadow' => '2dp',
          ),
        ),
        'more' => false,
      ),
      7 =>
      array (
        'type' => 'visual',
        'title' => '',
        'text' => '<p><a class="btn btn-default btn-brand" href="/nyheder">Se flere nyheder</a></p>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 3,
          'cell' => 0,
          'id' => 7,
          'style' =>
          array (
            'background_display' => 'tile',
            'parallax' => '',
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
            'parallax' => '',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      9 =>
      array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h3 style="text-align: center;"><i class="fa fa-facebook-square"></i> <span style="color: #ffffff;"><a style="color: #ffffff;" href="https://www.facebook.com/FysioDanmark-167393780037226/" target="_blank">Find os på Facebook</a></span></h3>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 4,
          'cell' => 0,
          'id' => 9,
          'style' =>
          array (
            'background_display' => 'tile',
            'font_color' => '#ffffff',
            'parallax' => '',
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
          'heightMin' => '500px',
          'heightMax' => '0px',
          'subtractheight' => '187px',
          'backgroundOpacity' => '50',
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
          'row_stretch' => 'full',
          'background' => '#ffffff',
          'background_display' => 'tile',
          'center-content' => true,
          'matchheight' => true,
          'fillheight' => '',
          'scrollToRowButton' => '',
        ),
      ),
      2 =>
      array (
        'cells' => 2,
        'style' =>
        array (
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
      3 =>
      array (
        'cells' => 2,
        'style' =>
        array (
          'background_display' => 'tile',
          'center-content' => '',
          'matchheight' => '',
          'fillheight' => '',
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


  $layouts['forside-hovedside'] = array (
    'name' => __('Forside (Hovedside)', 'vantage'),    // Required
    'description' => __('Forside for fysiodanmark hovedsiden.', 'vantage'),    // Optional
    'widgets' => array (
      0 => array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h1 class="p1 display-1">Find din lokale FysioDanmark klinik</h1><h3 class="p1">54 klinikker med kvalitetsyddelser indenfor fysioterapi og sund livsstil med høj kundetilfredshed.</h3>',
        'filter' => '1',
        'panels_info' => array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
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
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
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
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
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
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
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
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
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

  $layouts['klinik 2013'] = array (
    'name' => __('Forside (Klinik 2013)', 'vantage'),    // Required
    'description' => __('Forside for fysiodanmark kliniksider (2013).', 'vantage'),    // Optional
    'widgets' =>
    array (
      0 =>
      array (
        'frames' =>
        array (
          0 =>
          array (
            'content' => '<h1>Velkommen til Randers Fysioterapi</h1><p>Stor moderne klinik med eget træningscenter.</p><p>Dygtige Fysioterapeuter, Grundighed, Information, Indlevelse, Respekt, Tryghed, Humor</p><p>[buttons]</p>',
            'content_selected_editor' => 'tmce',
            'buttons' =>
            array (
              0 =>
              array (
                'button' =>
                array (
                  'text' => 'Læs mere',
                  'url' => '#',
                  'button_icon' =>
                  array (
                    'icon_selected' => '',
                    'icon_color' => false,
                    'icon' => 0,
                    'so_field_container_state' => 'closed',
                  ),
                  'design' =>
                  array (
                    'align' => 'center',
                    'theme' => 'flat',
                    'button_color' => '#71bf44',
                    'text_color' => '#ffffff',
                    'hover' => true,
                    'font_size' => '1',
                    'rounding' => '0.25',
                    'padding' => '1',
                    'so_field_container_state' => 'closed',
                  ),
                  'attributes' =>
                  array (
                    'id' => '',
                    'title' => '',
                    'onclick' => '',
                    'so_field_container_state' => 'closed',
                  ),
                  'new_window' => false,
                ),
              ),
            ),
            'background' =>
            array (
              'image' => 1075,
              'image_fallback' => '',
              'opacity' => 50,
              'color' => false,
              'url' => '',
              'so_field_container_state' => 'open',
              'new_window' => false,
              'videos' =>
              array (
              ),
            ),
          ),
        ),
        'controls' =>
        array (
          'speed' => 800,
          'timeout' => 8000,
          'nav_color_hex' => '#FFFFFF',
          'nav_style' => 'thin',
          'nav_size' => 25,
          'so_field_container_state' => 'closed',
        ),
        'design' =>
        array (
          'height' => '414px',
          'height_unit' => 'px',
          'padding' => '60px',
          'padding_unit' => 'px',
          'extra_top_padding' => '0px',
          'extra_top_padding_unit' => 'px',
          'padding_sides' => '30px',
          'padding_sides_unit' => 'px',
          'width' => '1088px',
          'width_unit' => 'px',
          'heading_font' => '',
          'heading_size' => '38px',
          'heading_size_unit' => 'px',
          'heading_shadow' => 50,
          'text_size' => '16px',
          'text_size_unit' => 'px',
          'so_field_container_state' => 'open',
        ),
        '_sow_form_id' => '56cef65b6a1d3',
        'panels_info' =>
        array (
          'class' => 'SiteOrigin_Widget_Hero_Widget',
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
        'type' => 'visual',
        'title' => '',
        'text' => '<h4 style="text-align: center;">Åben for behandling<br />Man-torsdag: 7:30 – 18:30<br />Fredag: 7:30 – 16:00</h4>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 1,
          'cell' => 0,
          'id' => 1,
          'style' =>
          array (
            'padding' => '15px',
            'background' => '#71bf44',
            'background_display' => 'tile',
            'font_color' => '#ffffff',
            'link_color' => '#ffffff',
            'center-content' => true,
            'border-radius' => '6px',
            'remove-outer-margin' => '',
            'box-shadow' => '2dp',
          ),
        ),
      ),
      2 =>
      array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h4 style="text-align: center;">Niels Brocks Gade 12, 4.<br />8900 Randers C<br />Tlf 86 42 90 61</h4>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 1,
          'cell' => 1,
          'id' => 2,
          'style' =>
          array (
            'padding' => '15px',
            'background' => '#71bf44',
            'background_display' => 'tile',
            'font_color' => '#ffffff',
            'link_color' => '#ffffff',
            'center-content' => true,
            'border-radius' => '6px',
            'remove-outer-margin' => '',
            'box-shadow' => '2dp',
          ),
        ),
      ),
      3 =>
      array (
        'type' => 'visual',
        'title' => '',
        'text' => '<h2 style="text-align: center;"><a href="mailto:admin@randers-fys.dk">Send os en mail</a> </h2>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 1,
          'cell' => 2,
          'id' => 3,
          'style' =>
          array (
            'padding' => '15px',
            'background' => '#71bf44',
            'background_display' => 'tile',
            'font_color' => '#ffffff',
            'link_color' => '#ffffff',
            'center-content' => true,
            'border-radius' => '6px',
            'remove-outer-margin' => '',
            'box-shadow' => '2dp',
          ),
        ),
      ),
      4 =>
      array (
        'header' => 'Hello world!',
        'header_link' => '#',
        'content' => 'Excepteur sint obcaecat cupiditat non proident culpa.',
        'content_selected_editor' => 'html',
        'icon' => 699,
        'icon_fallback' => '',
        'icon_size' => 'auto',
        'pos_h' => 'right',
        'pos_v' => 'top',
        '_sow_form_id' => '56e95516262b9',
        'panels_info' =>
        array (
          'class' => 'Icon_Box_Widget',
          'grid' => 2,
          'cell' => 0,
          'id' => 4,
          'style' =>
          array (
            'background_image_attachment' => false,
            'background_display' => 'tile',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      5 =>
      array (
        'header' => 'Hello world!',
        'header_link' => '#',
        'content' => '',
        'content_selected_editor' => 'html',
        'icon' => 849,
        'icon_fallback' => '',
        'icon_size' => 'cover',
        'pos_h' => 'left',
        'pos_v' => 'center',
        '_sow_form_id' => '56e967b635c4c',
        'panels_info' =>
        array (
          'class' => 'Icon_Box_Widget',
          'grid' => 2,
          'cell' => 1,
          'id' => 5,
          'style' =>
          array (
            'background_image_attachment' => false,
            'background_display' => 'tile',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      6 =>
      array (
        'header' => 'Hello world!',
        'header_link' => '#',
        'content' => '',
        'content_selected_editor' => 'html',
        'icon' => 950,
        'icon_fallback' => '',
        'icon_size' => 'cover',
        'pos_h' => 'center',
        'pos_v' => 'top',
        '_sow_form_id' => '56e959403e187',
        'panels_info' =>
        array (
          'class' => 'Icon_Box_Widget',
          'grid' => 2,
          'cell' => 2,
          'id' => 6,
          'style' =>
          array (
            'background_image_attachment' => false,
            'background_display' => 'tile',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      7 =>
      array (
        'type' => 'visual',
        'title' => 'Samarbejdspartnere',
        'text' => '<p>Vi har flere dygtige samarbejdspartnere tilknyttet.</p><ul><li>Psykologer</li><li>Fodterapeuter</li><li>Zoneterapeut</li><li>Kostvejleder &amp; diætist</li><li>Psykoterapeut og traumebehandling</li><li>Par-, familie- , og psykomotorisk terapeut</li></ul>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 3,
          'cell' => 0,
          'id' => 7,
          'style' =>
          array (
            'class' => 'frontpage-box',
            'background_display' => 'tile',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      8 =>
      array (
        'type' => 'html',
        'title' => 'FysioDanmark Stevnstrup',
        'text' => '<img class="aligncenter wp-image-1051" src="http://fysiodanmark-2016.dev/wp-content/uploads/2016/01/stevnstrup-FYS-logo-Centreret.png" alt="stevnstrup-FYS-logo-Centreret" width="181" height="129" />
    <p style="text-align: center;">Stevnstrup Fysioterapi er en hyggelig klinik beliggende i Handicapcenter Kronjylland.</p>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 3,
          'cell' => 1,
          'id' => 8,
          'style' =>
          array (
            'class' => 'frontpage-box',
            'background_display' => 'tile',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      9 =>
      array (
        'type' => 'visual',
        'title' => 'FysioDanmark Gjerlev',
        'text' => '<p><img class="aligncenter wp-image-1052" src="http://fysiodanmark-2016.dev/wp-content/uploads/2016/01/gjerlev-FYS-logo-Centreret.png" alt="gjerlev-FYS-logo-Centreret" width="113" height="129" /></p><p style="text-align: center;">Moderne klinik med hyggelig hold-træningssal</p>',
        'filter' => '1',
        'panels_info' =>
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 3,
          'cell' => 2,
          'id' => 9,
          'style' =>
          array (
            'class' => 'frontpage-box',
            'background_display' => 'tile',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      10 =>
      array (
        'title' => '',
        'text' => '<p>FysioDanmark Randers er en stor moderne fysioterapi klinik kombineret med et veludstyret test- og træningscenter.</p><p>Vores i alt 1400 kvm gør os til både områdets største og bedst udstyrede klinik.</p><p>Vores mål er at give den bedste kundeoplevelse hver gang – via god service, grundighed og nærvær.</p>',
        'text_selected_editor' => 'tinymce',
        'autop' => true,
        '_sow_form_id' => '56e93c7e4bbb6',
        'panels_info' =>
        array (
          'class' => 'SiteOrigin_Widget_Editor_Widget',
          'raw' => false,
          'grid' => 4,
          'cell' => 0,
          'id' => 10,
          'style' =>
          array (
            'background_display' => 'tile',
            'center-content' => '',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      11 =>
      array (
        'title' => 'Nyheder',
        'template' => 'partials/loop.php',
        'posts' => 'post_type=post&posts_per_page=&order=DESC&orderby=date&sticky=&additional=',
        'more' => false,
        'panels_info' =>
        array (
          'class' => 'SiteOrigin_Panels_Widgets_PostLoop',
          'raw' => false,
          'grid' => 4,
          'cell' => 1,
          'id' => 11,
          'style' =>
          array (
            'padding' => '15px',
            'background' => '#ffffff',
            'background_display' => 'tile',
            'center-content' => '',
            'border-radius' => '6px',
            'remove-outer-margin' => '',
          ),
        ),
      ),
      12 =>
      array (
        'title' => '',
        'template' => 'partials/loop-youtube.php',
        'posts' => 'post_type=videos&orderby=date&order=DESC&posts_per_page=&sticky=&additional=',
        'more' => false,
        'panels_info' =>
        array (
          'class' => 'SiteOrigin_Panels_Widgets_PostLoop',
          'raw' => false,
          'grid' => 5,
          'cell' => 0,
          'id' => 12,
          'style' =>
          array (
            'padding' => '0px 0px -30px 0px',
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
          'row_css' => 'border: 5px solid white;
    border-radius: 5px;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);',
          'background' => '#ffffff',
          'background_display' => 'tile',
          'center-content' => '',
          'matchheight' => '',
          'fillheight' => '',
          'backgroundGradient' => '',
          'gradientdeg' => '270',
          'scrollToRowButton' => '',
        ),
      ),
      1 =>
      array (
        'cells' => 3,
        'style' =>
        array (
          'background_display' => 'tile',
          'center-content' => '',
          'matchheight' => true,
          'fillheight' => '',
          'backgroundGradient' => '',
          'gradientdeg' => '270',
          'scrollToRowButton' => '',
        ),
      ),
      2 =>
      array (
        'cells' => 3,
        'style' =>
        array (
          'padding' => '30px 0px 0px 0px',
          'background_display' => 'tile',
          'center-content' => '',
          'matchheight' => true,
          'fillheight' => '',
          'backgroundGradient' => '',
          'gradientdeg' => '270',
          'scrollToRowButton' => '',
        ),
      ),
      3 =>
      array (
        'cells' => 3,
        'style' =>
        array (
          'padding' => '30px 0px 0px 0px',
          'background_display' => 'tile',
          'center-content' => '',
          'matchheight' => true,
          'fillheight' => '',
          'backgroundGradient' => '',
          'gradientdeg' => '270',
          'scrollToRowButton' => '',
        ),
      ),
      4 =>
      array (
        'cells' => 2,
        'style' =>
        array (
          'background_display' => 'tile',
          'center-content' => '',
          'matchheight' => '',
          'fillheight' => '',
          'backgroundGradient' => '',
          'gradientdeg' => '270',
          'scrollToRowButton' => '',
        ),
      ),
      5 =>
      array (
        'cells' => 1,
        'style' =>
        array (
          'row_css' => 'Border-radius: 6px;',
          'bottom_margin' => '0px',
          'padding' => '30px 30px 12px 30px',
          'background' => '#ffffff',
          'background_display' => 'tile',
          'center-content' => '',
          'matchheight' => '',
          'fillheight' => '',
          'backgroundGradient' => '',
          'gradientdeg' => '270',
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
        'weight' => 0.333333333333333314829616256247390992939472198486328125,
      ),
      2 =>
      array (
        'grid' => 1,
        'weight' => 0.333333333333333314829616256247390992939472198486328125,
      ),
      3 =>
      array (
        'grid' => 1,
        'weight' => 0.333333333333333314829616256247390992939472198486328125,
      ),
      4 =>
      array (
        'grid' => 2,
        'weight' => 0.333333333333333314829616256247390992939472198486328125,
      ),
      5 =>
      array (
        'grid' => 2,
        'weight' => 0.333333333333333314829616256247390992939472198486328125,
      ),
      6 =>
      array (
        'grid' => 2,
        'weight' => 0.333333333333333314829616256247390992939472198486328125,
      ),
      7 =>
      array (
        'grid' => 3,
        'weight' => 0.333333333333333314829616256247390992939472198486328125,
      ),
      8 =>
      array (
        'grid' => 3,
        'weight' => 0.333333333333333314829616256247390992939472198486328125,
      ),
      9 =>
      array (
        'grid' => 3,
        'weight' => 0.333333333333333314829616256247390992939472198486328125,
      ),
      10 =>
      array (
        'grid' => 4,
        'weight' => 0.6666666666670000296335274470038712024688720703125,
      ),
      11 =>
      array (
        'grid' => 4,
        'weight' => 0.333333333333000025877623784253955818712711334228515625,
      ),
      12 =>
      array (
        'grid' => 5,
        'weight' => 1,
      ),
    ),
  );

  return $layouts;

}
add_filter('siteorigin_panels_prebuilt_layouts','mytheme_prebuilt_layouts');
