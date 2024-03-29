<?php 
  /**
  * «template part» gabarit categorie-cours permet d'afficher un article «block»
  * qui s'intégre dans la liste des cours qu'accède avec category/cours
  *
  */
  $titre = get_the_title();
?>
<a href="<?php the_permalink(); ?>">
  <article class="blocflex__evenement">
      <div class="blocflex__images">
        <?php the_post_thumbnail('medium_large') ?>
      </div>
      <div class="blocflex__description">
        <h4><?= $titre; ?></h4>
        <p><?= wp_trim_words(get_the_excerpt(), 20) ?></p>
      </div>
  </article>
</a>