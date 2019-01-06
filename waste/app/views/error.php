<?php

/**
 * View: Error.
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

if ( ! defined( 'APP' ) ) {
	exit;
}


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';

?>

<div class="error-page">
	<div class="s-container">
		<h1>Oops!</h1>
		<p><strong>We're Sorry!</strong> There seems to be some issue with the website because of which you are seeing this page. We are working on to resolve this at the earliest possible. Please try again in few minutes.</p>
		<p class="text-small"><a href="<?php echo $config['url']; ?>">&larr; Start again</a></p>
	</div><!-- .s-container -->
</div><!-- .error-page -->

<?php

// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';