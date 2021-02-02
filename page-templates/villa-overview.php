<?php
/**
 * ============== Template Name: Villa Overview Page
 *
 * @package fregateisland
 */
get_header();?>

<?php get_template_part('template-parts/hero');?>

<section>
    <div class="container narrow">
        <div class="expanding-text">
            <?php the_field('intro_text');?>
            <a href="" class="read-more">Read More</a>
            <div class="additional-content">
                <?php the_field('read_more_text');?>
                <a href="" class="read-less">Read Less</a>
            </div>    
        </div>
    </div>
</section>

<section>
    <div class="villa-leaders">
        <?php if( have_rows('villa_links') ):
        while( have_rows('villa_links') ): the_row();
        $villaImage = get_sub_field('image'); ?>
        <a href="<?php the_sub_field('target');?>">
            <div class="villa-leaders__item"  style="background:url(<?php echo $villaImage['url'];?>);">
                <div class="inner">
                    <h3 class="heading heading__5"><?php the_sub_field('title');?></h3>
                </div>
            </div>
        </a>
        <?php endwhile; endif;?>
    </div>
</section>

<section>
    <?php get_template_part('template-parts/leaders');?>
</section>

<section>
    <?php get_template_part('template-parts/small-map');?>
</section>

<?php get_footer();?>