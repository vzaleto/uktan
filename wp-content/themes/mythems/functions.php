<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

add_theme_support('post-thumbnails');

//Добавление <title>:
add_theme_support( 'title-tag' );

//Добавление скриптов и стилей
//functions.php
function my_theme_load_resources() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', array(), '0.1' );
	wp_enqueue_style( 'open-sans', get_template_directory_uri() . '/bower_components/open-sans/css/open-sans.min.css', array(), '0.1' );

	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '0.1');
	wp_enqueue_style('mediaqwery', get_template_directory_uri() . '/css/mediaqwery.css', array(), '0.1');




	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array(), '0.1', true );
	wp_enqueue_script( 'commonjs', get_template_directory_uri() . '/js/common.js', array(), '0.1', true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '0.1', true );
		 //true - значит скрипты в подвале
};
add_action( 'wp_enqueue_scripts', 'my_theme_load_resources' );
add_theme_support('menus');
register_nav_menu("top","top header menu");

function make_line(){ 
 echo "<tr>"; 
 for ($i = 0; $i < 3; $i++){ 
 echo make_column(); 
 } 
 echo "</tr>"; 
} 




?>