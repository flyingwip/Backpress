<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<title>Front-end routing test</title>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</head>

<body>
	<header class="wrapper">
		<h1>The 90s</h1>

		<hr>
		
		<nav>
			<ul class="no-bullets row">
				<li class="has-gutter"><a href="#bugs-life">A Bugs Life</a></li>
				<li class="has-gutter"><a href="#inside-out">Inside Out</a></li>
				<li class="has-gutter"><a href="#kungfu-panda">Kung Fu Panda</a></li>
				<li class="has-gutter"><a href="#toy-story">Toy Story</a></li>
				<li class="has-gutter"><a href="#else">Else</a></li>				

			</ul>
		</nav>

		<hr>
	</header>