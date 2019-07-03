<?php 


	require('inc/page-banner.php');
	require('inc/fictional-university-files.php');
  	



	


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