<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico?v=4" />
</head>
<body>
<div class="page">
	<div id="underconstruction"></div>
	<div id="wrap">
	<div id="head">
		<div id="logo">
			<a href="/"></a>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		<div class="clear"></div>
</div>