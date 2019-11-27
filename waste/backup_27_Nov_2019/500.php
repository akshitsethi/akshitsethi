<?php

/**
 * 500.php
 * Page for 500 (server) error.
 *
 * @package akshitsethi
 */

// Meta values.
$meta = [
	'title' => 'Server error (500) - Akshit Sethi'
];

// Header.
require_once __DIR__ . '/app/views/header.php';

// Content.
require_once __DIR__ . '/app/views/500.php';

// Footer.
require_once __DIR__ . '/app/views/footer.php';
