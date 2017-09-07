<?php

/**
 * @author akshitsethi
 *
 * Error reporting for the application.
 * Set it to error_reporting(E_ALL) for debugging.
 * Default timezone for the application.
 * -----------------------------------------------------------------------------------
 */

error_reporting( 0 );
date_default_timezone_set( 'Asia/Kolkata' );


/**
 * Setting the APP_PATH for file inclusions. It's important.
 * Defining application variable to prevent direct access to important files.
 * ----------------------------------------------------------------------------------------
 */

define( 'APP', 'akshitsethi' );
define( 'APP_PATH', dirname( __FILE__ ) );


/**
 * Load the application configuration.
 * -----------------------------------------------------------------------------------
 */

require_once APP_PATH . '/app/include/config.php';