<?php

/**
 * View: 500 (Internal server error).
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

if ( ! defined( 'APP' ) ) {
	exit;
}

?>

<div class="error-page">
	<div class="s-container">
		<h1>500</h1>
		<p><strong>That's an error</strong>. There was an internal server error while processing your request. Kindly try again later after some time or click the link below to start all over again.</p>
		<p class="text-small"><a href="<?php echo $config['url']; ?>">&larr; Start again</a></p>
	</div><!-- .s-container -->
</div><!-- .error-page -->