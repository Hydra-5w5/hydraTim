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

  <script>
document.querySelectorAll('.blocflex__profs').forEach(function(prof) {
    prof.addEventListener('click', function() {
        let info = this.querySelector('.info__profs');
        if (info.style.display === 'flex') {
            info.style.display = 'none';
            this.style.width = '300px';  // taille originale
        } else {
            info.style.display = 'flex';
            this.style.width = '500px';  // agrandir taille
        }
    });
});
  </script>