<?php
/*
Widget Name: Header
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

class Header_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'header-widget',
			__('Header', 'header-widget-text-domain'),
			array(
				'description' => __('A hello world widget.', 'header-widget-text-domain'),
			),
			array(
			),
			array(
				'header' => array(
					'type' => 'text',
					'label' => __('Hello world! goes here.', 'siteorigin-widgets'),
					'default' => 'Hello world!'
				),
				'image' => array(
		        'type' => 'media',
		        'label' => __( 'Choose a media thing', 'widget-form-fields-text-domain' ),
		        'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
		        'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
		        'library' => 'image',
		        'fallback' => true
		    ),
				'width' => array(
		        'type' => 'slider',
		        'label' => __( 'Tekstbredde (i procent)', 'widget-form-fields-text-domain' ),
		        'default' => 50,
		        'min' => 1,
		        'max' => 100,
		        'integer' => true
		    )
			),
			get_template_directory_uri().'/widgets/header-widget/'
		);
	}
	function get_template_name($instance) {
		return 'header-widget-template';
	}
	function get_style_name($instance) {
		return 'header-widget-style';
	}
}
siteorigin_widget_register('header-widget', __FILE__, 'Header_Widget');
