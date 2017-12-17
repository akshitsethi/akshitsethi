<?php

/**
 * themes.php
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';

// Meta
$slug = 'themes';


// Open Graph
$open_graph = array(
	'twitter_card' 	=> 'photo',
	'type'			=> 'website',
	'url'			=> $config['url'] . '/themes.php',
	'description' 	=> $config['description'],
	'photo' 		=> $config['url'] . '/app/img/logo.png',
	'title' 		=> 'WordPress Themes - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// themes.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/themes.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';