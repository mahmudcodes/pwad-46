<?php 
	function after_setup_theme(){ 
		register_nav_menu('main', __('My Custom Menu'));
		register_nav_menu('footer', __('My Footer Menu'));
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);
		add_theme_support('custom-background', $defaults);
		add_theme_support('custom-logo');
		add_theme_support( 'post-thumbnails' );
		/*
		add_theme_support('custom-logo', array(
			'height' => 75,
			'width' => 200,
		));
		*/
	}
	add_action('init', 'after_setup_theme');

	function sidebar_widgets(){
		register_sidebar(array(
			'name' => __('Right Sidebar', 'zBoomMusic'),
			'id'            => 'right_sidebar',
	        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'zBoomMusic' ),
	        'before_widget' => '<div class="box">',
	        'after_widget'  => '</div></div',
	        'before_title'  => '<div class="heading"><h2>',
	        'after_title'   => '</h2></div><div class="content">',
		));

		register_sidebar(array(
			'name' => __('Footer', 'zBoomMusic'),
			'id'            => 'footer',
	        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'zBoomMusic' ),
	        'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
	        'after_widget'  => '</div></div></div></div>',
	        'before_title'  => '<div class="heading"><h2>',
	        'after_title'   => '</h2></div><div class="content">',
		));
	}
	add_action('widgets_init', 'sidebar_widgets');

?>