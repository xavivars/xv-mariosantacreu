<?php
/*
Plugin Name: XV MarioSantacreu.com
Plugin URI: 
Description: 
Version: 0.1
Author: 
Author URI: 
License: GPLv3
*/

function xv_mariosantacreu() {
	
	wp_register_style('xv_mariosantacreu_css', plugins_url('style.css',__FILE__ ));
	wp_enqueue_style('xv_mariosantacreu_css');
	
	wp_register_script( 'xv_mariosantacreu_js', plugins_url('mariosantacreu.js',__FILE__ ));
	$data = array(
		'basepath' => plugins_url( 'images/idioma-__LANG__.png', __FILE__ )
	);
	wp_enqueue_script('xv_mariosantacreu_js');
	wp_localize_script( 'xv_mariosantacreu_js', 'xv_mariosantacreu', $data );
}
add_action( 'wp_enqueue_scripts','xv_mariosantacreu');


