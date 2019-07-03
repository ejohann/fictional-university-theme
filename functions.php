<?php 


	@ini_set( 'upload_max_size' , '64M' );
	@ini_set( 'post_max_size', '64M');
	@ini_set( 'max_execution_time', '300' );
	@ini_set( 'max_input_time', '300' );

	require('inc/page-banner.php');
	require('inc/fictional-university-files.php');
  	require('inc/fictional-university-features.php');
  	require('inc/university-adjust-queries.php');
  	require('inc/university-map-key.php');
?>