<?php 

  if(!is_user_logged_in()) :
   
    wp_redirect(site_url('/'));
  
  else :
	
	 get_header();

	 while(have_posts())
     {
		    the_post(); 
        pageBanner();
    ?>

  		<div class="container container--narrow page-section">

  		
  		</div>

	<?php }

  endif;
  
	get_footer();
?>