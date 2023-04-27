<?php 
  /**
  * «template part» gabarit categorie-cours permet d'afficher un article «block»
  * qui s'intégre dans la liste des cours qu'accède avec category/cours
  *
  */
  $titre = get_the_title();
  if (substr($titre,0,1) == '0') {
    $titre = substr($titre,1);
  }
?>

<article class="blocflex__article">
  <a href="<?php the_permalink(); ?>">
    <figure class="blocflex__figure">
      <?php 
        if(has_post_thumbnail()) {
          the_post_thumbnail('thumbnail'); 
          // echo $id_premiere_image;
        }
        else {
          echo get_the_post_thumbnail(27, 'thumbnail'); //image par default
        }
      ?>
    </figure>
    <?php //echo get_the_ID() . " id_premiere_image = " . $id_premiere_image; ?>
    <h5><?= $titre; ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
  </a>
</article>

<?php 
  // the_execerpt() // echo du résumé du post
  // the_content() // echo affiche le contenue complet du post
  // get_... // retourne une chaîne de caractère
?>