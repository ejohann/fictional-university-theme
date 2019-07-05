<?php 

	add_action('admin_init', 'redirectSubcribersToFrontend');

	function redirectSubcribersToFrontend()
		{
			$ourCurrentUser = wp_get_current_user();
			if(count($ourCurrentUser->roles) == 1 && $ourCurrentUser->roles[0] == 'subscriber')
			  {
			  	wp_redirect(site_url('/'));
			  	exit;
			  }
		}


	add_action('wp_loaded', 'noSubcribersAdminBar');

	function noSubcribersAdminBar()
		{
			$ourCurrentUser = wp_get_current_user();
			if(count($ourCurrentUser->roles) == 1 && $ourCurrentUser->roles[0] == 'subscriber')
			  {
			  	 show_admin_bar(false);
			  }
		}

?>