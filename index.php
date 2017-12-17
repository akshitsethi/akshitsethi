<?php

/**
 * index.php
 * Main application file.
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';

// Meta
$slug = 'home';


// Open Graph
$open_graph = array(
	'twitter_card' 	=> 'photo',
	'type'			=> 'website',
	'url'			=> $config['url'],
	'description' 	=> $config['description'],
	'photo' 		=> $config['url'] . '/app/img/logo.png',
	'title' 		=> $config['app'] . ' - ' . $config['tagline']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// index.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/index.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';