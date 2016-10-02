<?php /* Template Name: Menu Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php
			$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>

			<div class="banner" style="background-image: url(<?php echo $feat_image;?>); background-size: cover; background-position: center center;">
				<div class="container">
					<h1><?php the_title(); ?></h1>
					
					<!-- <?php echo do_shortcode("[wppizza type='openingtimes']"); ?> -->
				</div>
			</div>

			<div class="secondary-menu">
				<div class="container">
					<a class="active" data-el="#starters">Starters</a>
					<a data-el="#salad">Salads</a>
					<a data-el="#pizza">Pizza</a>
				</div>
			</div>

			<div class="container sm">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
