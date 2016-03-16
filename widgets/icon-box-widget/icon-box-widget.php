<?php
/*
Widget Name: Icon box
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

class Custom_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'icon-box-widget',
			__('Icon box', 'icon-box-widget-text-domain'),
			array(
				'description' => __('A hello world widget.', 'icon-box-widget-text-domain'),
			),
			array(
			),
			array(
				'header' => array(
					'type' => 'text',
					'label' => __('Overskrift', 'siteorigin-widgets'),
					'default' => 'Hello world!'
				),
				'header_link' => array(
		        'type' => 'link',
		        'label' => __('Overskrift link', 'widget-form-fields-text-domain'),
		        'default' => ''
		    ),
				'content' => array(
		        'type' => 'tinymce',
		        'label' => __( 'Indhold', 'widget-form-fields-text-domain' ),
		        'default' => '',
		        'rows' => 10,
		        'default_editor' => 'html',
		        'button_filters' => array(
		            'mce_buttons' => array( $this, 'filter_mce_buttons' ),
		            'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
		            'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
		            'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
		            'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
		        ),
		    ),
				'icon' => array(
		        'type' => 'media',
		        'label' => __( 'Vælg ikon', 'widget-form-fields-text-domain' ),
		        'choose' => __( 'Vælg ikon', 'widget-form-fields-text-domain' ),
		        'update' => __( 'Vælg ikon', 'widget-form-fields-text-domain' ),
		        'library' => 'image',
		        'fallback' => true
		    ),
				'icon_size' => array(
		        'type' => 'select',
		        'label' => __( 'Ikon størrelse', 'widget-form-fields-text-domain' ),
						'default' => 'auto',
		        'options' => array(
		            'cover' => __( 'Dæk', 'widget-form-fields-text-domain' ),
		            'auto' => __( 'Original', 'widget-form-fields-text-domain' ),
		            'contain' => __( 'Omslut', 'widget-form-fields-text-domain' ),
		        )
		    ),
				'pos_h' => array(
		        'type' => 'radio',
		        'label' => __( 'Baggrunds position (horisontalt)', 'widget-form-fields-text-domain' ),
		        'default' => 'left',
		        'options' => array(
		            'left' => __( 'Venstre', 'widget-form-fields-text-domain' ),
		            'center' => __( 'Midt', 'widget-form-fields-text-domain' ),
		            'right' => __( 'Højre', 'widget-form-fields-text-domain' )
		        )
		    ),
				'pos_v' => array(
		        'type' => 'radio',
		        'label' => __( 'Baggrunds position (vertikalt)', 'widget-form-fields-text-domain' ),
		        'default' => 'bottom',
		        'options' => array(
		            'top' => __( 'Top', 'widget-form-fields-text-domain' ),
		            'center' => __( 'Midt', 'widget-form-fields-text-domain' ),
		            'bottom' => __( 'Bund', 'widget-form-fields-text-domain' )
		        )
		    )
			),
			get_template_directory_uri().'/widgets/icon-box-widget/'
		);
	}
	function get_template_name($instance) {
		return 'icon-box-widget-template';
	}
	function get_style_name($instance) {
		return 'icon-box-widget-style';
	}
}
siteorigin_widget_register('icon-box-widget', __FILE__, 'Custom_Widget');
