<?php

/**
 * 404.php
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';


// meta
// -------------------------------------------------------

$meta = array(
	'slug' 		=> '404',
	'title' 	=> '404 - Page not Found',
	'exception' => true
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// 404.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/404.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';