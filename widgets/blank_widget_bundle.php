<?php
function add_my_awesome_widgets_collection($folders){
	$folders[] = get_stylesheet_directory().'/widgets/';
	return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'add_my_awesome_widgets_collection');

function fd_feature_template_file( $filename, $instance, $widget ){
	// And this one for themes
	$filename = get_stylesheet_directory() . '/widgets/secondthought-feature-widget/secondthought-feature-widget-template.php';
  return $filename;
}
add_filter( 'siteorigin_widgets_template_file_secondthought-feature-widget', 'fd_feature_template_file', 10, 3 );
