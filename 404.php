<?php 
/**
* 404.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    
        <main class="site__erreur">
            <?php get_template_part('vagues-variantes/vaguesGeneral')?> 
            <?php get_template_part('vagues-variantes/vaguesHautPiedPage'); ?>
            <div class="info__erreur">
                <div class="img__anim">
                    <img src="http://cidweb37.sg-host.com/wp-content/uploads/2023/12/CooperHahaha-1.gif" alt="">
                </div>
                <h1>Erreur 404 !</h1>
                <h6>Page introuvable, vous pouvez tenter une recherche</h6>
                <?php  get_search_form(); ?> 
            </div>
        </main>

    <?php get_footer(); ?>   
</body>
</html>