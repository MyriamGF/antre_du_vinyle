// ----- BOUTON REMONTER LA PAGE ----- //

btRemonter = document.getElementById("bouton-remonter");

// Quand l'utilisateur défile la page de 20px, le bouton apparaît
window.onscroll = function() {scrollFonction()};

function scrollFonction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    btRemonter.style.display = "block";
  } else {
    btRemonter.style.display = "none";
  }
}

// Quand l'utilisateur clique sur le bouton, la page remonte
function hautPage() {
  document.body.scrollTop = 0; // Pour Safari
  document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
}


// ----- ADMIN POP-UP SUPPRIMER ----- //