<?php
/**
 * Template for Villa CPT 
 */
get_header();?>

<?php get_template_part('template-parts/hero');?>

<section>
    <div class="container narrow">
        <div class="expanding-text">
            <h1 class="heading heading__3 heading__centered"><?php the_title();?></h1>
            <?php the_field('intro_text');?>
            <a href="" class="read-more">Read More</a>
            <div class="additional-content">
                <?php the_field('read_more_text');?>
                <a href="" class="read-less">Read Less</a>
            </div>    
        </div>
    </div>
</section>

<section class="tabbed">
    <div class="container">
        <div class="tabbed__controls">
            <p class="gallery" data-control="gallery">Gallery</p>
            <p class="video" data-control="video">Video</p>
            <p class="layout" data-control="layout">Layout</p>
            <p class="description" data-control="description">Description</p>
            <p class="service" data-control="service">Service & Rates</p>
        </div>
    </div>
    <div class="tabbed__panel gallery">
        <div class="container">
            <div class="gallery-wrapper">
                <?php $images = get_field('gallery');
                if( $images ):
                    foreach( $images as $image ): ?>
                    <?php $thumbImage = $image['sizes']['medium'];?>
                        <div class="gallery-wrapper__item">
                            <a href="<?php echo $image['url']; ?>" style="background:url(<?php echo $thumbImage;?>);">
                            </a>
                        </div>
                    <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div> 
    <div class="tabbed__panel video">
        <div class="container">
            <?php $propertyVideo = get_field('video');?>
            <div class="wrapper-video">
                <video class="wrapper-video__asset" preload controls>
                    <source src="<?php echo $propertyVideo['url']; ?>" />
                </video>
            </div>	
        </div>
    </div> 
    <div class="tabbed__panel layout">
        <div class="container">
            <?php $propLayout = get_field('property_layout');?>
            <img src="<?= $propLayout['url'];?>" alt=""/>
        </div>
    </div> 
    <div class="tabbed__panel description">
        <div class="container narrow">
            <?php the_field('property_description');?>
        </div>
    </div> 
    
    <div class="tabbed__panel service">
        
        <?php if( have_rows('service_&_rates') ):
        while( have_rows('service_&_rates') ): the_row();?>     
        
        <div class="container narrow rates">
            <div class="rates__item">
            <?php if( have_rows('adult_rates') ):
            while( have_rows('adult_rates') ): the_row();?>   
                <h4 class="heading heading__5"><?php the_sub_field('heading');?></h4>
                <p><?php the_sub_field('intro_text');?></p>
            
                <div class="rates-item head">
                    <p>Validity</p>
                    <p>Rate</p>
                    <p>Minimum Stay</p>                
                </div>
                <?php if( have_rows('rates') ):
                while( have_rows('rates') ): the_row();?>   
                <div class="rates-item">
                    <p><?php the_sub_field('date_from');?> - <?php the_sub_field('date_to');?></p>
                    <p><?php the_sub_field('rate');?> per night</p>
                    <p><?php the_sub_field('minimum_stay');?></p>                
                </div>            
                <?php endwhile; endif;//end of rates loop ?>
            
            <?php endwhile; endif;//end of adult loop ?>
            </div>
            
            <?php if (get_sub_field('child_required')){?>
            
            <div class="rates__item">
            <?php if( have_rows('child_rates') ):
            while( have_rows('child_rates') ): the_row();?>   
                <h4 class="heading heading__5"><?php the_sub_field('heading');?></h4>
                <p><?php the_sub_field('intro_text');?></p>
            
                <div class="rates-item head">
                    <p>Validity</p>
                    <p>Rate</p>
                    <p>Minimum Stay</p>                
                </div>
                <?php if( have_rows('rates') ):
                while( have_rows('rates') ): the_row();?>   
                <div class="rates-item child">
                    <p><?php the_sub_field('date_from');?> - <?php the_sub_field('date_to');?></p>
                    <p><?php the_sub_field('age');?></p>
                    <p><?php the_sub_field('rates_per_child');?></p>                
                </div>            
                <?php endwhile; endif;//end of rates loop ?>
            
            <?php endwhile; endif;//end of child loop ?>
            </div>
            
            <?php }?>
            
        </div>
        <div class="container split">
            <div class="first">
                <?php if( have_rows('included') ):
                while( have_rows('included') ): the_row();?>   
                    <h4 class="heading heading__5">Included</h4>
                    <p><?php the_sub_field('introduction_text');?></p>
                    <ul>
                    <?php if( have_rows('items') ):
                    while( have_rows('items') ): the_row();?>   
                        <li><?php the_sub_field('item');?></li>
                    <?php endwhile; endif;//end of items loop ?>
                    </ul>
                <?php endwhile; endif;//end of included loop ?>
            </div>
            <div class="last">
                <?php if( have_rows('not_included') ):
                while( have_rows('not_included') ): the_row();?>   
                    <h4 class="heading heading__5">Not Included</h4>
                    <p><?php the_sub_field('introduction_text');?></p>
                    <ul>
                    <?php if( have_rows('items') ):
                    while( have_rows('items') ): the_row();?>   
                        <li><?php the_sub_field('item');?></li>
                    <?php endwhile; endif;//end of items loop ?>
                    </ul>
                <?php endwhile; endif;//end of not included loop ?>
            </div>
        </div>
        
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