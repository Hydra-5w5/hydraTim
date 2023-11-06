  <article class="blocflex__profs">  
    <div class="sujet__profs">
      <h3><?php the_field('sujet'); ?></h3> 
      <?php
        $logo = get_field('logo');
        if ($logo) {
          echo '<img src="' . $logo['url'] . '" alt="' . $logo['alt'] . '" />';
        }
      ?>
    </div>

    <div class="photo__profs">
      <?php the_post_thumbnail('medium_large') ?>
    </div>

    <div class="info__profs">
      <h3><?php the_title(); ?></h3> 
      <p><?php the_content() ?></p>
    </div>
    
  </article>