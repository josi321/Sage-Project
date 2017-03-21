<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<?php if(is_single()) { ?>

<article class="SingleEntrepeneur img-responsive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header" style="background:url(<?php the_post_thumbnail_url("large") ?> )center !important ; background-size:cover !important;"">
	<div id="trapezoide" class="hidden-xs">
		<?php the_title(); ?>
	</div>
	<div id="triangle-bottomleft" class="hidden-xs"></div>
	</header>
		<div id="trapezoid" class="visible-xs">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php the_excerpt()  ?>
		</div>	
		<div id="triangle-up-left" class="visible-xs"></div>




		<div class="box">
			<div class="entry-content">
					<?php the_content(); ?>
			</div>
		
		</div>
</article>

		<?php		}else{ ?>

		
<div class="col-xs-12 col-sm-6 col-lg-4  entrepeneur" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?> style="background:url(<?php the_post_thumbnail_url("large") ?> )center !important ; background-size:cover !important;"">
	
	<div id="triangle-bottomleft"></div>
	<div id="trapezoid">
		<h1><?php the_title() ?></h1>
		<?php the_excerpt()  ?>
		<a href="<?php echo get_permalink( $post->ID ); ?>">
		READ MORE</a>

	</div>
	
	
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	
</div>
<?php } ?>
