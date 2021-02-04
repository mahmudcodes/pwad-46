<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
	
	<!-- Custom Fonts -->
    <link href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery1111.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->
    
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' class="align-right">
				<ul>
				   <li class="active"><a href='index.html'><span>zKingMan</span></a></li>
				   <li class=' has-sub'><a href='archive.html'><span>Blog</span></a>
					  <ul>
						 <li class='has-sub'><a href='#'><span>Item 1</span></a>
							<ul>
							   <li><a href='#'><span>Sub Item</span></a></li>
							   <li class='last'><a href='#'><span>Sub Item</span></a></li>
							</ul>
						 </li>
						 <li class='has-sub'><a href='#'><span>Item 2</span></a>
							<ul>
							   <li><a href='#'><span>Sub Item</span></a></li>
							   <li class='last'><a href='#'><span>Sub Item</span></a></li>
							</ul>
						 </li>
					  </ul>
				   </li>
				   <li><a href='#'><span>Gallery</span></a></li>
				   <li><a href='single.html'><span>About</span></a></li>
				   <li class='last'><a href='contact.html'><span>Contact</span></a></li>
				</ul>
			</div>
		</div>