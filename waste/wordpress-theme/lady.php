<?php

/**
 * lady.php
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
	'url'			=> $config['url'] . '/wordpress-theme/lady.php',
	'description' 	=> 'Lady is a WordPress theme that will appeal to those who like a minimal style with feminine touches. It is designed for bloggers and comes "out of the box" with a beautiful color and typography palette.',
	'keywords' 		=> 'lady wordpress theme, lady wp theme free, free wp theme lady, lady wordpress theme, wordpress themes, wp themes, themes for wordpress, download free wordpress themes, wordpress templates, templates for wordpress, wp templates, wordpress themes for business, wordpress themes free, wordpress themes 2018, wordpress themes creative, wordpress themes clean, wordpress themes most popular',
	'photo' 		=> $config['url'] . '/app/img/products/lady.jpg',
	'title' 		=> 'Lady WordPress Theme - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// lady.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/products/lady.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';