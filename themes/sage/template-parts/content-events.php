<?php
/**
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<?php 
$color =  get_field("label");
	

if(is_single()) { ?>



<article class="SingleEntrepeneur " id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header" style="background:url(<?php the_post_thumbnail_url("large") ?> )center !important ; background-size:cover !important;"">
	<div id="trapezoide" class="hide-for-small-only" style="background:<?php echo $color ?>" >
		<div class="labelTitle">
		<?php 
		$test =	get_field('date');
		$test = DateTime::createFromFormat("dmY",$test);
		echo "<div class='date date-events' style='color:$color'><h2>".$test->format("d")."</h2>";
		echo "<p>".$test->format("M")." ".$test->format("Y")."</p></div>";	
			?>
		<div>	
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php the_excerpt()  ?>
		</div>
		</div>
		
	</div>
	<div id="triangle-bottomleft" class="hide-for-small-only" style="background: linear-gradient(to right top, <?php echo $color ?> 50%, transparent 50%);"></div>
	</header>
		<div id="trapezoid" class="show-for-small-only" style="background:<?php echo $color ?>">
		<div class="labelTitle">
			<?php 
		$test =	get_field('date');
		$test = DateTime::createFromFormat("dmY",$test);
		echo "<div class='date date-events' style='color:$color'><h2>".$test->format("d")."</h2>";
		echo "<p>".$test->format("M")." ".$test->format("Y")."</p></div>";	
			?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
		<?php the_excerpt()  ?>
		
		</div>	
		<div id="triangle-up-left" class="show-for-small-only" style="background: linear-gradient(to right bottom, <?php echo $color ?> 50%, transparent 50%);">
		</div>




		<div class="box">
			<div class="entry-content">
					<?php the_content(); ?>
			</div>
		
		</div>
</article>

		<?php		}else{ ?>

		
<div class="small-12 medium-6 large-6 columns  entrepeneur events" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?> style="background:url(<?php the_post_thumbnail_url("large") ?> )top right !important ; background-size:cover !important;"">
	
	<div id="triangle-bottomleft" style="background: linear-gradient(to right top, <?php echo $color ?> 50%, transparent 50%);">

	<?php 
		$test =	get_field('date');
		$test = DateTime::createFromFormat("dmY",$test);
		echo "<div class='date date-events'><h2>".$test->format("d")."</h2>";
		echo "<p>".$test->format("M") .$test->format("Y")."</p></div>";	
	?>

	</div>
	<div id="trapezoid" style="background:<?php echo $color ?>">
		<h1><?php the_title() ?></h1>
		<?php the_excerpt()  ?>
		<a href="<?php echo get_permalink( $post->ID ); ?>">
		REGISTER</a>

	</div>
	
	
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	
</div>
<?php } ?>
