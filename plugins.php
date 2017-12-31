<?php

/**
 * plugins.php
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';

// Meta
$slug = 'plugins';


// Open Graph
$open_graph = array(
	'twitter_card' 	=> 'photo',
	'type'			=> 'website',
	'url'			=> $config['url'] . '/plugins.php',
	'description' 	=> 'Free & premium WordPress plugins made by Akshit Sethi. Select from the available plugins to add extended features to your WordPress blog or website.',
	'keywords' 		=> 'wordpress plugins, wp plugins, free wordpress plugins, free wp plugins, wordpress plugins free, wordpress plugins development, wordpress plugins for blogs, wordpress plugins best, plugins de wordpress, wordpress plugins github',
	'photo' 		=> $config['url'] . '/app/img/logo.png',
	'title' 		=> 'WordPress Plugins - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// plugins.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/plugins.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';