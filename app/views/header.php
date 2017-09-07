<?php

/**
 * View: Header.
 *
 * @author akshitsethi
 * -------------------------------------------------------
 */

if ( ! defined( 'APP' ) ) {
	exit;
}

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $config['app'] . ' - ' . $config['tagline']; ?></title>
<meta name="robots" content="noodp">
<meta name="description" content="<?php echo $config['description']; ?>">
<meta name="keywords" content="<?php echo $config['keywords']; ?>">
<link rel="shortcut icon" href="<?php echo $config['url']; ?>/app/img/favicon.png" />
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:300,700" rel="stylesheet" />
<link href="<?php echo $config['url']; ?>/app/css/public.css" rel="stylesheet" id="public-css" type="text/css" media="all" />
</head>
<body>
	<div id="page" class="content">
		<div class="s-container">