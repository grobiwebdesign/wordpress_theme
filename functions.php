<?php

function load_stylesheets() {

	/*
	wp_register_style('myFramework' , get_template_directory_uri() . '/css/framework.css', array(), false, 'all');
	wp_enqueue_style('myFramework');
	*/

	wp_register_style('myCSS' , get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('myCSS');
}

add_action('wp_enqueue_scripts' , 'load_stylesheets');


// include jQuery
function include_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'include_jquery');

// include JavaScript

function loadjs()

{
	wp_register_script('myJS', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
	wp_enqueue_script('myJS');
}

add_action('wp_enqueue_scripts' , 'loadjs');