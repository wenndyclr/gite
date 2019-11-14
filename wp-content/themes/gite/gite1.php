<?php
    /*
    *Template Name: gite1
    */
get_header();
?>

<?php $args = [ 'post_type'         => 'post', 
                //'posts_per_page'  => 3, 
                'orderby'           => 'date', 
                'order'             => 'DESC' 
            ];
            ?>

<?php
     $ma_boucle = new WP_Query($args);
    if( $ma_boucle->have_posts() ) : ?>
        <?php while( $ma_boucle->have_posts() ) : $ma_boucle->the_post(); ?>
            <div class="col-12 col-lg-9" style="border-top: solid 0.5px grey;">
                <p><?php the_content(); ?></p>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>