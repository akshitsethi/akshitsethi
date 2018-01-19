<?php

/**
 * bland.php
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
	'url'			=> $config['url'] . '/wordpress-theme/bland.php',
	'description' 	=> 'Bland is a clean and minimal blog theme perfect for bloggers who need to create personal blog site with simple creative features. It mixes between modern, classic and minimal styles and will help you create a simple and clean blog.',
	'keywords' 		=> 'bland wordpress theme, bland wp theme free, free wp theme bland, bland wordpress theme, wordpress themes, wp themes, themes for wordpress, download free wordpress themes, wordpress templates, templates for wordpress, wp templates, wordpress themes for business, wordpress themes free, wordpress themes 2018, wordpress themes creative, wordpress themes clean, wordpress themes most popular',
	'photo' 		=> $config['url'] . '/app/img/products/bland.jpg',
	'title' 		=> 'Bland WordPress Theme - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// bland.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/products/bland.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';