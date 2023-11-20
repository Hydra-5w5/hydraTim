

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
      <!-- <div class="reseau"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="393.195" height="64.195" viewBox="0 0 393.195 64.195">
  <g id="Illustration_1" data-name="Illustration 1" transform="translate(31.598 31.598)">
    <g id="Groupe_165" data-name="Groupe 165" transform="translate(-31.598 -31.598)">
      <rect id="Rectangle_263" data-name="Rectangle 263" width="63.195" height="63.195" rx="11.869" fill="#161919"/>
      <g id="Groupe_164" data-name="Groupe 164" transform="translate(14.292 14.773)">
        <g id="Groupe_163" data-name="Groupe 163">
          <path id="Tracé_135" data-name="Tracé 135" d="M17.714,13.948a4.219,4.219,0,1,0,4.22,4.22A4.219,4.219,0,0,0,17.714,13.948Z" transform="translate(-13.494 -13.948)" fill="#fff"/>
          <rect id="Rectangle_264" data-name="Rectangle 264" width="7.619" height="23.186" transform="translate(0.41 11.265)" fill="#fff"/>
          <path id="Tracé_136" data-name="Tracé 136" d="M38.955,24.068a7.991,7.991,0,0,0-6.432,3.185V24.615H24.9V47.8h7.619V34.214a3.61,3.61,0,0,1,3.769-3.68c1.556,0,3.523.757,3.523,5.018V47.8h7.619V31.469S47.094,24.068,38.955,24.068Z" transform="translate(-12.819 -13.35)" fill="#fff"/>
        </g>
      </g>
    </g>
  </g>
  <g id="Illustration_2" data-name="Illustration 2" transform="translate(114.598 31.598)">
    <g id="Groupe_167" data-name="Groupe 167" transform="translate(-31.598 -31.598)">
      <rect id="Rectangle_265" data-name="Rectangle 265" width="63.195" height="63.195" rx="11.869" fill="#161919"/>
      <g id="Groupe_166" data-name="Groupe 166" transform="translate(12.687 20.024)">
        <path id="Tracé_137" data-name="Tracé 137" d="M27.206,29.511a5.782,5.782,0,0,0,2.373-1.918,5.094,5.094,0,0,0,.8-2.93,6.247,6.247,0,0,0-.532-2.729,4.517,4.517,0,0,0-1.518-1.774,6.6,6.6,0,0,0-2.349-.959,14.281,14.281,0,0,0-3.034-.3H11.979V42.162H23.251a11.794,11.794,0,0,0,3.039-.392,8.082,8.082,0,0,0,2.647-1.205,5.935,5.935,0,0,0,1.839-2.107,6.439,6.439,0,0,0,.678-3.048A6.462,6.462,0,0,0,30.4,31.677,5.553,5.553,0,0,0,27.206,29.511ZM17.1,22.867h4.79a6.858,6.858,0,0,1,1.316.115,3.178,3.178,0,0,1,1.128.408,2.123,2.123,0,0,1,.789.809,2.764,2.764,0,0,1,.285,1.336,2.445,2.445,0,0,1-.874,2.115,3.71,3.71,0,0,1-2.254.651H17.1Zm8.939,13.767a2.474,2.474,0,0,1-.832.928A3.414,3.414,0,0,1,24,38.056a6.6,6.6,0,0,1-1.436.145H17.1V31.8h5.567a4.318,4.318,0,0,1,2.67.763,3.037,3.037,0,0,1,1.008,2.566A3.224,3.224,0,0,1,26.039,36.635Z" transform="translate(-11.979 -18.906)" fill="#fff"/>
        <path id="Tracé_138" data-name="Tracé 138" d="M48.265,30.775a9.131,9.131,0,0,0-1.48-3.2,7.45,7.45,0,0,0-2.626-2.232,7.965,7.965,0,0,0-3.742-.832,8.741,8.741,0,0,0-3.512.685,8.172,8.172,0,0,0-4.493,4.7,9.889,9.889,0,0,0-.622,3.523,10.3,10.3,0,0,0,.6,3.589,8.292,8.292,0,0,0,1.71,2.806,7.646,7.646,0,0,0,2.719,1.811,9.706,9.706,0,0,0,3.593.638,8.736,8.736,0,0,0,4.875-1.311,7.729,7.729,0,0,0,3-4.346H44.223A2.969,2.969,0,0,1,42.987,38.1a4.715,4.715,0,0,1-5.407-.311,4.713,4.713,0,0,1-1.145-3.267H48.587A11.934,11.934,0,0,0,48.265,30.775Zm-11.829.835a5.194,5.194,0,0,1,.212-1.11,3.293,3.293,0,0,1,.62-1.186,3.71,3.71,0,0,1,1.171-.928,3.965,3.965,0,0,1,1.84-.378,3.462,3.462,0,0,1,2.617.937A4.5,4.5,0,0,1,43.96,31.61Z" transform="translate(-10.808 -18.574)" fill="#fff"/>
        <rect id="Rectangle_266" data-name="Rectangle 266" width="9.427" height="2.295" transform="translate(24.682 1.56)" fill="#fff"/>
      </g>
    </g>
  </g>
  <g id="Illustration_3" data-name="Illustration 3" transform="translate(196.598 32.598)">
    <g id="Groupe_170" data-name="Groupe 170" transform="translate(-31.598 -31.598)">
      <rect id="Rectangle_267" data-name="Rectangle 267" width="63.195" height="63.195" rx="11.869" fill="#161919"/>
      <g id="Groupe_169" data-name="Groupe 169" transform="translate(13.721 13.416)">
        <g id="Groupe_168" data-name="Groupe 168">
          <path id="Tracé_139" data-name="Tracé 139" d="M13,23.866a12.14,12.14,0,0,1,1.738-6.649,9.452,9.452,0,0,1,5.045-3.84,19.71,19.71,0,0,1,6.381-.706q6.194-.013,12.39.039a11.656,11.656,0,0,1,6.5,1.819A9.033,9.033,0,0,1,49.067,20.7a28.138,28.138,0,0,1,.4,4.668c.02,4.444-.029,8.888-.1,13.331a10.784,10.784,0,0,1-1.5,5.525A9.276,9.276,0,0,1,42.6,48.332a20.382,20.382,0,0,1-6.316.694q-6.078.013-12.159-.03a12.283,12.283,0,0,1-6.07-1.429,9.2,9.2,0,0,1-4.4-5.484,19.419,19.419,0,0,1-.681-4.979C12.958,36.807,12.932,27.272,13,23.866ZM16.54,39.731a6.217,6.217,0,0,0,2.394,4.439,7.942,7.942,0,0,0,4.835,1.488,141.6,141.6,0,0,0,16.368-.172,6.5,6.5,0,0,0,3.334-1.277,6.807,6.807,0,0,0,2.593-5.641c.1-4.089.082-8.183.067-12.273a42.462,42.462,0,0,0-.233-4.389,6.207,6.207,0,0,0-2.041-4.086A7.051,7.051,0,0,0,39.118,16.1c-4.441-.089-8.884-.151-13.326-.123a16.176,16.176,0,0,0-4.877.536,6,6,0,0,0-4.379,5.47C16.287,25.183,16.322,37.673,16.54,39.731Z" transform="translate(-12.955 -12.667)" fill="#fff"/>
          <path id="Tracé_140" data-name="Tracé 140" d="M30.765,21.008a9.365,9.365,0,1,1-9.448,9.269A9.37,9.37,0,0,1,30.765,21.008Zm6.026,9.429a6.056,6.056,0,1,0-6,5.973A6.084,6.084,0,0,0,36.792,30.437Z" transform="translate(-12.461 -12.174)" fill="#fff"/>
          <path id="Tracé_141" data-name="Tracé 141" d="M39.526,22.95a2.154,2.154,0,0,1-2.221-2.144,2.233,2.233,0,0,1,4.465.02A2.146,2.146,0,0,1,39.526,22.95Z" transform="translate(-11.516 -12.317)" fill="#fff"/>
        </g>
      </g>
    </g>
  </g>
  <g id="Illustration_4" data-name="Illustration 4" transform="translate(278.598 32.598)">
    <g id="Groupe_171" data-name="Groupe 171" transform="translate(-31.598 -31.598)">
      <rect id="Rectangle_268" data-name="Rectangle 268" width="63.195" height="63.195" rx="11.869" fill="#161919"/>
      <path id="Tracé_142" data-name="Tracé 142" d="M35.248,17.836c1.706,0,4.592.024,4.592.024v-5.8s-2.008-.05-4.643,0-9.108.251-9.108,7.88v4.919H21.07v6.022h5.019V49.705h7.177V30.885h5.872l.7-6.022H33.266V19.944S33.542,17.836,35.248,17.836Z" transform="translate(1.246 0.712)" fill="#fff"/>
    </g>
  </g>
  <g id="Illustration_5" data-name="Illustration 5" transform="translate(361.598 32.598)">
    <g id="Groupe_172" data-name="Groupe 172" transform="translate(-31.598 -31.598)">
      <rect id="Rectangle_269" data-name="Rectangle 269" width="63.195" height="63.195" rx="11.869" fill="#161919"/>
      <path id="Tracé_143" data-name="Tracé 143" d="M45.11,15.879H17.915a7.834,7.834,0,0,0-7.834,7.833V37.606a7.834,7.834,0,0,0,7.834,7.833H45.11a7.834,7.834,0,0,0,7.833-7.833V23.712A7.834,7.834,0,0,0,45.11,15.879ZM27.442,35.93V25.091l10.684,5.42Z" transform="translate(0.596 0.939)" fill="#fff"/>
    </g>
  </g>
  </svg>


    </a></div>
          <div class="reseau"><a href="">
    </a></div>
          <div class="reseau"><a href="">
    </a></div>
          <div class="reseau"><a href="">
    </a></div>
          <div class="reseau"><a href="">
    </a></div>
        </div> -->
    </div>
  </div>

<?php get_template_part('vagues-variantes/vaguesBasPiedPage')?> 

</footer>

<?php wp_footer(); ?>

