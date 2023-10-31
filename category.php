<?php
/**
 * category.php est le modèle par défaut pour afficher une archive d'articles de catégorie spécifique.
 */

get_header();
?>

<main class="site__main">
    <section class="section__categorie">
        <?php
        $category = get_queried_object();
        ?>
        <div class="conteneur__texte">
            <h1><?php single_cat_title(); ?></h1>
            <p><?php the_archive_description(); ?></p>
        </div>

        <!-- Affiche les articles -->
        <div class="conteneur__bloc" id="articles-containeur">
            <?php
            // Affichez les articles de la catégorie initiale (cours)
            $args = array(
                'category_name' => $category->slug,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    get_template_part('template-parts/categorie', $category->slug);
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <!-- Affiche les menus secondaires -->
        <div class="conteneur__menu">
            <?php
            // Correspondance entre les catégories et les noms de menu
            $menu_correspondance = array(
                'etudiants' => 'menu-etudiants',
                'cours' => 'menu-etudiants',
                'profs' => 'menu-etudiants',
                'futur' => 'menu-etudiants',
                'temoignage' => 'menu-etudiants',
                'web' => 'menu-projets',
                'jeux' => 'menu-projets',
                'videos' => 'menu-projets',
                'design' => 'menu-projets',
                '3d' => 'menu-projets'
                // Ajoutez d'autres correspondances au besoin
            );

            // Vérifiez si la catégorie a une correspondance de menu
            if (array_key_exists($category->slug, $menu_correspondance)) {
                $menu_name = $menu_correspondance[$category->slug];
                // Affichez le menu spécifique ici
                wp_nav_menu(array(
                    "menu" => $menu_name,
                    "container" => "nav",
                    "container_class" => "menu__secondaire"
                ));
            }
            ?>
        </div>
    </section>
</main>

<?php get_footer();
?>
