<?php
/**
 * Template for News CPT 
 */
get_header();?>

<?php get_template_part('template-parts/hero');?>

<section>
	<div class="container narrow">
		<div class="meta__date"><?php echo get_the_date(); ?></div>
		<?php the_field('main_copy');?>
	</div>
</section>

<section>
	<div class="container toggle narrow">
		<div class="toggle-carousel owl-carousel">
			<?php $images = get_field('gallery');
			if( $images ):
				foreach( $images as $image ): ?>
					<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endforeach;
			endif; ?>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="section-heading">
			<h3 class="heading heading__4">Other Articles</h3>
		</div>
		<div class="news-leaders">
			<?php 
			$currentID = get_the_ID();
			$fregatePosts = new WP_Query(array(
				'post_type'=>'post',
				'post_status'=>'publish',
				'posts_per_page'=> 9,
				'post__not_in' => array($currentID)
			));
			if ( $fregatePosts->have_posts() ) :
			while ( $fregatePosts->have_posts() ) :
			$fregatePosts->the_post();
			$postImage = get_field('hero_image');
			?>
				<div class="news-leaders__item">
					<div class="image">
						<a href="<?php the_permalink();?>">
								<img <?php $thisImage = $postImage;?>
								src="<?php echo $thisImage['url'];?>"
								title="<?php echo $thisImage['title'];?>"
								alt="<?php echo $thisImage['alt'];?>"
								/>
						</a>
					</div>
					<p class="entry-date"><?php echo get_the_date(); ?></p>
					<h2 class="heading heading__3 heading__300"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<p class="entry-excerpt"><?php echo the_excerpt(); ?></p>
					<a href="<?php the_permalink();?>" class="more">Read More</a>
				</div>
			<?php endwhile; wp_reset_postdata();endif; ?>
		</div>
	</div>
</section>

<?php get_footer();?>