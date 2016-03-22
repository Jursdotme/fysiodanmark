<?php
/*
Widget Name: Delt indhold
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

class Delt_Indhold extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'delt-side-widget',
			__('Delt indhold', 'delt-side-widget-text-domain'),
			array(
				'description' => __('A hello world widget.', 'delt-side-widget-text-domain'),
			),
			array(
			),
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('JSON URL', 'siteorigin-widgets'),
					'default' => 'Hello world!'
				),
			),
			get_template_directory_uri().'/widgets/delt-side-widget/'
		);
	}
	function get_template_name($instance) {
		return 'delt-side-widget-template';
	}
	function get_style_name($instance) {
		return 'delt-side-widget-style';
	}
	function CallAPI_FD($method, $url, $data = false)
	{
			$curl = curl_init();

			switch ($method)
			{
					case "POST":
							curl_setopt($curl, CURLOPT_POST, 1);

							if ($data)
									curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
							break;
					case "PUT":
							curl_setopt($curl, CURLOPT_PUT, 1);
							break;
					default:
							if ($data)
									$url = sprintf("%s?%s", $url, http_build_query($data));
			}
			$url = str_replace('&amp;','&',$url);
			// Optional Authentication:
			curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($curl, CURLOPT_USERPWD, "username:password");

			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

			$result = curl_exec($curl);

			curl_close($curl);

			return $result;
	}



}
siteorigin_widget_register('delt-side-widget', __FILE__, 'Delt_Indhold');
