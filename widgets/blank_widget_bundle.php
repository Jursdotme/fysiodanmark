<?php
function fysiodanmark_widgets_collection($folders){
	$folders[] = realpath(__DIR__ . '/..') . '/widgets/';
	return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'fysiodanmark_widgets_collection');

function fd_feature_template_file( $filename, $instance, $widget ){
	// And this one for themes
	$filename = realpath(__DIR__ . '/..') . '/widgets/secondthought-feature-widget/secondthought-feature-widget-template.php';
  return $filename;
}
add_filter( 'siteorigin_widgets_template_file_secondthought-feature-widget', 'fd_feature_template_file', 10, 3 );
