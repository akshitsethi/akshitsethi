<?php

/**
 * Log configuration for the application.
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

if ( ! defined( 'APP' ) ) {
	exit;
}

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;

$dateFormat 	= 	"jS F Y, H:i:s";

// handles overall application logs
$output 		= 	"%datetime% > %level_name% > %message%\n\n";
$formatter 		= 	new LineFormatter( $output, $dateFormat );
$stream 		= 	new StreamHandler( APP_PATH . '/logs/log_' . date( 'Y_m_d' ) . '.log' , Logger::DEBUG );
$stream->setFormatter( $formatter );
$log 			= 	new Logger( 'application' );
$log->pushHandler( $stream );