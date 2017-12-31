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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-11594809-18"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-11594809-18');
</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php if ( isset( $open_graph ) && isset( $open_graph['title'] ) ) { echo $open_graph['title']; } else { echo $config['app'] . ' - ' . $config['tagline']; } ?></title>
<meta name="robots" content="noodp">
<?php if ( isset( $open_graph ) && isset( $open_graph['description'] ) ) : ?>
<meta name="description" content="<?php echo $open_graph['description']; ?>">
<?php else : ?>
<meta name="description" content="<?php echo $config['description']; ?>">
<?php endif; ?>
<?php if ( isset( $open_graph ) && isset( $open_graph['keywords'] ) ) : ?>
<meta name="keywords" content="<?php echo $open_graph['keywords']; ?>">
<?php else : ?>
<meta name="keywords" content="<?php echo $config['keywords']; ?>">
<?php endif; ?>
<link rel="shortcut icon" href="<?php echo $config['url']; ?>/app/img/favicon.png" />
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:300,700" rel="stylesheet" />
<link href="<?php echo $config['url']; ?>/app/css/public.css" rel="stylesheet" id="public-css" type="text/css" media="all" />
</head>
<body>
	<div id="page">
		<div class="section-top">
			<div class="s-container">
				<header class="header">
					<div class="header-logo">
						<a href="<?php echo $config['url']; ?>">
							<img src="<?php echo $config['url']; ?>/app/img/logo-80px.jpg" class="logo" alt="<?php echo $config['app']; ?>" />
						</a>
					</div><!-- .header-logo -->

					<div class="navigation">
						<ul>
							<li><span><a href="<?php echo $config['url']; ?>/themes.php"<?php if ( isset( $slug ) && 'themes' == $slug ) { echo ' class="active"'; } ?>>Themes</a></span></li>
							<li><span><a href="<?php echo $config['url']; ?>/plugins.php"<?php if ( isset( $slug ) && 'plugins' == $slug ) { echo ' class="active"'; } ?>>Plugins</a></span></li>
						</ul>
					</div><!-- .navigation -->
				</header><!-- .header -->
			</div><!-- .s-container -->
		</div><!-- .section-top -->