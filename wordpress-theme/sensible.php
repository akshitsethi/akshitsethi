<?php

/**
 * sensible.php
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once '../init.php';

// Meta
$slug = 'themes';


// Open Graph
$open_graph = array(
	'twitter_card' 	=> 'photo',
	'type'			=> 'website',
	'url'			=> $config['url'] . '/wordpress-theme/sensible.php',
	'description' 	=> 'Sensible is a WordPress theme with a clean & refreshing approach. It\'s minimal user interface, search engine compatibility, and super easy setup makes it the perfect choice for modern day bloggers. In short, it\'s for anyone and everyone.',
	'keywords' 		=> 'sensible wordpress theme, sensible wp theme free, free wp theme sensible, sensible wordpress theme, wordpress themes, wp themes, themes for wordpress, download free wordpress themes, wordpress templates, templates for wordpress, wp templates, wordpress themes for business, wordpress themes free, wordpress themes 2018, wordpress themes creative, wordpress themes clean, wordpress themes most popular',
	'photo' 		=> $config['url'] . '/app/img/products/sensible.jpg',
	'title' 		=> 'Sensible WordPress Theme - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// sensible.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/products/sensible.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';