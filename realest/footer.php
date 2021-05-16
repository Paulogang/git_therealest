		</div><!-- .site-content -->

		<div id="footer">
			<div id="footer-grow">
				<h1>grow with us</h1>
				<?php

					wp_nav_menu( array(
						'container' => '',
						'theme_location'  => 'branding-menu', 
					) );

				?>
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
					<a href="<?php the_field('facebook');?>"><img id="fb-icon" target="_blank" src="<?php echo get_template_directory_uri(); ?>/images/fb-icon-white.png"></a>
					<a href="<?php the_field('instagram');?>"><img id="fb-icon" target="_blank" src="<?php echo get_template_directory_uri(); ?>/images/ig-icon-white.png"></a>
					<a href="<?php the_field('pinterest');?>"><img id="fb-icon" target="_blank" src="<?php echo get_template_directory_uri(); ?>/images/pinterest-icon-white.png"></a>
				</div>
			</div>
		</div>

	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
