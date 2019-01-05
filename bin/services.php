<?php

/**
 * services.php
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';

// Meta
$slug = 'services';


// Open Graph
$open_graph = array(
	'twitter_card' 	=> 'photo',
	'type'			=> 'website',
	'url'			=> $config['url'] . '/services.php',
	'description' 	=> '',
	'keywords' 		=> '',
	'photo' 		=> $config['url'] . '/app/img/logo.png',
	'title' 		=> 'Services - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// services.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/services.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';