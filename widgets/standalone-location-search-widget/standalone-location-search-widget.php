<?php
/*
Widget Name: Location Search
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

class Location_Search_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'standalone-location-search-widget',
			__('Location Search', 'standalone-location-search-widget-text-domain'),
			array(
				'description' => __('A hello world widget.', 'standalone-location-search-widget-text-domain'),
			),
			array(
			),
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('Hello world! goes here.', 'siteorigin-widgets'),
					'default' => 'Hello world!'
				),
			),
			get_template_directory_uri().'/widgets/standalone-location-search-widget/'
		);
	}
	function get_template_name($instance) {
		return 'standalone-location-search-widget-template';
	}
	function get_style_name($instance) {
		return 'standalone-location-search-widget-style';
	}
}
siteorigin_widget_register('standalone-location-search-widget', __FILE__, 'Location_Search_Widget');
