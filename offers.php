<?php

/**
 * offers.php
 * Offers page for the backend.
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';

// Checking for the product in the $_GET variable
if ( isset( $_GET['product'] ) ) {
	$product = clean_input( $_GET['product'] );

	// Ensuring that the product is not empty.
	if ( ! empty( $product ) ) {
		if ( 'mmcs' == $product ) {
			echo '<p style="padding: 10px; background: #ecf8fe"><strong>Moscow</strong> is a free WordPress theme that is lightweight, fast and easy to customize. It is perfect for personal, fashion, travel, food, and lifestyle blogs. <a href="http://www.akshitsethi.com/wordpress-theme/moscow.php" target="_blank">Get Moscow</a></p>';
		} else {
			echo '<p style="padding: 10px; background: #ecf8fe"><strong>Moscow</strong> is a free WordPress theme that is lightweight, fast and easy to customize. It is perfect for personal, fashion, travel, food, and lifestyle blogs. <a href="http://www.akshitsethi.com/wordpress-theme/moscow.php" target="_blank">Get Moscow</a></p>';
		}
	} else {
		echo '<p style="padding: 10px; background: #ecf8fe"><strong>Moscow</strong> is a free WordPress theme that is lightweight, fast and easy to customize. It is perfect for personal, fashion, travel, food, and lifestyle blogs. <a href="http://www.akshitsethi.com/wordpress-theme/moscow.php" target="_blank">Get Moscow</a></p>';
	}
} else {
	echo '<p style="padding: 10px; background: #ecf8fe"><strong>Moscow</strong> is a free WordPress theme that is lightweight, fast and easy to customize. It is perfect for personal, fashion, travel, food, and lifestyle blogs. <a href="http://www.akshitsethi.com/wordpress-theme/moscow.php" target="_blank">Get Moscow</a></p>';
}