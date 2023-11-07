<?php 
/**
* front-page.php est le modèle par défaut du thème 4w4
*/ 
?>

    <?php get_header(); ?>    

        <main class="site__main">

            <section class="section__presentation">
                <div class="section__info">
                    <h3>Découvrez La Technique D'integration Multimédia Du Collège Maisonneuve </h3>
                    <div class="conteneur__btn">
                        <div class="btn"><a href="https://www.cmaisonneuve.qc.ca/programme/integration-multimedia/">informations supplémentaire</a></div>
                        <div class="btn"><a href="">explorer les thématiques</a></div>
                    </div>
                </div>

                <div class="affiche__img">
                    <img src="<?php header_image(); ?>" alt="">
                </div>
                <div>
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a8dadc" fill-opacity="1" d="M0,256L34.3,261.3C68.6,267,137,277,206,245.3C274.3,213,343,139,411,101.3C480,64,549,64,617,69.3C685.7,75,754,85,823,112C891.4,139,960,181,1029,202.7C1097.1,224,1166,224,1234,197.3C1302.9,171,1371,117,1406,90.7L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
             </div>
            </section>
            
            <div class="Conteneur__video">
                <?php dynamic_sidebar( 'video_acc' ); ?>
            </div>
            
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a8dadc" fill-opacity="1" d="M0,256L34.3,261.3C68.6,267,137,277,206,245.3C274.3,213,343,139,411,101.3C480,64,549,64,617,69.3C685.7,75,754,85,823,112C891.4,139,960,181,1029,202.7C1097.1,224,1166,224,1234,197.3C1302.9,171,1371,117,1406,90.7L1440,64L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
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
    