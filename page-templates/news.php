<?php
/**
 * ============== Template Name: News Page
 *
 * @package fregateisland
 */
get_header();?>

<?php get_template_part('template-parts/hero');?>

<section>
<div class="container">
    <div class="news-leaders">
        <?php $fregatePosts = new WP_Query(array(
            'post_type'=>'post',
            'post_status'=>'publish',
            'posts_per_page'=>9
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