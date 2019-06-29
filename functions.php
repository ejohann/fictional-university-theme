<?php 
  	
	function fictional_university_files(){
		wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('university_main_styles', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'fictional_university_files');



?>