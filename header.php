<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<title> <?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/default.js"></script>
	<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="header">
		<a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
		<?php wp_nav_menu(array('container' => 'nav', 'container_id' => 'main-menu', 'container_class' => '', 'theme_location' => 'main')); ?>
	</header>