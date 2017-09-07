<?php

/**
 * View: 404 (Page not found).
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

if ( ! defined( 'APP' ) ) {
	exit;
}

?>

<div class="error-page">
	<h1>404</h1>
	<p><strong>That's an error</strong>. The requested URL was not found on this server. Please verify that the source link is correct or use the link below to go back to the front page.</p>
	<p class="text-small"><a href="<?php echo $config['url']; ?>">&larr; Start again</a></p>
</div><!-- .error-page -->