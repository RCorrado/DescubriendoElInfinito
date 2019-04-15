<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Description" content="Reviews, escritos, análisis de un Geek en potencia.">
	<meta name="keywords" content="geek, comics, cine, películas, series, literatura, libros, politica, filosofia">
	<meta author="Raúl Corrado">
	<title><?php bloginfo('name');?></title>
	<?php wp_head();?>
</head>
<body>
	<header class="light-white box-shadow">
		<nav>
			<a href="<?php echo esc_url(home_url('/'));?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-blog-alternative.png" id="logo" alt="logo"></a>
			<ul class="list titles">
				<span class="burger fas fa-bars solid-black text-white"></span>
				<?php wp_nav_menu(array('theme_location' => 'navegation'));?>
			</ul>
			<span class="burger fas fa-bars"></span>
		</nav>
	</header>
	<div class="body">