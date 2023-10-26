<?php 
  /**
  * «template part» gabarit categorie-cours permet d'afficher un article «block»
  * qui s'intégre dans la liste des cours qu'accède avec category/cours
  *
  */
  $titre = get_the_title();
  $sigle = substr($titre, 0, 7);
  $aTrouver = '(';
  $postion = strpos(substr($titre, 7), $aTrouver);
  $titre_long = substr($titre, 7, $postion);
  $duree = substr($titre, strpos($titre, '('));
?>
<a href="<?php the_permalink(); ?>">
  <article class="blocflex__cours">
    <div class="sigle"><h5><?= $sigle; ?></h5></div>
    <div class="titre__cours"><h6><?= $titre_long; ?></h6></div>
  </article>
</a>