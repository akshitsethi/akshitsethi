<?php

/**
 * moscow.php (updates)
 * Changelog for the theme updates.
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once '../../init.php';

// Meta
$slug = 'moscow';


// Open Graph
$open_graph = array(
	'twitter_card' 	=> 'photo',
	'type'			=> 'website',
	'url'			=> $config['url'],
	'description' 	=> 'Changelog for Moscow WordPress Theme',
	'photo' 		=> $config['url'] . '/app/img/logo.png',
	'title' 		=> 'Changelog for Moscow WordPress Theme' . ' - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';

?>

<div class="theme-content order-response">
	<div class="s-container">
		<h3>Changelog - Moscow WordPress Theme</h3><br/><br/>

		<p><strong>v1.0.2</strong></p>
		<ul class="changelog theme-features">
			<li>Bug Fixes</li>
			<li>Few style issues rectified</li>
			<li>Instagram section issue fixed</li>
			<li>Sticky menu now works on mobile</li>
		</ul><br/><br/>

		<p><strong>v1.0</strong></p>
		<ul class="changelog theme-features">
			<li>Initial release</li>
		</ul>
	</div><!-- .s-container -->
</div><!-- .theme-content -->

<?php

// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';