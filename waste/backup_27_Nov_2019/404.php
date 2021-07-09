<?php

/**
 * 404.php
 * Page for 404 (page not found) error.
 *
 * @package akshitsethi
 */

// Meta values.
$meta = [
	'title' => 'Page not found (404) - Akshit Sethi'
];

// Header.
require_once __DIR__ . '/app/views/header.php';

// Content.
require_once __DIR__ . '/app/views/404.php';

// Footer.
require_once __DIR__ . '/app/views/footer.php';
