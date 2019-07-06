<?php 

	add_filter('wp_insert_post_data', 'makeNotePrivate');

	function makeNotePrivate($data){

		if($data['post_type'] == 'note')
		  {
		  	$data['post_content'] =sanitize_textarea_field($data['post_content']);
		  	$data['post_title'] =sanitize_text_field($data['post_title']);
		  }

		if($data['post_type'] == 'note'  && $data['post_status'] != 'trash')
		 {
		 	$data['post_status'] = "private";
		
		 }
		 return $data;
	}


?>