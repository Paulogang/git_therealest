<?php
		get_header();
	?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<div id="product_section_1">
			<div id="product_section_1_left">
                <?php if ( has_post_thumbnail() ) : 
                    the_post_thumbnail('large', ['class' => 'single-product-image', 'title' => get_the_title() ]);
                endif; ?>
			</div>
			<div id="product_section_1_right">
				<div id="product-page-titles">
					<div id="product-name">
						<h1><?php the_title();?></h1>
					</div>
					<div id="product-price">
						<h1><?php the_field('price') ?>$</h1>
					</div>
				</div>
				<div class="buying-options-label">
					<p>style: navy blue</p>
				</div>
				<div id="color-buttons">
					<button type="button" id="btn-blue"></button>
					<button type="button" id="btn-green"></button>
					<button type="button" id="btn-red"></button>
					<button type="button" id="btn-burgundy"></button>
					<button type="button" id="btn-black"></button>
					<button type="button" id="btn-grey"></button>
				</div>

				<div class="buying-options-label">
					<p>size</p>
				</div>
				<div id="size-btn-container">
					<div id="size-btn-group">
						<a class="size-btn" data-size="Small"  d="btn-sm">sm</a>
						<a class="size-btn" data-size="Medium" id="btn-md">md</a>
						<a class="size-btn" data-size="Large"   id="btn-lg">lg</a>
						<a class="size-btn" data-size="Xlarge"  id="btn-xl">xl</a>
						<a class="size-btn" data-size="XXlarge" id="btn-xxl">xxl</a>
					</div>

                    <button id="btn-cart" class="size-btn snipcart-add-item"
                        data-item-id="<?php echo $post->ID ?>"
                        data-item-name="<?php the_title();?>"
                        data-item-url="<?php echo get_permalink(); ?>"
                        data-item-price="<?php the_field('price'); ?>"
                        data-item-description="<?php echo get_the_content();?>"
                        data-item-image="<?php echo the_post_thumbnail_url('large'); ?>"
                        data-item-custom2-name="Size"
                        data-item-custom2-options="Small|Medium|Large"
                        data-item-custom2-value="Medium">
                        add to cart
                    </button>
				</div>
				<div id="product-description">
					<p><?php the_content();?></p>
				</div>
			</div>
		</div>

		<?php
			get_footer();
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
