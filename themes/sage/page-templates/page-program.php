<?php 
/*
Template Name: page-program
*/
get_header();?>


<?php while ( have_posts() ) : the_post(); ?>


<!-- UPPER BANNER-->
 <?php get_template_part( 'template-parts/upper-banner' ); ?>

<!-- LEARNING SECTION-->

<div id="program-learning" >
	<h2 class="small-centered small-12"><?php the_field('learning_heading');?></h2>
	<div class="card-wrap card-section flip-container" ontouchstart="this.classList.toggle('hover');">
		<div class="flipper row">
			<?php for($i=1; $i < 5; $i++) { ?>
					<div class="card front columns large-3 medium-6 small-12">
						<img src="<?php the_field('card_'.$i.'_icon');?>">
						<p><?php the_field('card_'.$i.'_front_text'); ?></p>
					</div>
					<div class="card back columns large-3 medium-6 small-12">
						<p><?php the_field('card_'.$i.'_back'); ?></p>
					</div> 
			<?php } ?>
		</div>
	</div>		
</div>
<!-- CALL TO ACTION SECTION-->
<div id="program-cta">
	<h2 class="cta-lead small-12 column"><?php the_field('cta_heading'); ?></h2>
	<div class="flourish small-centered">
	</div>
	<div class="container row small-4">
		<p class="column"><?php the_field('cta_text_block_1');?><p>
		<p class="column"><?php the_field('cta_text_block_2');?><p>
	</div>
<div id="program-timeline">
	<h2> <?php the_field('timeline_heading');?></h2>

	<!-- PROGRAM TIMELINE GOES HERE -->

	<p> <?php the_field( 'timeline_footer_text'); ?>
</div>

<!-- LOWER BANNER-->
<?php get_template_part( 'template-parts/lower-banner' ); ?>


<?php endwhile; ?>
<?php get_footer(); ?>
