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
            $i = 1;
            while( have_rows('carousel_card') ): the_row();?>
            <div id="<?php 
            $post_objects = get_sub_field('map_item');
            if( $post_objects ): 
            foreach( $post_objects as $post): 
            setup_postdata($post); 
            echo 'post-' . get_the_ID() . ' '; 
            endforeach; 
            wp_reset_postdata();
            endif;?>" class="<?php 
            $post_objects = get_sub_field('map_item');
            if( $post_objects ): 
            foreach( $post_objects as $post): 
            setup_postdata($post); 
            echo 'post-' . get_the_ID() . ' '; 
            endforeach; 
            wp_reset_postdata();
            endif;?> map-nav__content__item" ref-slide="post-<?php the_sub_field('map_item');?>">
                <div class="card-carousel owl-carousel">
                    <?php $images = get_sub_field('card_gallery');
                    if( $images ):
                        foreach( $images as $image ): ?>
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php $i++; endforeach;
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

<script>
const slides = document.querySelectorAll(".map-nav__content__item");
const markers = document.querySelectorAll(".map-item");
observer = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      var currentSlide = entry.target.classList;
      var iterator = currentSlide.values();
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        //document.getElementById(currentSlide).classList.add('active');
        for (let classItem of iterator) {
              document.getElementById(classItem).classList.add('active');
        }
      } else {
        entry.target.classList.remove("active");
        //document.getElementById(currentSlide).classList.remove('active');
        for (let classItem of iterator) {
              document.getElementById(classItem).classList.remove('active');
        }
      }
    });
  },
  {
    threshold: [0.5],
    //trackVisibility: true,
    //delay:100
  });
var s = 0;
slides.forEach(slide => {
  observer.observe(slide);
});


</script>


<?php get_footer();?>