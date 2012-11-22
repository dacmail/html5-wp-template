<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<title> <?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" charset="utf-8" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/favicon.ico" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script charset="utf-8" src="<?php bloginfo('template_directory')?>/js/default.js"></script>
	<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<header id="header">
		<a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
		<? wp_nav_menu(array('container' => 'nav', 'container_id' => 'main-menu', 'container_class' => '', 'theme_location' => 'main')); ?>
	</header>