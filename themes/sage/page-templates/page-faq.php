<?php 
/*
Template Name: page-faq
*/
get_header();?>


<?php while ( have_posts() ) : the_post(); ?>

<h2><?php the_title(); ?></h2>
<div class="flourish small-centered"></div>

<!-- ACCORDION -->
<!-- <h2 id="accordion" class="docs-heading" data-magellan-target="accordion"><a href="#accordion"></a>Frequently Asked Questions</h2> -->
					<ul class="accordion" data-accordion role="tablist">
					  <li class="accordion-item" data-accordion-item>
					    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
					    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Accordion 1</a>
					    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
					    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
					      Panel 1. Lorem ipsum dolor
					    </div>
					  </li>
					  <li class="accordion-item" data-accordion-item>
					    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
					    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Accordion 2</a>
					    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
					    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
					      Panel 2. Lorem ipsum dolor
					    </div>
					  </li>
					  <li class="accordion-item" data-accordion-item>
					    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
					    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Accordion 3</a>
					    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
					    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
					      Panel 3. Lorem ipsum dolor
					    </div>
					  </li>
					</ul>

<!-- <?php endwhile; ?> -->
<?php get_footer(); ?>
