<?php 
/*
Plugin Name: Custom Plugin
Plugin URI: https://contactform7.com/
Description: Just Custom Plugin. Simple but flexible.
Author: Muntajib
Author URI: https://ideasilo.wordpress.com/
Text Domain: custom-plugin
Domain Path: /languages/
Version: 1.0.0
*/
/*---------------------------------------------------------------------------------------------------*/
//Constants

define("PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
define("PLUGIN_URL", plugins_url());
define("Plugin_Version","1.0");

function add_my_custom_menu(){
	add_menu_page("customplugin","Custom Plugin","manage_options","custom-plugin","add_new_function","dashicons-dashboard",11);

	add_submenu_page("custom-plugin","AddNew","Add New","manage_options","custom-plugin","add_new_function",1);

	add_submenu_page("custom-plugin","AllPages","All Pages","manage_options","all-pages","all_page_function",2);


}
/*---------------------------------------------------------------------------------------------------*/

add_action("admin_menu","add_my_custom_menu");

/*---------------------------------------------------------------------------------------------------*/


// function custom_admin_view(){
// 	echo "<h1> Hello! Muntajib Welcomes you to the Plugin </h1>";
// }

function add_new_function(){
	include_once PLUGIN_DIR_PATH."/views/add-new.php";	
}

function all_page_function(){
	include_once PLUGIN_DIR_PATH."/views/all-pages.php";
}

/*---------------------------------------------------------------------------------------------------*/

function custom_plugin_assets(){
	wp_enqueue_style("cpl_style",PLUGIN_URL."/custom-plugin/assets/css/style.css"," ","Plugin_Version");

    wp_enqueue_script("cpl_script",PLUGIN_URL."/custom-plugin/assets/css/script.js"," ","Plugin_Version",true);

}


add_action("init","custom_plugin_assets");
 
 ?>

