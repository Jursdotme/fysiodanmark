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
		            'brand' => __( 'Brand', 'widget-form-fields-text-domain' ),
		            'white' => __( 'White', 'widget-form-fields-text-domain' ),
		        )
		    )
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
