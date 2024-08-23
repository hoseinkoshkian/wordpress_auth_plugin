<?php

/*
Plugin Name: wordpress auth 
Plugin URI: https://javanoteam.com
Description: custome login page
Author: Hosein Koshkain
Version: 1.0.0
Author URI: https://javanoteam.com
*/

define("WP_AUTH_DIR", plugin_dir_path(__FILE__));
define("WP_AUTH_URL", plugin_dir_url(__FILE__));
define("WP_AUTH_INC", WP_AUTH_DIR . '/inc/');
define("WP_AUTH_TPL", WP_AUTH_DIR . '/tpl/');


include WP_AUTH_INC . "functions.php"; // بهتر است اول بارگزاری شود چون قایل های عمومی دارد
include WP_AUTH_INC . "shortcodes.php";
