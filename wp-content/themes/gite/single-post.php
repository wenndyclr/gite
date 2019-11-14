<?php  //le fichier single va afficher UN article (ici UN portfolio)
 
 get_header(); //fonction native à WORDPRESS pour faire un include du header ?>

<div class="container">
    <div class="row">
        <?php if(have_posts()):?>
            <?php while(have_posts()): the_post(); ?>
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-12 col-md-6 position-article">
                            <div class="text-center pt-4">
                                <?php the_content(); ?>
                                <?php
                $args=[
                    'menu' 				=> 'Réserver',
                    'theme_location'	=> 'btn_reserve',
                    'container' 		=> 'div',
                    ];
                wp_nav_menu($args); 
            ?>	
                            </div>
                            <p class="price"><?= get_post_meta($post->ID, '_prix', true); ?>€/nuit</p>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-art-gite', 'title' => 'Gite']); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif;?>
    </div>
</div>

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-md-12 separator text-center pt-3">
            <h1>Découvrez plus de photos</h1>
        </div>
        <?php $post = get_post();
        if($post->ID === 47) :?>
        <div class="col-md-12">
            <img id="slide-article" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/slide01.jpg">
        </div>
        <?php endif;?>
    
        <?php $posttwo = get_post();
        if($posttwo->ID === 72) :?>
        <div class="col-md-12">
            <img id="slide-article2" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/slide04.jpg">
        </div>
        <?php endif;?>
    </div>  
</div>



<?php get_footer(); ?>
