<article class="blocflex__projets">
  <div class="base__projet">
    <p><?php the_title(); ?></p>
    <?php the_post_thumbnail('medium_large') ?>
  </div>

  <div class="info__projet">
    <div class="btn__fermer">&#10005;</div>
    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>
  </div>
</article>
<div class="superposition"></div>