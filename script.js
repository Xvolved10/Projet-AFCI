
const accordionButtons = document.querySelectorAll(".accordion");
const navbarHeight = document.querySelector("nav").offsetHeight;

function scrollTo(element) {
  window.scroll({
    behavior: "smooth",
    left: 0,
    top: element.offsetTop - navbarHeight,
  });
}

function toggleAccordion() {
  const accordionPanel = this.nextElementSibling;

  if (this.classList.contains("active")) {
    // close the clicked accordion panel
    accordionPanel.style.maxHeight = null;
    this.classList.remove("active");
  } else {
    // close any other active accordion panels
    accordionButtons.forEach((button) => {
      if (button.classList.contains("active")) {
        button.classList.remove("active");
        button.nextElementSibling.style.maxHeight = null;
      }
    });

    // open the clicked accordion panel
    accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
    this.classList.add("active");

    // scroll to the opened accordion panel
    scrollTo(accordionPanel);
  }
  
  // check if the clicked button is the only one open
  const openAccordions = document.querySelectorAll(".accordion.active");
  if (openAccordions.length === 1) {
    this.nextElementSibling.classList.add("show");
  } else {
    this.nextElementSibling.classList.remove("show");
  }
}

accordionButtons.forEach((button) => {
  button.addEventListener("click", toggleAccordion);
});




// JS Arrow To Top
window.addEventListener('scroll', function() {
  var backToTopButton = document.querySelector('.back-to-top');
  
  if (window.scrollY > window.innerHeight) {
      backToTopButton.classList.add('show');
  } else {
      backToTopButton.classList.remove('show');
  }
});




// JS Zoom images

// Récupérer toutes les images
const images = document.querySelectorAll('.card-image img');

// Créer un élément de superposition pour afficher les images agrandies
const imageZoomOverlay = document.createElement('div');
imageZoomOverlay.classList.add('image-zoom-overlay');
document.body.appendChild(imageZoomOverlay);

// Créer un élément pour afficher les images agrandies
const enlargedImage = document.createElement('img');
enlargedImage.classList.add('enlarged-image');
imageZoomOverlay.appendChild(enlargedImage);

// Ajouter un gestionnaire d'événement de clic à chaque image
images.forEach(image => {
  image.addEventListener('click', function() {
    // Récupérer l'URL de l'image cliquée
    const imageUrl = this.getAttribute('src');
    
    // Afficher l'image agrandie dans l'élément d'overlay
    enlargedImage.setAttribute('src', imageUrl);
    imageZoomOverlay.style.display = 'flex';
  });
});

// Ajouter un gestionnaire d'événement de clic pour fermer l'image agrandie
imageZoomOverlay.addEventListener('click', function() {
  imageZoomOverlay.style.display = 'none';
});


// // JS Bouton Se Connecter -> Profil
// function modifierBouton() {
//   var bouton = document.getElementById("loginButton");
//   bouton.innerHTML = "Profil";
//   bouton.href = "http://localhost/PHP/Evaluation/Index.php?Profil";
// }

// function restaurerBouton() {
//   var bouton = document.getElementById("loginButton");
//   bouton.innerHTML = "Se connecter";
//   bouton.href = "http://localhost/PHP/Evaluation/Index.php?Connexion";
// }




$(document).ready(function() {
  // Afficher tous les personnages au chargement de la page
  filterCharacters('tout');
  
  // Récupérer tous les boutons de filtre
  var filterButtons = $('.btn-group .btn');

  // Ajouter un gestionnaire d'événement à chaque bouton
  filterButtons.on('click', function() {
    var filterValue = $(this).text().toLowerCase();
    filterCharacters(filterValue);
    scrollToCharacterSection();
  });

  // Fonction pour filtrer les personnages en fonction du type
  function filterCharacters(type) {
    var characters = $('.character');

    // Animation de transition des héros
    characters.fadeOut(400, function() {
      // Afficher ou masquer les personnages en fonction du type sélectionné
      if (type === 'tout') {
        characters.fadeIn(400);
      } else {
        characters.each(function() {
          if ($(this).data('type') === type) {
            $(this).fadeIn(400);
          } else {
            $(this).fadeOut(400);
          }
        });
      }
    });
  }

  // Fonction pour faire défiler jusqu'à la section des personnages
  function scrollToCharacterSection() {
    var characterSection = $('#characterSection');
    $('html, body').animate({ scrollTop: characterSection.offset().top }, 800);
  }
});


// Récupère la référence vers le carousel
var carousel = document.getElementById('myCarousel');

// Définit l'intervalle de temps entre chaque diapositive en millisecondes
var interval = 5000; // 5 secondes

// Démarre le défilement automatique
setInterval(function() {
  // Récupère l'indice de la diapositive active
  var activeIndex = Array.from(carousel.querySelectorAll('.carousel-item')).findIndex(function(item) {
    return item.classList.contains('active');
  });

  // Calcule l'indice de la prochaine diapositive
  var nextIndex = (activeIndex + 1) % carousel.querySelectorAll('.carousel-item').length;

  // Active la prochaine diapositive
  carousel.querySelectorAll('.carousel-item')[nextIndex].classList.add('active');
  carousel.querySelectorAll('.carousel-item')[activeIndex].classList.remove('active');
}, interval);




