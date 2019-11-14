<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Gite</title><!--TO DO : FAIRE UNE FONCTION POUR TITLE-->
	<meta name="description" content="Gite"/> <!--TO DO : CHANGER LA DESCRIPTION-->
    <meta name="author" content="Wenndy Carlier">
	<meta charset="<?php bloginfo('charset'); ?>">
	<LINK REL=”SHORTCUT ICON” href="<?php echo get_bloginfo( 'template_directory' ); ?>/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro|Big+Shoulders+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro|Big+Shoulders+Display|Julius+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

</head>

<body>

    <header>
            <nav class="text-center pt-3" id="cstNavBar">
                <?php
                    $args=[
                        'menu' 				=> 'Menu principal',
                        'theme_location'	=> 'main_menu',
                        'container' 		=> 'div',
                        ];
                    wp_nav_menu($args); 
                ?>		
            </nav>
    </header>