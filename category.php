<?php

/**
 * category.php est le modèle par défaut pour afficher une archive d'articles de catégorie spécifique.
 */

get_header();
?>

<main class="site__main">

    <div class="vagues__general">
        <?php get_template_part('vagues-variantes/vaguesGeneral') ?>
    </div>
    <?php
    if (!is_front_page()) {
        get_template_part('vagues-variantes/vaguesHautPiedPage');
    }
    ?>
    <section class="section__categorie">
        <?php
        $category = get_queried_object();
        ?>
        <div class="conteneur__texte">
            <h1><?php single_cat_title(); ?></h1>
            <p><?php the_archive_description(); ?></p>
        </div>


        <?php
        // Affiche le menu de choix des projets
        if ($category->slug == 'cours') {
            echo '<div class="btns__sessions">';
            echo '<div class="titre__session"><h5>Sessions:</h5></div>';
            echo '<div class="btn__session" id="btn__session1"><h4>1</h4></div>';
            echo '<div class="btn__session" id="btn__session2"><h4>2</h4></div>';
            echo '<div class="btn__session" id="btn__session3"><h4>3</h4></div>';
            echo '<div class="btn__session" id="btn__session4"><h4>4</h4></div>';
            echo '<div class="btn__session" id="btn__session5"><h4>5</h4></div>';
            echo '<div class="btn__session" id="btn__session6"><h4>6</h4></div>';
            echo '</div>';
        }
        ?>


        <!-- classe personnalisée basée sur la catégorie actuelle -->
        <?php
        $category_class = 'class__' . $category->slug;
        ?>
        <!-- Affiche les articles -->
        <div class="conteneur__bloc <?= $category_class ?>" id="articles-containeur">
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

            // Vérifie si la catégorie actuelle est "prof" ou "cours" pour afficher les boutons
            if ($category->slug === 'profs' || $category->slug === 'temoignage') {
                echo '<div class="btn__gauche"></div>';
                echo '<div class="btn__droite"></div>';
            }
            if ($category->slug === 'profs') {
             ?>
            <div class="indication-swipe">
                
                <div class="fleche fleche-droite"></div>
                Glissez à droite ou à gauche
                <div class="fleche fleche-gauche"></div>
            </div>
        </div>
            <?php }?>
        <?php
        // Affiche le menu de choix des projets
        if ($category->slug == 'projets') {
            echo '<div class="choix__projets">';
            wp_nav_menu(array(
                "menu" => "choix-projets",
                "container" => "nav",
                "container_class" => "menu__choix", //pour changer le nom de la class
            ));
        }
        ?>

        <!-- Affiche les menus secondaires -->
        <?php
        if (get_queried_object()) {
            // $category = get_queried_object();
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
            if (array_key_exists($category->slug, $menu_correspondance) && $category->slug !== 'projets') {
                $menu_name = $menu_correspondance[$category->slug];
                echo '<div class="conteneur__menu">';
                wp_nav_menu(array(
                    "menu" => $menu_name,
                    "container" => "nav",
                    "container_class" => "menu__secondaire"
                ));
                echo '</div>';
            }
        }
        ?>

    </section>
</main>

<?php get_footer();
?>