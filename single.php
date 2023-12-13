<?php 
/**
* single.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    
   
        <main class="site__single">
        <?php get_template_part('vagues-variantes/vaguesGeneral')?> 
        <?php get_template_part('vagues-variantes/vaguesHautPiedPage'); ?>
            <?php if(have_posts()): 
                while(have_posts()): the_post(); ?>
                    <article class="dans__article"> 
                        <div class="image__single">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <div class="texte__single">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </main>

    <?php get_footer(); ?>   

</body>
</html>