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
		if ( 'csmm' == $product ) {
			echo '<p style="padding: 10px; background: #FFFBCC">Stuberry is a theme built for a better reading experience. It\'s clean & creative approach towards user interface, strong emphasis on search engine compatibility, and easy setup makes it well suited for both personal & magazine blogs. <a href="https://www.mojomarketplace.com/item/stuberry-beautifully-crafted-wordpress-theme" target="_blank">Click here</a> to know more.</p>';
		} else {
			echo '<p style="padding: 10px; background: #FFFBCC">Stuberry is a theme built for a better reading experience. It\'s clean & creative approach towards user interface, strong emphasis on search engine compatibility, and easy setup makes it well suited for both personal & magazine blogs. <a href="https://www.mojomarketplace.com/item/stuberry-beautifully-crafted-wordpress-theme" target="_blank">Click here</a> to know more.</p>';
		}
	} else {
		echo '<p style="padding: 10px; background: #FFFBCC">Stuberry is a theme built for a better reading experience. It\'s clean & creative approach towards user interface, strong emphasis on search engine compatibility, and easy setup makes it well suited for both personal & magazine blogs. <a href="https://www.mojomarketplace.com/item/stuberry-beautifully-crafted-wordpress-theme" target="_blank">Click here</a> to know more.</p>';
	}
} else {
	echo '<p style="padding: 10px; background: #FFFBCC">Stuberry is a theme built for a better reading experience. It\'s clean & creative approach towards user interface, strong emphasis on search engine compatibility, and easy setup makes it well suited for both personal & magazine blogs. <a href="https://www.mojomarketplace.com/item/stuberry-beautifully-crafted-wordpress-theme" target="_blank">Click here</a> to know more.</p>';
}