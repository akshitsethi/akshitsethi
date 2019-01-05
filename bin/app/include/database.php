<?php

/**
 * Establishing secure connection to the database.
 *
 * @author akshitsethi
 * -----------------------------------------------------------------------------
 */

if ( ! defined( 'APP' ) ) {
	exit;
}


// Database values for the application.
$db_server 		=  'localhost';
$db_user 		=  'root';
$db_password 	=  'root';
$db_name 		=  '69signals';


/**
 * Connecting to the database using PHP PDO.
 * -----------------------------------------------------------------------------------
 */

try {
	$db = new PDO( 'mysql:host=' . $db_server . ';dbname=' . $db_name, $db_user, $db_password );
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch( PDOException $e ) {
	$log->addAlert( 'Database seems unavailable. Resolve the issue at the earliest possible.' );

	// Show error to the user and exit
	require_once APP_PATH . '/app/views/error.php';
	exit;
}