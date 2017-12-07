<?php

/**
 * Products file.
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once '../base.php';


// Constants
// -------------------------------------------------------

$response = array(
	'type' 		=> 'error',
	'code' 		=> '100',
	'message' 	=> 'There seems to be some issue while processing your request. Please try again later.'
);


// Themes
// -------------------------------------------------------

$themes = array(
	'moscow',
	'pulp'
);

// Moscow
$moscow = array(
	'name' 			=> 'Moscow',
	'slug' 			=> 'moscow',
	'version' 		=> '1.0',
	'details_url' 	=> 'http://www.akshitsethi.com/api/themes/moscow.php',
	'download_url' 	=> 'http://www.akshitsethi.com/files/remote/updates/moscow.zip'
);

// Pulp
$pulp 	= array(
	'name' 			=> 'Pulp',
	'slug' 			=> 'pulp',
	'version' 		=> '1.0',
	'details_url' 	=> 'http://www.akshitsethi.com/api/themes/pulp.php',
	'download_url' 	=> 'http://www.akshitsethi.com/files/remote/updates/pulp.zip'
);


// Request
// -------------------------------------------------------

$slug = false;

if ( isset( $_GET['slug'] ) ) {
	$slug_value = clean_input( $_GET['slug'] );

	if ( ! empty( $slug_value ) ) {
		$slug = true;
	}
}


// Render
// -------------------------------------------------------

$data = array(
	'moscow' 	=> $moscow,
	'pulp' 		=> $pulp
);


// Output
// -------------------------------------------------------

if ( $slug ) {
	if ( in_array( $slug_value, $themes ) ) {
		$response = $data[$slug_value];
		$response = trim( json_encode( $response ) );
	} else {
		$response = $data;

		// Json
		$response = trim( json_encode( $response ) );
	}
} else {
	$response = $data;

	// Json
	$response = trim( json_encode( $response ) );
}

// Header
header( "Content-Type: application/json" );

// Send the response back to the server
echo $response;