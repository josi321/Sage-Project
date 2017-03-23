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
<?php 
$color =  get_field("trapezoid");
	

if(is_single()) { ?>



<article class="SingleEntrepeneur img-responsive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header" style="background:url(<?php the_post_thumbnail_url("large") ?> )center !important ; background-size:cover !important;"">
	<div id="trapezoide" class="hide-for-small-only" style="background:<?php echo $color ?>" >
		<div class="labelTitleEntrepeneur">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php the_excerpt()  ?>
		</div>
		</div>
	</div>
	<div id="triangle-bottomleft" class="hide-for-small-only" style="background: linear-gradient(to right top, <?php echo $color ?> 50%, transparent 50%);"></div>
	</header>
		<div id="trapezoid" class="show-for-small-only" style="background:<?php echo $color ?>">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php the_excerpt()  ?>
		</div>	
		<div id="triangle-up-left" class="show-for-small-only" style="background: linear-gradient(to right bottom, <?php echo $color ?> 50%, transparent 50%);"></div>




		<div class="box">
			<div class="entry-content">
					<?php the_content(); ?>
			</div>
		
		</div>
</article>

		<?php		}else{ ?>

		
<div class="small-12 medium-6 large-4 columns  entrepeneur" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?> style="background:url(<?php the_post_thumbnail_url("large") ?> )top right !important ; background-size:contain !important;"">
	
	<div id="triangle-bottomleft" style="background: linear-gradient(to right top, <?php echo $color ?> 50%, transparent 50%);"></div>
	<div id="trapezoid" style="background:<?php echo $color ?>">
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
