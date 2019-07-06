<?php 

	add_filter('wp_insert_post_data', 'makeNotePrivate');

	function makeNotePrivate($data){
		if($data['post_type'] == 'note'  && $data['post_status'] != 'trash')
		 {
		 	$data['post_status'] = "private";
		
		 }
		 return $data;
	}


?>