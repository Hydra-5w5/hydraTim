<?php 
  /**
  * «template part» gabarit categorie-galerie permet d'afficher la galerie d'un article
  * cet article contient uniquement une galerie
  *
  */
?>
<article class="blocflex__galerie">
    <h3><?php the_title() ?></h3>
    <div class="conteneur-boutons">
  <button class="bouton gauche" ></button>
  <button class="bouton droite" ></button>
</div>
    <div><?php the_content(); ?></div>
</article>

