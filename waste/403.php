<?php

/**
 * 403.php
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

require_once 'init.php';


// meta
// -------------------------------------------------------

$meta = array(
	'slug' 		=> '403',
	'title' 	=> '403 - Forbidden',
	'exception' => true
);


// header.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/header.php';


// 403.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/403.php';


// footer.php
// -------------------------------------------------------

require_once APP_PATH . '/app/views/footer.php';