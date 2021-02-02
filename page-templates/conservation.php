<?php
/**
 * ============== Template Name: Conservation/Experiences Page
 *
 * @package fregateisland
 */
get_header();?>

<?php get_template_part('template-parts/hero');?>

<section>
    <div class="container toggle wide">
    <?php if( have_rows('sections') ):
    while( have_rows('sections') ): the_row();
    $toggleBackground = get_sub_field('background_image');
    $toggleId = get_sub_field('title');
    $toggleId = strtolower($toggleId);
    $toggleId = preg_replace('/\s+/', '', $toggleId);
    ?>   
        <div id="<?php echo $toggleId;?>" class="toggle__wrapper">
            <div class="toggle__item">
            <div class="head" style="background:url(<?php echo $toggleBackground['url'];?>);">
                <div class="trigger">
                    <h2 class="heading heading__5"><?php the_sub_field('title');?></h2>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div> 
            <div class="body">
                <div class="copy">
                    <?php the_sub_field('text');?>
                </div>
                <div class="toggle-carousel owl-carousel">
                    <?php $images = get_sub_field('carousel_images');
                    if( $images ):
                        foreach( $images as $image ): ?>
                            <div class="item">
                                 <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>            
        </div>
        </div>
    <?php endwhile; endif;?>
    </div>
</section>

<section>
    <?php get_template_part('template-parts/small-map');?>
</section>

<?php get_footer();?>