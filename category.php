<?php
/**
 * category.php est le modèle par défaut pour afficher une archive d'articles de catégorie spécifique.
 */

get_header();
?>

<main class="site__main">

<div class="vagues__general">
<?php get_template_part('vagues-variantes/vaguesGeneral')?> 
</div>
    <section class="section__categorie">
        <?php
        $category = get_queried_object();
        ?>
        <div class="conteneur__texte">
            <h1><?php single_cat_title(); ?></h1>
            <p><?php the_archive_description(); ?></p>
        </div> 

        <div class="btns__sessions"> 
            <?php
                // Affiche le menu de choix des projets
                if($category->slug == 'cours') { 
                    echo '<div class="btn__session" id="btn__session1"><h4>session 1</h4></div>';
                    echo '<div class="btn__session" id="btn__session2"><h4>session 2</h4></div>';
                    echo '<div class="btn__session" id="btn__session3"><h4>session 3</h4></div>';
                    echo '<div class="btn__session" id="btn__session4"><h4>session 4</h4></div>';
                    echo '<div class="btn__session" id="btn__session5"><h4>session 5</h4></div>';
                    echo '<div class="btn__session" id="btn__session6"><h4>session 6</h4></div>';
                }
            ?>
        </div>

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
                if ($category->slug === 'profs' || $category->slug === 'cours' ||$category->slug === 'temoignage') {
                    echo '<div class="btn__gauche">Précédent</div>';
                    echo '<div class="btn__droite">Suivant</div>';
                }
            ?>
        </div>

        <div class="choix__projets">
            <?php
                // Affiche le menu de choix des projets
                if($category->slug == 'projets') {
                    wp_nav_menu(array(
                        "menu" => "choix-projets",
                        "container" => "nav",
                        "container_class" => "menu__choix", //pour changer le nom de la class
                    )); 
                }
            ?>
        </div>

    </section>


</main>

<?php get_footer();
?>