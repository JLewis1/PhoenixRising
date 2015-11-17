<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="<?php bloginfo('template_directory'); ?>/css/reset.css" rel="stylesheet" type="text/css"/>
	<link href="<?php bloginfo('template_directory'); ?>/css/slick.css" rel="stylesheet" type="text/css"/>
	<link href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" rel="stylesheet" type="text/css"/>
	<title><?php bloginfo('title')?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<meta name="description" content="Phoenix Rising - The food, fashion, and makeup blog by Roxana Dadashlo">
	<meta name="keywords" content="Phoenix Rising, food, fashion, makeup, Roxana Dadashlo, Toronto, Ontario, Canada, blog">
	<meta name="author" content="Roxana Dadashlo">
	<?php wp_head()?>

</head>

<div id="phoenix-rising">
	<header>
		<div id="site-logo"><a href="<?php echo home_url('/')?>"><img src="<?php bloginfo('template_directory'); ?>/img/main_logo.png" alt="<?php bloginfo('name')?>"></a></div>
		<div id="main-nav">
			<ul>
				<?php wp_nav_menu(array(
					'menu_id' => 'main-nav'
				));?>
				
			</ul>
		</div>
		<div class="clear"></div>
	</header>