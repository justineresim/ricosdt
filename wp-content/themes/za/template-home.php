<?php /* Template Name: Home Page Template */ get_header(); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="slider" style="background-image: url('https://s-media-cache-ak0.pinimg.com/originals/95/54/38/95543815b0002e6da1c9c044f0154a0d.jpg')">

			<div class="slider-content-container">
				<div class="slider-content">
				<h1>Eat some Za</h1>
				<h2>Delicious thin crust pizza</h2>
				<a class="g-btn g-btn-tertiary">See Menu</a>
				</div>
			</div>

		</div>

		<div class="slider-nav">
			<a class="active" data-slide="1"></a>
			<a data-slide="2"></a>
			<a data-slide="3"></a>
		</div>

		<div class="slider-arrows-container right">
			<div class="slider-arrows">
				<a class="right ion-arrow-right-c"></a>
			</div>
		</div>

		<div class="slider-arrows-container left">
			<div class="slider-arrows">
				<a class="left ion-arrow-left-c"></a>
			</div>
		</div>



<?php endwhile; ?>

<?php else: ?>

		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>			

<?php endif; ?>

	