<?php 
/*
Template Name: page-contact
*/
get_header();?>


<?php while ( have_posts() ) : the_post(); ?>
<h2><?php the_field( 'contact_page_heading' ); ?></h2>
<div class="flourish small-centered">
	</div>

<!--FORM-->
<div class="contact-form small-5 small-centered"><?php echo do_shortcode(get_field("form_shortcode")) ?> </div>

<!-- LOWER BANNER-->
<?php get_template_part( 'template-parts/lower-banner' ); ?>


<?php endwhile; ?>
<?php get_footer(); ?>


