<?php

/**
 * View: 403 (Forbidden access).
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

if ( ! defined( 'APP' ) ) {
	exit;
}

?>

<div class="error-page">
	<h1>403</h1>
	<p><strong>That's an error</strong>. You are not allowed to access this area of the application. Kindly try some other link or use the link below to go back to the front page.</p>
	<p class="text-small"><a href="<?php echo $config['url']; ?>">&larr; Start again</a></p>
</div><!-- .error-page -->