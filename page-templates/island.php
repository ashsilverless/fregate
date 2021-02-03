<?php
/**
 * ============== Template Name: Island Page
 *
 * @package fregateisland
 */
get_header();?>

<?php get_template_part('template-parts/hero');?>

<section class="map-nav">
    <div class="container">
        <div class="map-nav__map">
            <?php get_template_part('template-parts/detail-map');?>
            
            
            
            
            <!--<?php get_template_part('template-parts/nav-map');?>-->
        </div>
        
        <div class="map-nav__content">
            <?php if( have_rows('carousel_card') ):
            while( have_rows('carousel_card') ): the_row();?>
            <div id="post-<?php the_sub_field('map_item');?>" class="map-nav__content__item">
                <div class="card-carousel owl-carousel">
                    <?php $images = get_sub_field('card_gallery');
                    if( $images ):
                        foreach( $images as $image ): ?>
                            <div class="item">
                                 <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                    <?php endforeach;
                    endif; ?>
                </div>
                <div class="inner">
                    <i class="fas fa-chevron-down"></i>
                    <h2 class="heading heading__5"><?php the_sub_field('title');?></h2>
                    <h3 class="heading heading__6"><?php the_sub_field('sub_title');?></h3>
                    <?php the_sub_field('text');?>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
</section>


<?php get_footer();?>