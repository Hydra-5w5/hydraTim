<?php 
/**
* front-page.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    

        <main class="site__main">
            <?php get_template_part('vagues-variantes/vaguesHautPiedPage'); ?>
            <section class="section-accueil">
    
                <section class="section__presentation">

                    <?php get_template_part('vagues-variantes/vaguesGeneral')?> 
                    <div class="affiche__img">
                        <div class="app"></div>
                        <img src="<?php header_image(); ?>" alt="">
                    </div>
                    <div class="titre">
                        <h3>Découvrez la technique d'integration multimédia du Collège Maisonneuve </h3>
                    </div>
                </section>

                <div class="conteneur__texte__acc">
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

                <div class="Conteneur__video">
                    <?php dynamic_sidebar( 'video_acc' ); ?>
                </div>

            </section>
        </main>
       
    <?php get_footer();?>   

    

    