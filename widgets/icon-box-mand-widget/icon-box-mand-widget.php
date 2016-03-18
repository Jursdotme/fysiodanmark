<?php
/*
Widget Name: Mand box
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

class Icon_Mand_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'icon-box-mand-widget',
			__('Mand box', 'icon-box-mand-widget-text-domain'),
			array(
				'description' => __('A hello world widget.', 'icon-box-mand-widget-text-domain'),
			),
			array(
			),
			array(
			),
			get_template_directory_uri().'/widgets/icon-box-mand-widget/'
		);
	}
	function get_template_name($instance) {
		return 'icon-box-mand-widget-template';
	}
	function get_style_name($instance) {
		return 'icon-box-mand-widget-style';
	}
}
siteorigin_widget_register('icon-box-mand-widget', __FILE__, 'Icon_Mand_Widget');
