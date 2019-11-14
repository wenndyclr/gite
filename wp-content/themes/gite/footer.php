<div class="container-fluid bckgd-footer">
    <div class="row pt-3">
        <div class="col-md-4 text-center">
            <h3 class="blue">- Contact -</h3>
            <p>Adresse postale</p>
            <p>Téléphone</p>
        </div>
        <div class="col-md-4 text-center">
            <h3 class="blue">- À propos -</h3>
            <?php
                $args=[
                    'menu' 				=> 'Menu à propos',
                    'theme_location'	=> 'propos_menu',
                    'container' 		=> 'div',
                    ];
                wp_nav_menu($args); 
            ?>	
        </div>
        <div class="col-md-4 text-center">
            <h3 class="blue">- Nos gites -</h3>
            <?php
                $args=[
                    'menu' 				=> 'Menu nos gites',
                    'theme_location'	=> 'gites_menu',
                    'container' 		=> 'div',
                    ];
                wp_nav_menu($args); 
            ?>	
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/app.js" type="text/javascript"></script>

</body>
</html>