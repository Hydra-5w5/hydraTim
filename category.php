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

        <!-- Affiche le menu à option -->
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

            if ($query->have_posts() && $category->slug != 'cours') :
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

<script>
    function loadSessionArticles(selectedSession) {
        var articlesContaineur = document.getElementById('articles-containeur');
        articlesContaineur.innerHTML = '<span class="texte__chargement">Chargement des articles de la session ' + selectedSession + '...</span>';

        // Chargez dynamiquement les articles de session en fonction de l'option sélectionnée
        fetch('<?php echo admin_url('admin-ajax.php'); ?>?action=load_session_articles&selectedSession=' + selectedSession)
            .then(response => response.text())
            .then(data => {
                articlesContaineur.innerHTML = data;
            });
    }

    (function () {
        var sessionsSelect = document.getElementById('sessions');
        if (sessionsSelect) {
            // Gérer le changement de session lors du chargement de la page
            loadSessionArticles(sessionsSelect.value);

            // Ajouter un gestionnaire d'événements pour le changement de session
            sessionsSelect.addEventListener('change', function () {
                loadSessionArticles(this.value);
            });
        }
    })();
</script>
