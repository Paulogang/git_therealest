		</div><!-- .site-content -->

		<div id="footer">
			<div id="footer-grow">
				<h1>grow with us</h1>
				<ul>
					<a href="#">brands promoting</a>
					<br>
					<a href="#">influencers promoting</a>
					<br>
					<a href="#">web affiliation</a>
				</ul>
			</div>
			<div id="footer-navigate">
				<h1>navigate</h1>
				<?php

					wp_nav_menu( array(
						'container' => '',
						'theme_location'  => 'main-menu', 
					) );

				?>
			</div>
			<div id="footer-contact">
				<h1>get in touch</h1>
				<p>email : therealest@gmail.com</p>
				<div id="social-icons">
					<a href="#"><img id="fb-icon" src="<?php echo get_template_directory_uri(); ?>/images/fb-icon-white.png"></a>
					<a href="#"><img id="fb-icon" src="<?php echo get_template_directory_uri(); ?>/images/ig-icon-white.png"></a>
					<a href="#"><img id="fb-icon" src="<?php echo get_template_directory_uri(); ?>/images/pinterest-icon-white.png"></a>
				</div>
			</div>
		</div>

	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
