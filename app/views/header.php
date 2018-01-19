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
<?php if ( isset( $open_graph ) && isset( $open_graph['url'] ) ) : ?>
<meta property="og:url" content="<?php echo $open_graph['url']; ?>">
<?php endif; ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php if ( isset( $open_graph ) && isset( $open_graph['title'] ) ) { echo $open_graph['title']; } else { echo $config['app'] . ' - ' . $config['tagline']; } ?>">
<?php if ( isset( $open_graph ) && isset( $open_graph['description'] ) ) : ?>
<meta property="og:description" content="<?php echo $open_graph['description']; ?>">
<?php else : ?>
<meta property="og:description" content="<?php echo $config['description']; ?>">
<?php endif; ?>
<?php if ( isset( $open_graph ) && isset( $open_graph['photo'] ) ) : ?>
<meta property="og:image" content="<?php echo $open_graph['photo']; ?>">
<?php endif; ?>
<link rel="shortcut icon" href="<?php echo $config['url']; ?>/app/img/favicon.png" />
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:300,700" rel="stylesheet" />
<link href="<?php echo $config['url']; ?>/app/css/public.css" rel="stylesheet" id="public-css" type="text/css" media="all" />
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=144689472913932';
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
							<li><span><a href="<?php echo $config['url']; ?>/services.php"<?php if ( isset( $slug ) && 'services' == $slug ) { echo ' class="active"'; } ?>>Services</a></span></li>
						</ul>

						<a href="javascript:;" class="trigger-menu">
							<span></span>
						</a><!-- .trigger-menu -->
					</div><!-- .navigation -->

					<div class="mobile-content"></div><!-- .mobile-content -->
				</header><!-- .header -->
			</div><!-- .s-container -->
		</div><!-- .section-top -->