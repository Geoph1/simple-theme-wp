<!doctype html>
<html>
<head>
	<!-- Служебная информация -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">

	<!-- Заголовок, описание -->
	<title><?php is_home() ? bloginfo('name') : wp_title(''); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="">
	
	<link rel="shortcut icon" href="<?php get_template_directory(); ?>/img/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<!-- Стили -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">

	<?php wp_head(); ?>
</head>

<body>
	<div id="preloader"></div>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md3">
					<div id="logo"></div>
				</div>
				<div class="col-md-9">
					<nav class="menu"></nav>
				</div>
			</div>
		</div>
	</header>
