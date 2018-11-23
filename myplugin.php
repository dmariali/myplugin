<?php
/*
Plugin Name: My Plugin 
Description: Example plugin for learning purposes
Version: 1.0
Author: Danielle Maria Ali
Author URI: https://www.dmariali.com
License: GPL v3.0+
Text Domain: my-plugin
*/ 

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// if admin area
if (is_admin()){

    //include dependencies
    require_once plugin_dir_path(__FILE__). 'admin/admin-menu.php'; 
    require_once plugin_dir_path(__FILE__). 'admin/settings-page.php';
    require_once plugin_dir_path(__FILE__). 'admin/settings-register.php';
    require_once plugin_dir_path(__FILE__). 'admin/settings-callbacks.php'; 
}

//include dependencies: admin and public 
require_once plugin_dir_path(__FILE__). 'includes/core-functions.php';

function myplugin_options_default(){

    return array(
        'custom_url'    => 'https://wordpress.org', 
        'custom_title'  => 'Powered by FairyDust!', 
        'custom_style'  => 'disable', 
        'custom_message'=> '<p class="custom-message"> My custom Message </p>', 
        'custom_footer' => 'Special Message for users... so very special', 
        'custom_toolbar'=> false, 
        'custom_scheme' => 'default', 
    );

}












