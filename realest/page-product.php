	<?php
		get_header();
	?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<div id="product_section_1">
			<div id="product_section_1_left">
				<img id="single-product-image" src="<?php echo get_template_directory_uri(); ?>../images/products/tees/black-tee-5.png">
			</div>
			<div id="product_section_1_right">
				<div id="product-page-titles">
					<div id="product-name">
						<h1>The realest<br>Original Tee</h1>
					</div>
					<div id="product-price">
						<h1>$55.00</h1>
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
						<a class="size-btn" id="btn-sm">sm</a>
						<a class="size-btn" id="btn-md">md</a>
						<a class="size-btn" id="btn-lg">lg</a>
						<a class="size-btn" id="btn-xl">xl</a>
						<a class="size-btn" id="btn-xxl">xxl</a>
					</div>
					<a class="size-btn" id="btn-cart">add to cart</a>
				</div>
				<div id="product-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>
		</div>

		<?php
			get_footer();
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
