<?php

/**
 * offers.php
 * Offers page for the backend.
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';

// Default
$offer = '<strong>Moscow</strong> is a free WordPress theme that is lightweight, fast and easy to customize. It is perfect for personal, fashion, travel, food, and lifestyle blogs. <a href="http://www.akshitsethi.com/wordpress-theme/moscow.php" target="_blank">Get Moscow</a>';

// Check Product
if ( isset( $_GET['product'] ) ) {
	$product = clean_input( $_GET['product'] );

	// Product Specific Offers
	if ( ! empty( $product ) ) {
		if ( 'mmcs' == $product ) {
			$offer = '<strong>Moscow</strong> is a free WordPress theme that is lightweight, fast and easy to customize. It is perfect for personal, fashion, travel, food, and lifestyle blogs. <a href="http://www.akshitsethi.com/wordpress-theme/moscow.php" target="_blank">Get Moscow</a>';
		}
	}
}

// Echo
echo $offer;