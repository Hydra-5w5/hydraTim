<?php
/**
 * category.php est le modèle par défaut pour afficher une archive d'articles de catégorie spécifique
 * afficher une archive d'articles de catégorie spécifique
 */
?>

<?php get_header(); ?>

<main class="site__main">
    <section class="section__categorie">

        <?php
        $category = get_queried_object();
        ?>
        <div class="conteneur__texte">
            <h1><?php single_cat_title(); ?></h1>
            <p><?php the_archive_description(); ?></p>
        </div>

        <div class="conteneur__option">
            <?php
                // Vérifiez si la catégorie a un slug égal à "cours"
                if ($category->slug === 'cours') {
                    ?>
                    <select name="sessions" id="sessions">
                        <option value="1" selected>Session 1</option>
                        <option value="2">Session 2</option>
                        <option value="3">Session 3</option>
                        <option value="4">Session 4</option>
                        <option value="5">Session 5</option>
                        <option value="6">Session 6</option>
                    </select>
                    <?php
                }
            ?>
        </div>

        <div class="conteneur__bloc">
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
                endif;
            ?>
        </div>
        
        <div class="conteneur__menu">                
            <?php 
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
        </div>

    </section>
</main>

<?php get_footer(); ?>   