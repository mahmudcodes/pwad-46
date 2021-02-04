<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo('title'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiveslides.css">
	<link href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />

	<link href='<?php wp_site_icon(); ?>' rel='icon' type='image/x-icon'/>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-latest.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery183.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
	
	
    
</head>
<body>
<div class="wrap-body">

<!-- /////////////////////////////////////////Top -->
<div class="top">
	<div class="zerogrid">
		<div class="row">
			<div class="f-left">
				<span><i class="fa fa-map-marker"></i> Brooklyn, NY 10036, United States </span>
				<span><i class="fa fa-phone"></i> 1-800-123-1234; 1-800-123-5678</span>
				<span><i class="fa fa-envelope"></i> example.com</span>
			</div>
			<div class="f-right">
				<span>Don't walk through life just playing football.</span>
			</div>
		</div>
	</div>
</div>

<!--////////////////////////////////////Header-->
<header>
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <!-- <li class='active'><a href="index.html">Home</a></li>
				   <li><a href="archive.html">Blog</a></li>
				   <li><a href="single.html">About</a></li>
				   <li><a href="contact.html">Contact</a></li> -->
				</ul>
			</div>
			<?php  
				wp_nav_menu(array(
					'theme_location' => 'main',
					'container_class' => 'cssmenu'
			));
			?>
			<a href="<?php bloginfo('home'); ?>" class="logo">
				<?php 
				if(function_exists('the_custom_logo')){
					the_custom_logo();
					} 
				?>
			</a>
		</div>
	</div>
</header>