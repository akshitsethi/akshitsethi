<?php

/**
 * License file.
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
	'message' 	=> 'No request type selected.'
);


// Check for the request.
if ( isset( $_GET['r'] ) && ! empty( $_GET['r'] ) ) {
	$request = clean_input( $_GET['r'] );

	// Request need not be empty
	if ( ! empty( $request ) ) {
		if ( 'register_product' == $request ) {
			if ( isset( $_GET['email'] ) && isset( $_GET['website'] ) && isset( $_GET['product'] ) ) {
				$input['email'] 	= clean_input( $_GET['email'] );
				$input['website'] 	= clean_input( $_GET['website'] );
				$input['product'] 	= clean_input( $_GET['product'] );

				// email is not empty
				if ( ! empty( $input['email'] ) && ! empty( $input['website'] ) && ! empty( $input['product'] ) ) {
					// email is valid
					if ( is_valid_email( $input['email'] ) ) {
						// validate website url
						if ( filter_var( $input['website'], FILTER_VALIDATE_URL ) !== FALSE ) {
							// Checking for duplicate license now
							try {
								$sql 		= 'SELECT * FROM `licenses` WHERE `email` = :email AND `url` = :website AND `product_slug` = :product_slug LIMIT 1';
								$sql_do 	= $db->prepare( $sql );
								$sql_do->bindParam( ':email', $input['email'], PDO::PARAM_STR );
								$sql_do->bindParam( ':website', $input['website'], PDO::PARAM_STR );
								$sql_do->bindParam( ':product_slug', $input['product'], PDO::PARAM_STR );
								$sql_do->execute();
								$sql_found 	= $db->query( 'SELECT FOUND_ROWS()' )->fetchColumn();
							} catch( PDOException $e ) {
								$log->addCritical( $e . ' - ' . basename( __FILE__ ) );
							}

							// No dupes found
							if ( empty( $sql_found ) ) {
								// generate token (based on domain and mix of email)
								$input['token'] = get_token( 64 );

								// SQL entry
								try {
									$sql 	= 'INSERT INTO `licenses`(`email`, `url`, `product_slug`, `license_key`, `ip_address`, `datetime`) VALUE(:email, :website, :product_slug, :key, :ip_address, :date_time)';
									$sql_do = $db->prepare( $sql );
									$sql_do->bindParam( ':email', $input['email'], PDO::PARAM_STR );
									$sql_do->bindParam( ':website', $input['website'], PDO::PARAM_STR );
									$sql_do->bindParam( ':product_slug', $input['product'], PDO::PARAM_STR );
									$sql_do->bindParam( ':key', $input['token'], PDO::PARAM_STR );
									$sql_do->bindParam( ':ip_address', $ip_address, PDO::PARAM_STR );
									$sql_do->bindParam( ':date_time', $system_datetime, PDO::PARAM_STR );
									$sql_do->execute();

									$ID 	= $db->lastInsertId();
								} catch( PDOException $e ) {
									$log->addCritical( $e . ' - ' . basename( __FILE__ ) );
								}

								// Record was added without any issues?
								if ( isset( $ID ) && ! empty( $ID ) ) {
									$response['type'] 		= 'success';
									$response['code'] 		= '200';
									$response['message'] 	= 'License key has been generated successfully. The product is now registered with us.';
									$response['key'] 		= $input['token'];
								} else {
									$response['code'] 		= '110';
									$response['message'] 	= 'Unable to generate the License key at the moment due to some technical issues. Please try again later.';
								}
							} else {
								// Grab license key from the database
								$row 					= $sql_do->fetch( PDO::FETCH_ASSOC );

								// Token / License
								$response['key']  		= clean_input( $row['license_key'] );
								$response['type'] 		= 'success';
								$response['code'] 		= '400';
								$response['message'] 	= 'License key has already been generated for the domain and email combination provided. The license key is active in our system. No action is required from your end.';
							}
						} else {
							$response['code'] 		= '103';
							$response['message'] 	= 'Website URL provided does not seem to be valid.';
						}
					} else {
						$response['code'] 		= '102';
						$response['message'] 	= 'Email address provided does not seem to be valid.';
					}
				} else {
					$response['code'] 		= '101';
					$response['message'] 	= 'Required details are missing from the request.';
				}
			} else {
				$response['code'] 		= '101';
				$response['message'] 	= 'Required details are missing from the request.';
			}
		} // register_product
	} // empty $request
} // $_get['r']


// send the response back to the server
echo json_encode( $response );