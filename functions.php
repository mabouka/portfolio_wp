<?php
add_action('after_setup_theme','portfolio_setup');
add_action( 'init', 'create_post_type' );



	
function portfolio_setup(){
		add_theme_support( 'post-thumbnails' );
		add_theme_support('automatic-feed-links');
		add_theme_support('post-formats', array ('aside', 'link', 'gallery', 'status','quote', 'image' ));
		
		add_theme_support( 'custom-background',array(
			'default-color' => '000000',
			'default-image' => get_template_directory_uri() . '/img/bg.png',));


		if (function_exists('add_image_size')){
			add_image_size('accueil_travaux', 222,400, false);
			add_image_size('grande', 544,1500, false);
			add_image_size('blog', 544, 1000, false);
			
		}
		
		register_nav_menu('header-menu', __('Header Menu', 'portfolio'));
		
		
	}


function create_post_type() {
	register_post_type( 'travaux',
		array(
			'labels' => array(
				'name'               => 'Travaux',
			    'singular_name'      => 'Travail',
			    'add_new'            => 'Ajouter',
			    'add_new_item'       => 'Ajouter un nouveau travail',
			    'edit_item'          => 'Modifier un travail',
			    'new_item'           => 'Nouveau travail',
			    'all_items'          => 'Tous les travaux',
			    'view_item'          => 'Voir le travail',
			    'search_items'       => 'Chercher les travaux',
			    'not_found'          => 'Pas de travaux trouvés',
			    'not_found_in_trash' => 'Pas de travaux dans la corbeille',
			    'menu_name'          => 'Travaux'
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor','excerpt', 'thumbnail')
		)
	);
}