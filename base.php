<?php

/**
 * @author akshitsethi
 *
 * Error reporting for the application.
 * Set it to error_reporting(E_ALL) for debugging.
 * Default timezone for the application.
 * -------------------------------------------------------
 */

error_reporting( 0 );
date_default_timezone_set( 'Asia/Kolkata' );


/**
 * Setting the APP_PATH for file inclusions. It's important.
 * Defining application variable to prevent direct access to important files.
 * -------------------------------------------------------
 */

define( 'APP', 'akshitsethi' );
define( 'APP_PATH', dirname( __FILE__ ) );


/**
 * 1 Configuration file for the application.
 * 2 Load the application configuration.
 * -------------------------------------------------------
 */

require_once APP_PATH . '/app/include/config.php'; 				// 1
require_once APP_PATH . '/vendor/autoload.php'; 				// 2


/**
 * Initialize class for application logs.
 * -------------------------------------------------------
 */

require_once APP_PATH . '/app/include/log.php';


/**
 * 1 Establish database connectivity.
 * 2 functions.php for common application functions.
 * -------------------------------------------------------
 */

require_once APP_PATH . '/app/include/database.php'; 			// 1
require_once APP_PATH . '/app/include/functions.php';			// 2


/**
 * Important values used in the application.
 * -------------------------------------------------------
 * Check for IP address.
 */

$ip_address = getenv( 'HTTP_CLIENT_IP' )?:
getenv( 'HTTP_X_FORWARDED_FOR' )?:
getenv( 'HTTP_X_FORWARDED' )?:
getenv( 'HTTP_FORWARDED_FOR' )?:
getenv( 'HTTP_FORWARDED' )?:
getenv( 'REMOTE_ADDR' );

/**
 * IP Address not found? Let's provide a default value.
 * -------------------------------------------------------
 */

if ( false === $ip_address ) {

	// Default Value
	$ip_address = 'UNKNOWN';

}

// Date & Time
$system_datetime = date( 'Y-m-d H:i:s' );