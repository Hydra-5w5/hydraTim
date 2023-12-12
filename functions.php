<?php
/**
* L'ensemble des fonctions du thème 
*/  

/**
 * Ajouter le css
 */
function enfiler_css() {
    wp_enqueue_style('hydra5w5', // identificateur
                    get_template_directory_uri() . '/style.css', // adresse url de style.css
                    array(), // définir les dépendances
                    filemtime(get_template_directory() . '/style.css'), // le calcul de la version du fichier css
                    false); // média
    wp_enqueue_style('google_font',
                    "https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap",
                    false);
}
add_action( 'wp_enqueue_scripts', 'enfiler_css' );

/**
 * Ajouter le js
 */
function enfiler_js() {
    wp_enqueue_script('hydra5w5', // identificateur
                    get_template_directory_uri() . '/js/script.js', // adresse url de style.css
                    array(), // définir les dépendances
                    filemtime(get_template_directory() . '/js/script.js'), // le calcul de la version du fichier css
                    true); // média
}
add_action( 'wp_enqueue_scripts', 'enfiler_js' );

/* ------------------------------------------ Enregistrement des menus */

function enregistre_menus(){
    register_nav_menus( array(
        'menu_entete' => 'Menu entete',
        'menu_sidebar'  => 'Menu sidebar',
    ) );
}
add_action( 'after_setup_theme', 'enregistre_menus', 0 );

/* ------------------------------------------ add_theme_support */
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 500,
    'width'  => 500,
) );

/* permet d'utiliser la fonction image en arrière plan dans personnaliser */
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // l'image peut etre cropper

/* ------------------------------------------ enregistrement des widgets */
// Enregistrer le sidebar
function enregistrer_sidebar() {
    
    register_sidebar( array(
        'name' => __( 'Vidéo Accueil', 'nom-de-mon-theme' ),
        'id' => 'video_acc',
        'description' => __( 'Un zone de widget pour afficher une Vidéo dans la page accueil.', 'nom-de-mon-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

}
add_action( 'widgets_init', 'enregistrer_sidebar' );


/* ------------------------------------------ afficher uniquement les catégories dans le formulaire de recherche */

function search_categories_only($query) {
  if ($query->is_search) {
    $query->set('category_name', $query->query_vars['s']);
    $query->set('posts_per_page', -1);
  }
  return $query;
}
add_filter('pre_get_posts', 'search_categories_only');



