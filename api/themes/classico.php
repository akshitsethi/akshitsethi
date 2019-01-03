<?php

/**
 * classico.php (updates)
 * Changelog for the theme updates.
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once '../../init.php';

// Meta
$slug = 'classico';


// Open Graph
$open_graph = array(
	'twitter_card' 	=> 'photo',
	'type'			=> 'website',
	'url'			=> $config['url'],
	'description' 	=> 'Changelog for Classico WordPress Theme',
	'photo' 		=> $config['url'] . '/app/img/logo.png',
	'title' 		=> 'Changelog for Classico WordPress Theme' . ' - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';

?>

<div class="theme-content order-response">
	<div class="s-container">
		<h3>Changelog - Classico WordPress Theme</h3><br/><br/>

		<p><strong>v1.1.0</strong></p>
		<ul class="changelog theme-features">
			<li>Issue with Instagram footer section has been fixed</li>
			<li>Widgets have been removed from the theme and comes seperately as a plugin</li>
			<li>Facebook, Twitter, and Instagram widgets have been added</li>
			<li>Bug in the comment section has been fixed</li>
		</ul><br/><br/>

		<p><strong>v1.0.2</strong></p>
		<ul class="changelog theme-features">
			<li>Replacement made for one of the font</li>
			<li>Lot of design improvements have been made</li>
			<li>Couple of bugs have been fixed</li>
			<li>Archive title design has been changed</li>
			<li>Code has been improved</li>
		</ul><br/><br/>

		<p><strong>v1.0.1</strong></p>
		<ul class="changelog theme-features">
			<li>Issue with Instagram footer section has been fixed</li>
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