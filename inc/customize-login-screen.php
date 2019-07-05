<?php 

	add_filter('login_headerurl', 'ourHeaderUrl');

	function ourHeaderUrl()
	 {
	 	return esc_url(site_url('/'));
	 }

	 add_action('login_enqueue_scripts', 'ourLoginCSS');

	 function ourLoginCSS()
	  {
	  	wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
	  	wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	  }

	  // Customize Login Screen Logo
	  function ourLoginLogo()
		{
  			return get_bloginfo('name');
        }
 
      add_filter('login_headertitle', 'ourLoginLogo');
?>