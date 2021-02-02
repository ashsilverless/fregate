<?php
/**
 * ============== Template Name: Contact Page
 *
 * @package fregateisland
 */
get_header();?>

<div class="hero no-image">
	<div class="container">
			<h1 class="heading heading__2">Fregate <span><?php the_title();?></span></h1>
	</div>
</div>

<section>
<div class="container wide contact">
	<div class="toggle-contact">
		<?php if( have_rows('contact_channels') ):
		$toggleNumber = 1;
		while( have_rows('contact_channels') ): the_row();?>
			<div class="item">
				<div class="question">
					<?php the_sub_field('title');?>
				</div>
				<div class="answer">
					<a href="mailto:<?php the_sub_field('email_address');?>" class="email"><?php the_sub_field('email_address');?></a>
					<a href="tel:<?php the_sub_field('phone_number');?>" class="phone"><?php the_sub_field('phone_number');?></a>
					<p class="address"><?php the_sub_field('address');?></p>
				</div>   
			</div>
		<?php $toggleNumber++; endwhile; endif;?>
	</div>
	<div>
		<?php the_field('introduction_text');?>
		<div class="formWrapper">
			<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>
		</div>
	</div>
</div>

</section>


<?php get_footer();?>