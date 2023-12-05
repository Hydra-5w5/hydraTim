<?php 
/**
* front-page.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    

        <main class="site__main">
            <?php get_template_part('vagues-variantes/vaguesFrontMillieu'); ?>
            <section class="section-accueil">
                <section class="section__presentation">
                    <div class="section__info">
                        <h3>Découvrez la technique d'integration multimédia du Collège Maisonneuve </h3>
                        <div class="conteneur__btn">
                            <div class="btn"><a href="https://www.cmaisonneuve.qc.ca/programme/integration-multimedia/">informations supplémentaire</a></div>
                            <div class="btn"><a href="">explorer les thématiques</a></div>
                        </div>
                    </div>

                    <div class="affiche__img">
                        <img src="<?php header_image(); ?>" alt="">
                    </div>
                    <?php get_template_part('vagues-variantes/vaguesHautFront')?> 
                </section>
                <section>
            
                </section>

                <div class="Conteneur__video">
                    <?php dynamic_sidebar( 'video_acc' ); ?>
                </div>
                
                

                <div class="thematiques-cours">
                    <h2>Thématiques De Cours</h2>
                    <div class="cours">
                        <?php
                            // La requête
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'theme' 
                            );
                            $query = new WP_Query($args);

                            // La boucle
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    get_template_part('template-parts/categorie', 'theme');
                                }
                            } 

                            // Réinitialise les données de publication
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>

                <div class="texte-descriptif">
                    <?php
                        // La requête
                        $args = array(
                            'post_type' => 'post', 
                            'category_name' => 'accueil' 
                        );
                        $query = new WP_Query($args);

                        // La boucle
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                get_template_part('template-parts/categorie', 'accueil');
                            }
                        }

                        wp_reset_postdata();
                    ?>
                </div>
            </section>
        </main>
       
    <?php get_footer();?>   

    

    