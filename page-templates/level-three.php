<?php
/**
 * ============== Template Name: Level Three Page
 *
 * @package fregateisland
 */
get_header();?>

<?php get_template_part('template-parts/hero');?>

<section class="intro">
	<div class="container narrow">
		<h1 class="heading heading__3">Fregate <span><?php the_title();?></span></h1>
		<?php the_field('main_text');?>
	</div>
	
</section>

<section>
	<?php get_template_part('template-parts/small-map');?>
</section>

<?php get_footer();?>