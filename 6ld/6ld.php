<?php
/*
Plugin Name: 6ld
Description: Dream Community of Software Development
Version: 0.0.2
Author: Tony Snow
Text Domain: 6ld
Domain Path: /lang/
*/

show_admin_bar(false);
/**
 * Include our abstract which is a Class of shared Methods for our Classes.
 */
require_once 'controllers/abstract.php';

/**
 * If the admin is being displayed load the admin class and run it.
 */
if ( is_admin() ){
	require_once 'controllers/admin.php';
}

/**
 * If users are allowed to register we require the registration class
 */
require_once 'controllers/register.php';

/**
 * Load the login class
 */
require_once 'controllers/login.php';
?>