<?php 
/**
* category.php est le modèle par défaut pour afficher une archive d'articles de catégorie specifique
* afficher une archive d'articles de catégorie spécifique
*/ 
?>

    <?php get_header(); ?>    
    <main class="site__main">
        <p>une categorie</p>
        <section>
            <?php
                $category = get_queried_object();
                // Permet de definir la nouvelle requête
                $args = array(
                    'category_name' => $category->slug,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                // Création d'une nouvelle requête
                $query = new WP_Query( $args );
                // Tout le reste de l'extraction de données est basés sur wp_query 
                // sur la nouvelle requête de contenue dans wp_query
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post(); 
                        get_template_part( 'template-parts/categorie', $category->slug );
                    ?>
                    <?php endwhile; ?>
                <?php endif;
            wp_reset_postdata();?>
        </section>
    </main>
    <?php get_footer(); ?>   
</body>
</html>
