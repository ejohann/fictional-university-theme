<?php 


	require('inc/page-banner.php');
	require('inc/fictional-university-files.php');
  	require('inc/fictional-university-features.php');
  	require('inc/university-adjust-queries.php');
	

  function universityMapKey($api)
	 {
	 	$api['key'] = 'AIzaSyAOhZXAOb_iMbEU-gxlxTtDPIq9Yyy_2No';
	 	return $api;
	 }

	add_filter('acf/fields/google_map/api', 'universityMapKey');


?>