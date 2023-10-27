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

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
// function cidweb_modifie_requete_principal( $query ) {
//     if (    $query->is_home() // si page d'accueil
//             && $query->is_main_query()  // si requête principale
//             && ! is_admin() ) { // si pas dans le tableau de bord
//       // $query->set permet de modifier la requête principale
//       $query->set( 'category_name', 'accueil' ); // filtre les articles de categorie «4w4» slug
//       $query->set( 'orderby', 'title' ); // trier selon le champ titre
//       $query->set( 'order', 'ASC' ); // trier en ordre ascendant
//       }
//      }
//      add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );

/**
 * Permet de personnaliser cahqun des titre du menu cours
 * @param $title : titre menu a modifier
 *        $item : la structure «li» du menu
 *        $args : objet décrivant l'ensemble des menus de notres cours
 *        $depth : Niveau de profandeur du menu
 * 
 */
// function perso_menu_item_title($title, $item, $args) {
//     // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
//     if($args->menu == 'cours') { // on filtre uniquement le menu «cours»
//         // Modifier la longueur du titre en fonction de vos besoins
//         $sigle = substr($title, 4, 3);
//         $title = substr($title, 7);
//         $title = "<code>" . $sigle . "</code>" . "<p>" . wp_trim_words($title, 1, ' ... ') . "</p>"; // A modifier pour le «tp1» 
//     }

//     else if($args->menu == 'note-4w4') {
//         $title = $title;

//         if (substr($title,0,1) == '0') {
//           $title = substr($title,1);
//         }
        
//     }

//     return $title;
// }
// add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);

/**
 * Ajouter la description et l'image mise en avant à chacun des choix du menu « evenement »
 */
// function add_menu_description_and_thumbnail( $item_output, $item, $depth, $args ) {
//     if ( 'evenements' == $args->menu || 'archives' == $args->menu || 'ateliers' == $args->menu && !is_page_template('template-atelier.php')) 
//     {
//         $post_thumbnail_id = get_post_thumbnail_id( $item->object_id );
//         if ( $post_thumbnail_id ) {
//             $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );
//             $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span><img src="' . esc_url( $post_thumbnail_url[0] ) . '" class="menu-thumbnail" />', $item_output );
//         } else {
//             $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span><figure class = "img__archive"></figure>', $item_output );
//         }
//     }
//     return $item_output;
// }

// add_filter( 'walker_nav_menu_start_el', 'add_menu_description_and_thumbnail', 10, 4 );

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

////////////////////////    Liste des sessions     /////////////////////////////
add_action('wp_ajax_load_session_articles', 'load_session_articles');
add_action('wp_ajax_nopriv_load_session_articles', 'load_session_articles');

function load_session_articles() {
    $selectedSession = $_GET['selectedSession'];

    // Effectuez une nouvelle requête pour obtenir les articles de la session sélectionnée
    $args_session = array(
        'category_name' => 'session' . $selectedSession,
        'orderby' => 'title',
        'order' => 'ASC'
    );
    $query_session = new WP_Query($args_session);

    if ($query_session->have_posts()) {
        ob_start();

        while ($query_session->have_posts()) {
            $query_session->the_post();
            get_template_part('template-parts/categorie', 'cours');
        }

        wp_reset_postdata();
        $result = ob_get_clean();
        echo $result;
    }

    die();
}

function load_jquery() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_jquery');
