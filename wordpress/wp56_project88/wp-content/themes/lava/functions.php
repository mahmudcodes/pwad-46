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

	register_post_type('testimonials',
		array(
			'label' =>  __('Testimonials'),
			'supports' => array('title', 'thumbnail', 'editor'),
			'public' => true,
		)
	);

	register_post_type('services',
		array(
			'label' =>  __('Services'),
			'supports' => array('title', 'editor', 'thumbnail'),
			'public' => true,
		)
	);
	register_post_type('about',
		array(
			'label' =>  __('About'),
			'supports' => array('title', 'thumbnail', 'editor'),
			'public' => true,
		)
	);
	register_post_type('header',
		array(
			'label' =>  __('Header'),
			'supports' => array('title', 'editor'),
			'public' => true,
		)
	);
?>