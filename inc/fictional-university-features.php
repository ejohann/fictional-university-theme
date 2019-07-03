<?php 

    // FILE FOR LOADING CUSTOM FEATURES
	function fictional_university_features()
	  {
		register_nav_menu('headerMenuLocation', 'Header Menu Location');
		register_nav_menu('footerLocationOne', 'Footer Location One');
		register_nav_menu('footerLocationTwo', 'Footer Location Two');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_image_size('professorLandscape', 400, 260, true);
		add_image_size('professorPortrait', 480, 650, true);
		add_image_size('pageBanner', 1500, 350, true);
	  }

	add_action('after_setup_theme', 'fictional_university_features');

?>