<?php

/**
 * cancel.php
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';

// Meta
$slug = 'cancel';


// Open Graph
$open_graph = array(
	'twitter_card' 	=> 'photo',
	'type'			=> 'website',
	'url'			=> $config['url'] . '/cancel.php',
	'description' 	=> $config['description'],
	'photo' 		=> $config['url'] . '/app/img/logo.png',
	'title' 		=> 'Your order could not be processed - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// cancel.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/cancel.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';