<?php

/**
 * index.php
 * Main page for the application.
 *
 * @package akshitsethi
 */

// Meta values.
$meta = [
	'title' => 'Akshit Sethi - Full Stack Developer'
];

// Header.
require_once __DIR__ . '/app/views/header.php';

// Content.
require_once __DIR__ . '/app/views/index.php';

// Footer.
require_once __DIR__ . '/app/views/footer.php';
