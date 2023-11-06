<?php 
/**
* single.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    

        <main class="site__main">
            <?php if(have_posts()): 
                while(have_posts()): the_post(); ?>
                    <article class="dans__article"> 
                        <div>
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <div>
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