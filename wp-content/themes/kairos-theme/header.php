<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


		<div id="kairos-header">
			<a href="<?php echo get_option('home'); ?>/" style="text-decoration:none; color:inherit">
				<img id="logo-image" src="<?php echo bloginfo('template_directory');?>/images/logo.png">			
				<h1 style="font-size:70px; font-family:'Raleway'; font-weight:600; letter-spacing:-4px; margin-top:20px; margin-bottom:10px; line-height:1.1; margin:.67em 0;">
					Team Kairos						
				</h1>
			</a>
			
			<h2 style="font-size:30px; margin-top:20px; margin-bottom:10px; font-familiy:inherit; font-weight:500; line-height:1.1; color:inherit;">
				"Motto"
				<br>
				",here."			
			</h2>		
			<div class="details">
				<span style="font-weight:bold;">
					<a href="potatocodes.com" style="text-decoration:none; color:#2196F3;">
						Potatoes
					</a>
				</span> 
				" . "
				<span style="font-weight:bold;">
					<a href="#team-kairos" style="text-decoration:none; color:#03A9FA;">
						Kairos
					</a>
				</span>
				 " . "
				<span style="font-weight:bold;">
					<a href="" style="text-decoration:none; color:#B3E5FC;">
						Coders
					</a>
				</span>
			</div>
			<span id="navigation" class="kairos-navigation">
				<a id="content-navigator" 
					href="#main-content-id" 
					title="Contents" 
					style="text-decoration:none;">
					<img src="<?php echo bloginfo('template_directory');?>/images/arrow.png" 
						  class="pulse" style="height:30px; margin: 0 auto;">				
				</a>			
			</span>
		</div>
			<?php

                  if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
                  endif;
    		?>