<?php
add_theme_support('post-thumbnails');

//main menu
function menu(){
	register_nav_menu('main_menu', 'Menu principal');
}
add_action('init', 'menu');


//Menu à propos footer (mentions légales)
function menuAPropos(){
	register_nav_menu('propos_menu', 'Menu à propos');
}
add_action('init', 'menuAPropos');


//Menu à propos footer (mentions légales)
function menuNosGites(){
	register_nav_menu('gites_menu', 'Menu nos gites');
}
add_action('init', 'menuNosGites');


//Menu à propos footer (mentions légales)
function btnReserver(){
	register_nav_menu('btn_reserve', 'Réserver');
}
add_action('init', 'btnReserver');



/**
 * METABOX POUR AFFICHER DES CHAMPS SUPPLEMENTAIRES PERSONNALISES
 * @link https://developer.wordpress.org/reference/functions/next_post_link/
 */
add_action('add_meta_boxes', 'initialisation_metabox');

function initialisation_metabox(){
	add_meta_box(
		'meta_portfolio',
		'Prix',
		'formulaire_input',
		'post', //Dans quel type de contenu on veut que le champ apparaisse 
		'advanced',
		'default',
		'sauvegarde_input'
	);
}

function formulaire_input($post){//global de WP pour les boucles. Elle récupère la table post (c'est un select mais c'est WP qui le fait) 
	$prix = get_post_meta($post->ID, '_prix', true); //$post->ID : je récupère l'id en cours
	echo '<label for="prix">Prix du projet :</label>';
	echo '<input name="prix" type="number" value="' . $prix . '" placeholder="Ajouter un prix"> €';
}// -> ca ajoute un champ de saisie de prix quand on va modifier un portfolio dans le backoffice

// création de la fonction de sauvegarde de ce qu'on va rentrer dans l'input (le prix sera affiché dans le champ) :
add_action('save_post', 'sauvegarde_input');

function sauvegarde_input($post_id){ //c'est un paramètre natif à WP qui va récupérer l'id du post en cours mais 
	if( isset($_POST['prix']) && is_numeric($_POST['prix']) ){
		update_post_meta($post_id, '_prix', $_POST['prix']);
	}
}


