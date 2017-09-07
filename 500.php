<?php

/**
 * 500.php
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';


// meta
// -------------------------------------------------------

$meta = array(
	'slug' 		=> '500',
	'title' 	=> '500 - Internal Server Error',
	'exception' => true
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// 500.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/500.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';