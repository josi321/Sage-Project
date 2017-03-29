<?php 
/*
Template Name: page-program
*/
get_header();?>


<?php while ( have_posts() ) : the_post(); ?>


<!-- UPPER BANNER-->
 <?php get_template_part( 'template-parts/upper-banner' ); ?>

<!-- LEARNING SECTION-->
<h2 class=""><?php the_field('learning_heading');?></h2>
<div id="program-learning" >
	
	<!-- FLIP CARDS-->
		<?php for($i=1; $i < 5; $i++) { ?>
		<div class="flip-container card-shadow" ontouchstart="this.classList.toggle('hover');">
  			<div class=" flipper">
  				<!-- Front of Card -->
	    		<div class="front">
	    			<img src="<?php the_field('card_'.$i.'_icon');?>">
	      			<p><?php the_field('card_'.$i.'_front_text'); ?></p>
	    		</div>
	    		<!-- Back of Card -->
	    		<div class="back">
	      			<p><?php the_field('card_'.$i.'_back'); ?></p>
	    		</div>
  			</div>
  		</div>
		<?php } ?>	
</div>
<!-- CALL TO ACTION SECTION-->
<div id="program-cta">
	<h2 class="cta-lead"><?php the_field('cta_heading'); ?></h2>
	<div class="flourish small-centered">
	</div>
	<div class="container row">
		<p class="column"><?php the_field('cta_text_block_1');?></p>
		<p class="column"><?php the_field('cta_text_block_2');?></p>
	</div>
<div id="program-timeline">
	<h2> <?php the_field('timeline_heading');?></h2>

	<!-- PROGRAM TIMELINE GOES HERE -->

	<p> <?php the_field( 'timeline_footer_text'); ?></p>


<!-- LOWER BANNER-->
<?php get_template_part( 'template-parts/lower-banner' ); ?>


<?php endwhile; ?>
<?php get_footer(); ?>