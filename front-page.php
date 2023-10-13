<?php 
/**
* front-page.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    

        <main class="site__main">
            <div class="Conteneur__video">
                <?php dynamic_sidebar( 'video_acc' ); ?>
            </div>

        <div class="thematiques-cours">
            <h2>Thématiques De Cours</h2>
            <div class="cours">
                <div class="boite">
                    <h5>Conception Web</h5>
                </div>

                <div class="boite">
                    <h5>Programmation</h5>
                </div>

                <div class="boite">
                    <h5>Codage Créatif</h5>
                </div>

                <div class="boite">
                    <h5>Design et Illustration</h5>
                </div>

                <div class="boite">
                    <h5>Portfolio et Carrière</h5>
                </div>

                <div class="boite">
                    <h5>Vidéo</h5>
                </div>

                <div class="boite">
                    <h5>Jeux vidéo et Illustration</h5>
                </div>

                <div class="boite">
                    <h5>Animation 2D - 3D</h5>
                </div>
            </div>
        </div>

        <div class="texte-descriptif">
            <p>
                Le multimédia fait référence à la combinaison de différents types de
                médias, tels que le texte, l’image, la vidéo, l’audio et d’autres
                éléments interactifs, dans un seul support ou système. Il vise à créer
                une expérience riche et immersive pour les utilisateurs.
            </p>
        </div>

        <div>
            <h3>"Créez, Intégrez, Émerveillez </h3>
            <h3> La Puissance du Multimédia!" </h3>
        </div>

        </main>

    <?php get_footer(); ?>   
    