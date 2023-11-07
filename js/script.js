(function(){
  // selection les articles de chachque session
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

  function hideAllSessions() {
    sessions.forEach(session => {
      session.forEach(el => el.style.display = 'none');
    });
  }

  function showSession(index) {
    sessions[index].forEach(el => el.style.display = 'flex');
  }

  boutons.forEach((bouton, index) => {
    bouton.addEventListener("click", function(){
      hideAllSessions();
      showSession(index);
    });
  });
})();