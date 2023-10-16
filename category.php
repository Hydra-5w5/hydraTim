<?php
/**
 * category.php est le modèle par défaut pour afficher une archive d'articles de catégorie spécifique
 * afficher une archive d'articles de catégorie spécifique
 */
?>

<?php get_header(); ?>

<main class="site__main">
    <section>
        <?php
        $category = get_queried_object();
        ?>
        <h1><?php single_cat_title(); ?></h1>
        
        <?php
            $args = array(
                'category_name' => $category->slug,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    get_template_part('template-parts/categorie', $category->slug);
                    // Affichez le contenu de chaque article ici
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Aucun article trouvé pour cette catégorie.</p>';
            endif;

            // Correspondance entre les catégories et les noms de menu
            $menu_correspondance = array(
                'etudiants' => 'menu-etudiants',
                'projets' => 'menu-projets'
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
    </section>
</main>

<?php get_footer(); ?>   