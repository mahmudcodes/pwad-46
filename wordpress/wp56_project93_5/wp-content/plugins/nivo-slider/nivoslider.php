<?php  
	/*
	Plugin Name: Nivo Slider 
	Plugin URI: www.nivo-slider.com
	Description: This is Nivo Slider for Plugin Development 
	Version: 1.0
	Author: Mahmud Hasan
	Author URI: www.mahmud.com
	License: GPLv2
	*/
	function nivo_scripts(){
		wp_register_script('nivo_js', plugins_url('js/jquery.nivo.slider.js', __FILE__),array("jquery"),1.3, true);
		wp_enqueue_script('nivo_js');

		wp_register_script('my_script', plugins_url('js/script.js', __FILE__),array("jquery"),1.3, true);
		wp_enqueue_script('my_script');

		wp_register_style( 'default_css', plugins_url( 'css/default/default.css', __FILE__ ) );
	    wp_enqueue_style( 'default_css' );

	    wp_register_style( 'nivo_css', plugins_url( 'css/nivo-slider.css', __FILE__ ) );
	    wp_enqueue_style( 'nivo_css' );
	}

	add_action('wp_enqueue_scripts', 'nivo_scripts');

	function nivo_slider_code(){
		echo '<div id="wrapper">
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider"> 
				<img src="'. plugin_dir_url( __FILE__ )  .'images/toystory.jpg" data-thumb="images/toystory.jpg" alt="" /> 
				<img src="'. plugin_dir_url( __FILE__ )  .'images/up.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" />
				<img src="'. plugin_dir_url( __FILE__ )  .'images/walle.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" /> 
				<img src="'. plugin_dir_url( __FILE__ )  .'images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" /> 
			</div>
		</div>
	</div>';
	}
	add_action( "nivo_slider", "nivo_slider_code" );
?>