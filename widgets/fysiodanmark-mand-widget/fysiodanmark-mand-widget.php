<?php
/*
Widget Name: Fysiodanmark Mand
Description: Vis klikbar figur med links til undersider.
Author: Inzite
Author URI: http://inzite.dk
*/

class Fysiodanmark_Mand_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'fysiodanmark-mand-widget',
			__('Fysiodanmark Mand', 'fysiodanmark-mand-widget-text-domain'),
			array(
				'description' => __('Vis klikbar figur med links til undersider.', 'fysiodanmark-mand-widget-text-domain'),
			),
			array(
			),
			array(
				'style' => array(
		        'type' => 'select',
		        'label' => __( 'Choose style', 'widget-form-fields-text-domain' ),
		        'default' => 'brand',
		        'options' => array(
		            'brand' => __( 'Grøn', 'widget-form-fields-text-domain' ),
		            'white' => __( 'Hvid', 'widget-form-fields-text-domain' ),
								'old' => __( '2013 version', 'widget-form-fields-text-domain' ),
		        )
		    ),
				'hoved_nakke_link' => array(
		        'type' => 'link',
		        'label' => __('Hoved / nakke link', 'widget-form-fields-text-domain'),
		        'default' => '/fysioterapi/hoved-nakke/'
		    ),
				'arme_albuer_skuldre_link' => array(
		        'type' => 'link',
		        'label' => __('Arme / Albuer / Skuldre link', 'widget-form-fields-text-domain'),
		        'default' => '/fysioterapi/arme-albuer-skuldre/'
		    ),
				'ryg_torso_link' => array(
		        'type' => 'link',
		        'label' => __('Ryg / Torso link', 'widget-form-fields-text-domain'),
		        'default' => '/fysioterapi/ryg-torso/'
		    ),
				'ben_knae_foedder_link' => array(
		        'type' => 'link',
		        'label' => __('Ben / Knæ / Fødder link', 'widget-form-fields-text-domain'),
		        'default' => '/fysioterapi/ben-knae-foedder/'
		    ),
			),
			get_template_directory_uri().'/widgets/fysiodanmark-mand-widget/'
		);
	}
	function get_template_name($instance) {
		return 'fysiodanmark-mand-widget-template';
	}
	function get_style_name($instance) {
		return 'fysiodanmark-mand-widget-style';
	}
}
siteorigin_widget_register('fysiodanmark-mand-widget', __FILE__, 'Fysiodanmark_Mand_Widget');
