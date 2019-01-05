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
	'description' 	=> 'Free & premium WordPress themes made by Akshit Sethi. Select a new WordPress theme and give a refreshing new look to your blog or website.',
	'keywords' 		=> 'wordpress themes, wp themes, themes for wordpress, download free wordpress themes, wordpress templates, templates for wordpress, wp templates, wordpress themes for business, wordpress themes free, wordpress themes 2018, wordpress themes creative, wordpress themes clean, wordpress themes most popular, wordpress themes quotes',
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