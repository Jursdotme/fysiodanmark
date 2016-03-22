<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ($instance) {
	if ($instance['text']) {
		$shared_content = new Delt_Indhold();
		$json_file = trim($instance['text']);
		$data = $shared_content->CallAPI_FD('GET', $json_file);
		// $instance['text']);
		if ($data) {
			$data = json_decode($data);
			$data = $data->page;
			if ($data->content) {
				$echo_content = '<div class="">' . $data->content . '</div>';
				echo $echo_content;
			}
		}
}
}
?>
