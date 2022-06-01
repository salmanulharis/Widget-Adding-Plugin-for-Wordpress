<?php
/*
Plugin Name: Youtube Subs
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Display youtube sub button and count
Version: 1.0.0
Author: Salman
Author URI: http://health-check-team.example.com
*/
// Exit if accessed directly
if(!defined('ABSPATH')){
	exit;
}

//Load scripts
//plugin_dir_path(__FILE__) this will return plugin directory
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

//Load class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

// Register Widget
function register_youtubesubs(){
	register_widget('Youtube_Subs_Widget');
}

// Hook in function
add_action('widget_init', 'register_youtubesubs');