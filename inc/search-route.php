<?php 

	add_action('rest_api_init', 'universityRegisterSearch');

	function universityRegisterSearch(){
		register_rest_route('university/v1', 'search', array(
			'methods' => WP_REST_SERVER::READABLE,
			'callback' => 'universitySearchResults'
		));
	}

	function universitySearchResults(){
		$professors = new WP_query(array(
			'post_type' => 'professor'
		));

		return $professors->posts;
	}

	



?>