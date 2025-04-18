const images = document.querySelectorAll('.ad');
let current = 0;

function changeImage() {
  // On retire la classe active de l'image actuelle
  images[current].classList.remove('active');

  // On passe à l'image suivante (boucle)
  current = (current + 1) % images.length;

  // On ajoute la classe active à la nouvelle image
  images[current].classList.add('active');

  // On relance la fonction après 3 secondes
  setTimeout(changeImage, 3000);
}

// Démarrage initial
setTimeout(changeImage, 3000);