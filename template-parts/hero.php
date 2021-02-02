<?php $heroImage = get_field('hero_image');?>
<?php $heroImageAlign = get_field('image_position');?>
<div class="hero" style="background:url(<?php echo $heroImage['url'];?>); background-position: <?php echo $heroImageAlign;?>">
	<div class="container">
		<?php if (is_singular('villa')) {?>
			<div>
				<h1 class="heading heading__5 heading__300"><?php the_title();?></h1>
				<h3 class="heading heading__1"><?php the_field('strapline');?></h3>
			</div>
		<?php } else {;?>
			<h1 class="heading heading__2">Fregate <span><?php the_title();?></span></h1>
		<?php } ;?>

	</div>
	<div class="sub-nav">
		<a href="/private-pool-villa" class="private-pool-villa">Private Pool Villa</a>
		<a href="/private-pool-villa-twin" class="private-pool-villa-twin">Private Pool Villa Twin</a>
		<a href="/banyan-hill-estate" class="banyan-hill-estate">Banyan Hill Estate</a>
	</div>
</div>