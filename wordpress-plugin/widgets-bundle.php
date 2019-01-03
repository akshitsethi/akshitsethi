<?php

/**
 * widgets-bundle.php
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once '../init.php';

// Meta
$slug = 'plugins';


// Open Graph
$open_graph = array(
	'twitter_card' 	=> 'photo',
	'type'			=> 'website',
	'url'			=> $config['url'] . '/wordpress-plugin/widgets-bundle.php',
	'description' 	=> 'Widgets are great and adds more power to your website. Widgets Bundle comes powerpacked with 11 awesome widgets to power up and add more features to your website.',
	'keywords' 		=> 'widgets bundle wordpress plugin, widgets bundle plugin wordpress, widgets plugin wordpress, free widgets bundle wordpress plugin, wordpress plugins free, wp plugins free, widgets for wordpress, widgets plugin',
	'photo' 		=> $config['url'] . '/app/img/products/widgets-bundle.jpg',
	'title' 		=> 'Widgets Bundle WordPress Plugin - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// widgets-bundle.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/products/widgets-bundle.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';