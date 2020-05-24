// ----- BOUTON REMONTER LA PAGE ----- //

btRemonter = document.getElementById("bouton-remonter");

// Quand l'utilisateur défile la page de 20px, le bouton apparaît
window.onscroll = function () {
  scrollFonction()
};

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

// Le pop-up
var popUp = document.getElementById("pop-up-delete");

// Les boutons pour fermer le pop-up
var fermerX = document.getElementsByClassName("fermer-pop-up")[0];
var fermerAnnuler = document.getElementsByClassName("fermer-pop-up")[1];

// Ouvrir le pop-up
function ouvrirPU() {
  popUp.style.display = "block";
}

// Fermer le pop-up
fermerX.onclick = function () {
  popUp.style.display = "none";
}
fermerAnnuler.onclick = function () {
  popUp.style.display = "none";
}