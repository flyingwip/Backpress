<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<title>Gridster | WP backbone Theme</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic' rel='stylesheet' type='text/css'>
    
	<link href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">	
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</head>

<body>
	<?php get_template_part( 'templates' ); ?>
	<div class="container">
		<div class="header">
			<h1> [Website - Titel] </h1>
			<div class="menu">
				<nav>
				<ul>
					<a href="../#home"><li> home </li></a>
					<a href="../#lifstyle"><li> lifestyle </li></a>
					<a href="../#gossip"><li> gossip </li></a>			
					<a href="../#hollywood"><li> hollywood </li></a>			
				</ul>
				</nav>
				<div class="searchie">
					<span class="ion-android-search" id="btn_search"></span>
					<input type="text" name="s" id="s" >
				</div>
			</div>	
		</div>		 	

