<?php

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body>
		<header role="header">
				<div id="nav-bar">
					<a href="index.php">
	         <img id="nav-logo" src="<?php echo get_template_directory_uri(); ?>/images/onlyreal_white_black.png">
	      	</a>
					<div id='nav-list-container'>
						<nav role='navigation' id="nav-list">
							<a href="index.php">home</a>
							<a href="about">about</a>
							<a href="shop">shop</a>
							<a href="index.php">join us</a>
						</nav>
						<label id="burger-menu-icon">&#9776;</label>
					</div>
				</div>
				<div id="nav-bar-mobile" class>
					<nav role='navigation' id="nav-list-mobile">
						<a href="index.php">home</a>
						<a href="index.php">about</a>
						<a href="index.php">shop</a>
						<a href="index.php">join us</a>
					</nav>
				</div>
		</header><!-- #masthead -->
