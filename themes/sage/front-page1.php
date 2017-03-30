<?php
/**
 * This is front-page.php
 *
 * 
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
 <?php get_template_part( 'template-parts/upper-banner' ); ?>
<div id="page" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</article>
	</div>
 <div class="homeWrap">
<div class="homeFlex">

	<?php	$query_events = new WP_Query(array(
				"posts_per_page" => 1,
				'post_type' => 'events',
				"order"=> "ASC"
				));?>
				<?php while ( $query_events->have_posts() ) : $query_events->the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
					<?php endwhile; ?>
<div class="flexcolumn">
<div class="size50">
<?php	$query_entre = new WP_Query(array(
				"posts_per_page" => 1,
				'post_type' => 'entrepreneur',
				"order"=> "ASC"
				));?>
				<?php while ( $query_entre->have_posts() ) : $query_entre->the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
					<?php endwhile; ?>
</div>
<div class="size50 second">					

					<?php	$query_news = new WP_Query(array(
				"posts_per_page" => 1,
				'post_type' => 'news',
				"order"=> "ASC"
				));?>
				<?php while ( $query_news->have_posts() ) : $query_news->the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
					<?php endwhile; ?>
</div>
</div>
</div>
</div> 
<?php get_template_part( 'template-parts/lower-banner' ); ?>


<?php get_footer();

?>

