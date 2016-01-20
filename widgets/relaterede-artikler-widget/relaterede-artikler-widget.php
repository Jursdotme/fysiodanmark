<?php
/*
Widget Name: Relaterede Artikler
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

class Relaterede_Artikler_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'relaterede-artikler-widget',
			__('Relaterede Artikler', 'relaterede-artikler-widget-text-domain'),
			array(
				'description' => __('Boks med links til relaterede artiker/sider.', 'relaterede-artikler-widget-text-domain'),
			),
			array(
			),
			array(
				'overskrift' => array(
					'type' => 'text',
					'label' => __('Overskrift', 'siteorigin-widgets'),
					'default' => ''
				),
				'background_image' => array(
		        'type' => 'media',
		        'label' => __( 'Baggrundsbillede', 'widget-form-fields-text-domain' ),
		        'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
		        'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
		        'library' => 'image',
		        'fallback' => true
		    ),
				'some_posts' => array(
		        'type' => 'posts',
		        'label' => __('Links', 'widget-form-fields-text-domain'),
		    )
			),
			get_template_directory_uri().'/widgets/relaterede-artikler-widget/'
		);
	}
	function get_template_name($instance) {
		return 'relaterede-artikler-widget-template';
	}
	function get_style_name($instance) {
		return 'relaterede-artikler-widget-style';
	}
}
siteorigin_widget_register('relaterede-artikler-widget', __FILE__, 'Relaterede_Artikler_Widget');
