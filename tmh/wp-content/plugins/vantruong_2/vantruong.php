<?php
/*
Plugin Name: vantruong
Plugin URI: 
Description: Check mobile and switch theme mobile for subdomain and webiste orther
Version: 3.1.11
Author: Pham Van Truong
Author URI: 
*/
$domain = $_SERVER['HTTP_HOST'];
if(wp_is_mobile() || strpos($domain,'wap.') !== false ){
	define('WP_HOME', 'http://'.$domain);
	define('WP_SITEURL', 'http://'.$domain);
	// switch_theme('mobile');
}else{
	// switch_theme('168mauxanh');
}

?>