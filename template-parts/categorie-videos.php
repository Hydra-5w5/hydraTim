<div class="conteneur__projet">
  <article class="blocflex__projets">
    <div class="base__projet">
      <p><?php the_title(); ?></p>
      <?php the_post_thumbnail('medium_large') ?>
    </div>
  </article>
  <div class="info__projet">
    <div class="btn__fermer">&#10005;</div>
    <div class="div__scroll">
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
    </div>
  </div>
</div>
<div class="superposition"></div>