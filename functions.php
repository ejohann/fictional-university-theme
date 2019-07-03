<?php 


	require('inc/page-banner.php');

  	



	function fictional_university_features(){
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


	function university_adjust_queries($query){

		if(!is_admin() && is_post_type_archive('campus') && $query->is_main_query())
		 {
		 	$query->set('posts_per_page', -1);
		 }

		if(!is_admin() && is_post_type_archive('program') && $query->is_main_query())
		 {
		 	$query->set('orderby', 'title');
		 	$query->set('order', 'ASC');
		 	$query->set('posts_per_page', -1);
		 }

		if(!is_admin() && is_post_type_archive('event') && $query->is_main_query())
		  {
		  	$today = date('Ymd');
			$query->set('meta_key', 'event_date');
			$query->set('orderby', 'meta_value_num');
			$query->set('order', 'ASC');
			$query->set('meta_query', array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            ));
		 }
	}

	add_action('pre_get_posts', 'university_adjust_queries');


	function universityMapKey($api)
	 {
	 	$api['key'] = 'AIzaSyAOhZXAOb_iMbEU-gxlxTtDPIq9Yyy_2No';
	 	return $api;
	 }

	add_filter('acf/fields/google_map/api', 'universityMapKey');


?>