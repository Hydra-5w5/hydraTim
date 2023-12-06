(function(){
  /**************** selection les articles de chachque session ****************/
  let sessions = [
    document.querySelectorAll(".session1"),
    document.querySelectorAll(".session2"),
    document.querySelectorAll(".session3"),
    document.querySelectorAll(".session4"),
    document.querySelectorAll(".session5"),
    document.querySelectorAll(".session6")
  ];

  // selection les boutons de chachque session
  let boutons = [
    document.getElementById("btn__session1"),
    document.getElementById("btn__session2"),
    document.getElementById("btn__session3"),
    document.getElementById("btn__session4"),
    document.getElementById("btn__session5"),
    document.getElementById("btn__session6")
  ];

  function cacherSessions() {
    sessions.forEach(session => {
      session.forEach(el => el.style.display = 'none');
    });
  }

  function montrerSession(index) {
    sessions[index].forEach(el => el.style.display = 'flex');
  }

  boutons.forEach((bouton, index) => {
    if (bouton) { // Vérifie si le bouton existe
      bouton.addEventListener("click", function(){
        // Supprime la classe 'selectionner' de tous les boutons
        boutons.forEach(btn => btn && btn.classList.remove('selectionner')); // Vérifie également si le bouton existe avant de supprimer la classe
  
        // Ajoute la classe 'selectionner' au bouton cliqué
        bouton.classList.add('selectionner');
  
        cacherSessions();
        montrerSession(index);
      });
    } 
  });

  // Sélectionne le premier bouton par défaut
  if (boutons[0]) { // Vérifie si le premier bouton existe
    boutons[0].click();
  }

  /**************** Gestion du menu secondaire ****************/
  let btn__gestion__menu = document.querySelector('.btn__gestion__menu');
  let menuItems = document.querySelectorAll('.menu__secondaire .menu-item'); // Assuming your menu items have the class 'menu-item'

  
  if (btn__gestion__menu) { 
    btn__gestion__menu.textContent = 'plus';

    btn__gestion__menu.addEventListener('click', function() {
    
      this.textContent = this.textContent === 'moins' ? 'plus' : 'moins';
  
      
      if (window.innerWidth < 768) {
        menuItems.forEach(item => {
          if (item !== btn__gestion__menu) { // Exclude the button
            item.style.display = this.textContent === 'moins' ? 'block' : 'none';
          }
        });
      }
    });
  
    
    window.addEventListener('resize', function() {
      if (window.innerWidth >= 768) {
        menuItems.forEach(item => {
          if (item !== btn__gestion__menu) { // Exclude the button
            item.style.display = 'block';
          }
        });
      }
    });
  }
///////////////// ANIMATION DE LA SECTION "THEMATIQUES" DE LA PAGE D'ACCUEIL */
  if(document.querySelector('.theme')){
    document.querySelectorAll('.theme').forEach(theme => {
      theme.addEventListener('mousedown', function() {
          theme.classList.toggle('est-tourne');
          if(theme.classList.contains('est-tourne')){
              console.log("est tourner");
          }
          
      });
  });
  }
})();
