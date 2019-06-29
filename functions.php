<?php 
  	
	function fictional_university_files(){
		wp_enqueue_style('university_main_styles', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'fictional_university_files');



?>