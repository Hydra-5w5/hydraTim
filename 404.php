<?php 
/**
* 404.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    
        <main class="site__erreur">
            <?php get_template_part('vagues-variantes/vaguesHautPiedPage'); ?>
            <div class="info__erreur">
                <h1>Erreur 404 !</h1>
                <h6>Page introuvable, vous pouvez tenter une recherche</h6>
                <?php  get_search_form(); ?> 
            </div>
        </main>

    <?php get_footer(); ?>   
</body>
</html>