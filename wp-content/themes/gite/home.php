<?php
    /*
    *Template Name: Home
    */
get_header();
?>

<div class="container-fluid">
    <div class="row pt-4 pb-4">
        <div class="col-md-6 cst-position-rel">
        <h1 id='bienvenue'></h1>
            <div class="cst-position-abs">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spéci Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imp</p>
            </div>
        </div>
        <div class="col-md-6 cst-bkg-home">
        </div>
    </div>
</div>

<div class="container">
    <div class="row pt-4 pb-5">
        <?php $args = [ 'post_type' => 'post', 
                'orderby'           => 'date', 
                'order'             => 'ASC' 
            ];
        ?>

        <?php   
        $ma_boucle = new WP_Query($args);
        if( $ma_boucle->have_posts() ) : ?>
        <?php while( $ma_boucle->have_posts() ) : $ma_boucle->the_post(); ?>
            <div class="col-6 text-center pb-4">
                <h1><?php the_title(); ?></h1>
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-art ', 'title' => 'Gite']); ?></a>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</div>  

<div class="container-fluid">
    <div class="row cst-pt">
        <div class="col-md-6 col-maps">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44866.69689296862!2d0.9654315367229184!3d45.34540964938669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ff392d490f85a3%3A0xfeaca186c04d5484!2s24160%20Saint-Germain-des-Pr%C3%A9s!5e0!3m2!1sfr!2sfr!4v1572358392690!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-6" id="contact">
            <div class="row">
                <div class="col-md-12">
                    <h1>Demande de réservation ou besoin d'informations ? C'est ici ! </h1>
                </div>
            </div>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer email">      
                </div>
                <div class="form-group">
                    <label>Sujet</label>
                    <input type="text" class="form-control"  placeholder="Objet">
                </div>
                <div class="form-group">
                    <div><label>Votre message</label></div>
                    <textarea></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>  
    </div>
</div>

<?php get_footer(); ?>