<?php

/**
 * moscow.php
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
	'url'			=> $config['url'] . '/wordpress-theme/moscow.php',
	'description' 	=> 'Moscow is a free theme for WordPress that is lightweight, fast and easy to customize. It is perfect for personal, fashion, travel, food, and lifestyle blogs. Compatible with the latest version of WordPress.',
	'keywords' 		=> 'moscow wordpress theme, moscow wp theme free, free wp theme moscow, moscow wordpress theme, wordpress themes, wp themes, themes for wordpress, download free wordpress themes, wordpress templates, templates for wordpress, wp templates, wordpress themes for business, wordpress themes free, wordpress themes 2018, wordpress themes creative, wordpress themes clean, wordpress themes most popular',
	'photo' 		=> $config['url'] . '/app/img/products/moscow.jpg',
	'title' 		=> 'Moscow WordPress Theme - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// moscow.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/products/moscow.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';