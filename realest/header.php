<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.1.1/default/snipcart.css" />
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script async src="https://cdn.snipcart.com/themes/v3.1.1/default/snipcart.js"></script>
	<div id="snipcart" data-config-modal-style="side" data-api-key="NTBiNmFlNWItYmJhNy00OTdjLWJmNWYtZTczNDdjZTllNTM1NjM2MzYwODY1MDUzMjk3NzUy" hidden></div>
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
							<?php

								wp_nav_menu( array(
									'container' => '',
									'theme_location'  => 'main-menu', 
								) );

							?>
						</nav>
						<label id="burger-menu-icon">&#9776;</label>
					</div>
				</div>
				<div id="nav-bar-mobile" class>
					<nav role='navigation' id="nav-list-mobile">
					<?php
						wp_nav_menu( array(
							'container' => '',
							'theme_location'  => 'main-menu', 
						) );

						?>
					</nav>
				</div>
		</header><!-- #masthead -->
