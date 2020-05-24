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

// Get the popUp
var popUp = document.getElementById("mypopUp");

// Get the button that opens the popUp
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the popUp
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the popUp 
btn.onclick = function() {
  popUp.style.display = "block";
}

// When the user clicks on <span> (x), close the popUp
span.onclick = function() {
  popUp.style.display = "none";
}

// When the user clicks anywhere outside of the popUp, close it
window.onclick = function(event) {
  if (event.target == popUp) {
    popUp.style.display = "none";
  }
}