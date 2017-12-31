<?php

/**
 * maintenance-mode.php
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
	'url'			=> $config['url'] . '/wordpress-plugin/maintenance-mode.php',
	'description' 	=> 'Free plugin to quickly and easily set up a Coming Soon or Launch Page for your website. It\'s Simple + flexible and works with any WordPress theme you have installed on your site. It allows you to configure every element as per your preference and gives you full control over the frontend of the website.',
	'keywords' 		=> 'maintenance mode and coming soon wordpress plugin, maintenance mode plugin wordpress, coming soon plugin wordpress, free maintenance mode wordpress plugin, wordpress plugins free, wp plugins free',
	'photo' 		=> $config['url'] . '/app/img/products/maintenance-mode.jpg',
	'title' 		=> 'Maintenance Mode & Coming Soon WordPress Plugin - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// maintenance-mode.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/products/maintenance-mode.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';