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
			add_image_size('accueil_travaux', 500,500, false);
			add_image_size('slide', 2000,2000, true);
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
	register_post_type( 'social',
		array(
			'labels' => array(
				'name'               => 'Réseaux sociaux',
			    'singular_name'      => 'Réseau social',
			    'add_new'            => 'Ajouter',
			    'add_new_item'       => 'Ajouter un nouveau réseau social',
			    'edit_item'          => 'Modifier un réseau social',
			    'new_item'           => 'Nouveau réseau social',
			    'all_items'          => 'Tous les réseaux sociaux',
			    'view_item'          => 'Voir le réseau social',
			    'search_items'       => 'Chercher les réseaux sociaux',
			    'not_found'          => 'Pas de réseaux sociaux trouvés',
			    'not_found_in_trash' => 'Pas de réseaux sociaux dans la corbeille',
			    'menu_name'          => 'Réseaux sociaux'
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','thumbnail')
		)
	);
}


/*
function char_excerpt( $content ) {
	$content ='toto';

	return $content;
}
add_filter( 'the_excerpt ', 'char_excerpt' );

*/

function wp_trim_all_excerpt($text) { // Creates an excerpt if needed; and shortens the manual excerpt as well
global $post;
if ( '' == $text ) {
$text = get_the_content('');
$text = apply_filters('the_content', $text);
$text = str_replace(']]>', ']]&gt;', $text);
}
$text = strip_shortcodes( $text ); // optional
$text = strip_tags($text);
$excerpt_length = apply_filters('excerpt_length', 20);
$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
$words = explode(' ', $text, $excerpt_length + 1);
if (count($words)> $excerpt_length) {
array_pop($words);
$text = implode(' ', $words);
$text = $text . $excerpt_more;
} else {
$text = implode(' ', $words);
}
return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_trim_all_excerpt'); 



