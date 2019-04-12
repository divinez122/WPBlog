<?php

function blogtheme_setup(){

	load_theme_textdomain('blogtheme');

	add_theme_support('title-tag');

	add_theme_support('custom-logo', array(
		'height' => '31' ,
		'width'=>'134' ,
		'flex-height' => true));

		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(730,446);

		add_theme_support('html5', array('search-form',
		 'comment-form',
		 'comment-list',
		 'gallery',
		 'caption'
	  ));

		add_theme_support('post-formats', array(
			'aside',
			'image',
			'video',
			'gallery'
		));

		register_nav_menu('primary', 'Primary menu');
}

add_action('after_setup_theme', 'blogtheme_setup');
function blogtheme_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'css3-animate-it', get_template_directory_uri() . '/js/css3-animate-it.js' );
	wp_enqueue_script( 'agency', get_template_directory_uri() . '/js/agency.js' );
	wp_enqueue_script( 'jquery.easing.min', get_template_directory_uri() . '/js/jquery.easing.min.js' );
}
add_action( 'wp_enqueue_scripts', 'blogtheme_scripts' );
