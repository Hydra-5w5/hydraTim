<?php 
/**
* single.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    

        <main class="site__main">
            <!-- <pre>single.php</pre> -->
            <?php if(have_posts()): 
                while(have_posts()): the_post(); ?>
                <!-- template-part pour single -->
                <article class="dans__article"> 
                    <div>
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <?php the_content(); ?>
                </article>
                <hr>
                <?php endwhile; ?>
            <?php endif; ?>
        </main>

    <?php get_footer(); ?>   

</body>
</html>