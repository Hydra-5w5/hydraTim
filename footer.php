
<footer class="site__footer">
  <!-- Affiche les menus secondaires -->
  <div class="conteneur__menu">
    <?php
      if (get_queried_object()) {
        $category = get_queried_object();
        // Correspondance entre les catégories et les noms de menu
        $menu_correspondance = array(
          'etudiants' => 'menu-etudiants',
          'cours' => 'menu-etudiants',
          'profs' => 'menu-etudiants',
          'futur' => 'menu-etudiants',
          'temoignage' => 'menu-etudiants',
          'web' => 'menu-projets',
          'jeux' => 'menu-projets',
          'videos' => 'menu-projets',
          'design' => 'menu-projets',
          '3d' => 'menu-projets'
          // Ajoutez d'autres correspondances au besoin
        );

        // Vérifiez si la catégorie a une correspondance de menu
        if (array_key_exists($category->slug, $menu_correspondance) && $category->slug !== 'projets') {
            $menu_name = $menu_correspondance[$category->slug];
            // Affichez le menu spécifique ici
            wp_nav_menu(array(
              "menu" => $menu_name,
              "container" => "nav",
              "container_class" => "menu__secondaire"
            ));
        }
      }
    ?>
  </div>
  
    <?php 
    if (!is_front_page()) {
      get_template_part('vagues-variantes/vaguesHautPiedPage');
    }
    ?> 

  <div class="contenu__footer">
    <div class="footer__logo">
      <?php the_custom_logo(); ?>
    </div>

    <div class="adresse section">
      <h2>Adresse</h2>
      <p>3800 Avenue Sherbrooke Est </p>
      <p>Montréal,QC</p> <p>H1X 2A2</p>
    </div>

    <div class="rejoindre section">
      <h2>Nous Rejoindre</h2>
      <div class="liste__joindre">
        <p><a href="#">Inscription</a></p>
        <p><a href="#">Visite Virtuelle</a></p>
        <p><a href="#">Porte Ouverte</a></p>
      </div>
    </div>

    <div class="recherche__footer section">
      <h2>Recherche</h2>
      <?php  get_search_form(); ?> 
    </div>
  </div>


  <div class="suivezNous section">
    <h2>Suivez Nous</h2>
    <div class="reseaux">

    <?php wp_nav_menu(array(
        "menu" => "footer-icon",
        "container" => "nav",
        "container_class" => "menu__icon", //pour changer le nom de la class
    )); ?>

    </div>
  </div>

<?php get_template_part('vagues-variantes/vaguesBasPiedPage')?> 

</footer>

<?php wp_footer(); ?>
