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

<article class="blocflex__article">
  <a href="<?php the_permalink(); ?>">
    <h5><?= $sigle; ?></h5>
    <h6><?= $titre_long; ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
  </a>
</article>