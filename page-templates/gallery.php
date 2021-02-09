<?php
/**
 * ============== Template Name: Gallery Page
 *
 * @package fregateisland
 */
get_header();?>

<?php get_template_part('template-parts/hero');?>

<section>
    <div class="container">
        <div class="gallery-filter">
            <h3 class="heading heading__6">Filter</h3>
            <p class="gallery-filter__trigger active" data-cat="all">All</p>
            <?php if( have_rows('gallery') ):
            while( have_rows('gallery') ): the_row();
            $imageCat = get_sub_field('gallery_category');
            $imageCatLow = strtolower($imageCat);?>
                <p class="gallery-filter__trigger" data-cat="<?php echo $imageCatLow;?>"><?php echo $imageCat;?></p>
            <?php endwhile;
            endif; ?>
        </div>

        <div class="gallery-tab all">
            <div class="gallery-wrapper">
            <?php if( have_rows('gallery') ):
            while( have_rows('gallery') ): the_row();
            $imageCat = strtolower(get_sub_field('gallery_category'));?>
            
            <?php $images = get_sub_field('gallery_images');
            if( $images ):
                foreach( $images as $image ): ?>
                <?php $thumbImage = $image['sizes']['medium'];?>
                    <div class="gallery-wrapper__item">
                        <a href="<?php echo $image['url']; ?>" style="background:url(<?php echo $thumbImage;?>);">
                        </a>
                    </div>
                <?php endforeach;
            endif; ?>
            
            <?php endwhile;
            endif; ?>
            </div>
        </div>
    
        <?php if( have_rows('gallery') ):
        $i = 1;
        while( have_rows('gallery') ): the_row();
        $imageCatLow = strtolower(get_sub_field('gallery_category'));?>
        <div class="gallery-tab <?php echo $imageCatLow;?>">
        <div class="gallery-wrapper gallery-wrapper<?php echo $i;?>">
        <?php $images = get_sub_field('gallery_images');
        if( $images ):
            foreach( $images as $image ): ?>
                <div class="gallery-wrapper__item">
                    <a href="<?php echo $image['url']; ?>" style="background:url(<?php echo $image['url'];?>);">
                    </a>
                </div>
            <?php endforeach;
        endif; ?>
        </div>
        </div>
        <?php $i++; endwhile;
        endif; ?>
 
</div>

   
    
</section>
<script>

</script>

<?php get_footer();?>