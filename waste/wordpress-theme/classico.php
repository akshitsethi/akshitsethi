<?php

/**
 * classico.php
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
	'url'			=> $config['url'] . '/wordpress-theme/classico.php',
	'description' 	=> 'Classico delights visually and functionally, giving you the power to customize your blog with just a click of the mouse. Crafted with bloggers in mind, your readers will immediately fall in love with it\'s classic, clean, and minimal design.',
	'keywords' 		=> 'classico wordpress theme, classico wp theme free, free wp theme classico, classico wordpress theme, wordpress themes, wp themes, themes for wordpress, download free wordpress themes, wordpress templates, templates for wordpress, wp templates, wordpress themes for business, wordpress themes free, wordpress themes 2018, wordpress themes creative, wordpress themes clean, wordpress themes most popular',
	'photo' 		=> $config['url'] . '/app/img/products/classico.jpg',
	'title' 		=> 'Classico WordPress Theme - ' . $config['app']
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// classico.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/products/classico.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';