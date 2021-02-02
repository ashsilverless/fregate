<div class="container">
	<div class="page-leaders">
		<?php if( have_rows('leaders', 'options') ):
		while( have_rows('leaders', 'options') ): the_row();
		$leaderImage = get_sub_field('image'); ?>
		<div class="page-leaders__item">
			<img src=' <?php echo $leaderImage['url'];?>'/>
			<div class="inner">
				<h3 class="heading heading__5"><?php the_sub_field('title');?></h3>
				<?php the_sub_field('copy');?>
				<a href="<?php the_sub_field('button_target');?>" class="button"> <?php the_sub_field('button_text');?></a>
			</div>
		</div>
		<?php endwhile; endif;?>
	</div>
</div>