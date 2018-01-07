<?php

/**
 * success.php
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';

// Meta
$slug = 'success';


// Open Graph
$open_graph = array(
	'twitter_card' 	=> 'photo',
	'type'			=> 'website',
	'url'			=> $config['url'] . '/success.php',
	'description' 	=> $config['description'],
	'photo' 		=> $config['url'] . '/app/img/logo.png',
	'title' 		=> 'Thank you for your order - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// success.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/success.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';