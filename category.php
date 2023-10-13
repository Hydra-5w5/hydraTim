<?php 
/**
* category.php est le modèle par défaut pour afficher une archive d'articles de catégorie spécifique
* afficher une archive d'articles de catégorie spécifique
*/ 
?>

<?php get_header(); ?>    
<main class="site__main">
    <p>une categorie</p>
    <section>
        <?php
            $category = get_queried_object();
            get_template_part( 'template-parts/categorie', $category->slug );
        ?>
    </section>
</main>
<?php get_footer(); ?>   
</body>
</html>
