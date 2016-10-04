<?php /* Template Name: Home Page Template */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div>

	<?php

	$count = 0;

	$value = get_field( "slider_title" );

	// check if the repeater field has rows of data
	if( have_rows('home_slider') ):

	 	// loop through the rows of data
	    while ( have_rows('home_slider') ) : the_row();

	        ?>

	        <div class="slider slide-<?php echo $count; if($count===0){ echo ' active';}?>" style="background-image: url('<?php echo the_sub_field('slider_image') ?>')">
				<div class="slider-content-container">
					<div class="slider-content">
					<?php if(get_sub_field('slider_title')){ ?>
						<h1><?php echo the_sub_field('slider_title') ?></h1>
					<?php } ?>
					<?php if(get_sub_field('slider_sub_title')){ ?>
						<h2><?php echo the_sub_field('slider_sub_title') ?></h2>
					<?php } ?>
					<?php if(get_sub_field('button_link') && get_sub_field('button_label')){ ?>
						<a href="<?php echo the_sub_field('button_link'); ?>" class="g-btn g-btn-tertiary"><?php echo the_sub_field('button_label') ?></a>
					<?php } ?>
					</div>
				</div>
			</div>

	<?php $count ++;

	    endwhile;

	endif;

?>

</div>

<div class="slider-nav">
	<?php
	for ($x = 0; $x < $count; $x++) { 
		if($x===0){ 
			$class = 'active';
		}else{
			$class = ' ';
		}
		?>
		<a class="<?php echo $class; ?>" data-slide="slide-<?php echo $x; ?>"></a>
	<?php } ?>
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

<?php endif; ?>





	