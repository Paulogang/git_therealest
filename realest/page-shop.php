<?php

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<div id="shop-hero-banner">
			<div id="shop-hero-banner-paragraph" class="shop-hero-banner-1">
				<h1 id="gear-up">gear up</h1>
				<h1 id="stand-out">stand out</h1>
			</div>
		</div>

		<div id="shop-all-section">
			<div class="product-title" id="tee">
				<h1>tees</h1>
			</div>
			<div class="product-image-container">

			
			<?php $query = new WP_Query(array(
					'post_type' => 'product', 
					'posts_per_page' => 6,
					'tax_query' => array(
					array(
						'taxonomy' => 'collections',
						'field'    => 'slug',
						'terms' => 'tees',
					)
				))); ?>

				<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>

				<a href="<?php the_permalink();?>" class="product">
					<img class="product-image" src="<?php the_post_thumbnail_url('large');?>">
				</a>

				<?php wp_reset_postdata(); ?>
				<?php endwhile; endif; ?>

			</div>

			<div class="product-title" id="hoodie">
				<h1>hoodies</h1>
			</div>
			<div class="product-image-container">
					
			<?php $query = new WP_Query(array(
					'post_type' => 'product', 
					'posts_per_page' => 6,
					'tax_query' => array(
					array(
						'taxonomy' => 'collections',
						'field'    => 'slug',
						'terms' => 'hoodies',
					)
				))); ?>

				<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>

				<a href="<?php the_permalink();?>" class="product">
					<img class="product-image" src="<?php the_post_thumbnail_url('large');?>">
				</a>

				<?php wp_reset_postdata(); ?>
				<?php endwhile; endif; ?>

			</div>

			<div class="product-title" id="hat">
				<h1>hats & bands</h1>
			</div>
			<div class="product-image-container">
					
			<?php $query = new WP_Query(array(
					'post_type' => 'product', 
					'posts_per_page' => 6,
					'tax_query' => array(
					array(
						'taxonomy' => 'collections',
						'field'    => 'slug',
						'terms' => 'hats',
					)
				))); ?>

				<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>

				<a href="<?php the_permalink();?>" class="product">
					<img class="product-image" src="<?php the_post_thumbnail_url('large');?>">
				</a>

				<?php wp_reset_postdata(); ?>
				<?php endwhile; endif; ?>

			</div>

		</div>

		<?php
			get_footer();
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
