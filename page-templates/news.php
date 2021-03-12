<?php
/**
 * ============== Template Name: News Page
 *
 * @package fregateisland
 */
get_header();?>

<?php get_template_part('template-parts/hero');?>
<?php 
    $args = array( 
        'hide_empty' => 1 
    );
    $categories = get_categories( $args );
    $catTotal = count( $categories );    
    
    if ($catTotal > 2) { ?>
        
        <div class="container">
            <div class="controls">
                <!-- Get a list of all categories in the database, excluding those not assigned to posts -->
                <span class="filter-heading heading heading__5">Filter</span>
                <ul>
                    <li type="button" data-filter="all">
                        <span class="heading heading__7">All</span>
                    </li>
            
                    <!-- Iterate through each category -->
            
                    <?php foreach($categories as $category): ?>
                    <!-- Output control button markup, setting the data-filter attribute as the category "slug" -->
            
                    <li type="button" data-filter=".<?php echo $category->slug; ?>">
                        <span class="filter-heading heading heading__7"><?php echo $category->name; ?></span>
                    </li>
                    <?php endforeach; ?>
            
                </ul>
            </div>    
        </div>
        
    <?php } else {
        //silence
    }
?>

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
            <div class="news-leaders__item mix <?php foreach( $categories as $category ) {
                echo $category->slug . ' ';
            }?>">
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

<script>
    var mixer = mixitup('.news-leaders', {
    });
    </script>
<?php get_footer();?>