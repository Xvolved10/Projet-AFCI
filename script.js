// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function(salut) {
//     this.classList.toggle("active");
//     var panel = this.nextElementSibling;
//     if (panel.style.display === "block") {
//       panel.style.display = "none";
//     } else {
//       panel.style.display = "block";
//     }
//   });
// }
// window.setInterval(function(){
//     salut()
// }, 5000);

// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var panel = this.nextElementSibling;
//     if (panel.classList.contains("show")) {
//       panel.classList.remove("show");
//     } else {
//       panel.classList.add("show");
//     }
//   });
// }

// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     var panel = this.nextElementSibling;
//     if (panel.classList.contains("show")) {
//       panel.classList.remove("show");
//     } else {
//       var openPanel = document.querySelector(".panel.show");
//       if (openPanel) {
//         openPanel.classList.remove("show");
//       }
//       panel.classList.add("show");
//     }
//   });
// }






// var acc = document.getElementsByClassName("accordion");
// var i;

// // Ouvre le premier panneau par défaut
// document.querySelector(".accordion").classList.add("active");
// document.querySelector(".panel").classList.add("show");

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     var panel = this.nextElementSibling;
//     if (panel.classList.contains("show")) {
//       panel.classList.remove("show");
//       this.classList.remove("active");
//     } else {
//       var openPanel = document.querySelector(".panel.show");
//       if (openPanel) {
//         openPanel.classList.remove("show");
//         document.querySelector(".accordion.active").classList.remove("active");
//       }
//       panel.classList.add("show");
//       this.classList.add("active");
//     }
//   });
// }




// var acc = document.getElementsByClassName("accordion");
// var i;

// // Ouvre le premier panneau par défaut
// document.querySelector(".accordion").classList.add("active");
// document.querySelector(".arrow").classList.add("down");
// document.querySelector(".panel").classList.add("show");

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     var panel = this.nextElementSibling;
//     var arrow = this.querySelector(".arrow");
//     if (panel.classList.contains("show")) {
//       panel.classList.remove("show");
//       this.classList.remove("active");
//       arrow.classList.remove("up");
//       arrow.classList.add("down");
//     } else {
//       var openPanel = document.querySelector(".panel.show");
//       var openAccordion = document.querySelector(".accordion.active");
//       if (openPanel) {
//         openPanel.classList.remove("show");
//         openAccordion.classList.remove("active");
//         openAccordion.querySelector(".arrow").classList.remove("up");
//         openAccordion.querySelector(".arrow").classList.add("down");
//       }
//       panel.classList.add("show");
//       this.classList.add("active");
//       arrow.classList.remove("down");
//       arrow.classList.add("up");
//     }
//   });
// }



// const accordions = document.querySelectorAll(".accordion");

// for (const accordion of accordions) {
//   accordion.addEventListener("click", function() {
//     const panel = this.nextElementSibling;
//     const active = document.querySelector(".panel.show");

//     if (panel.style.maxHeight) {
//       return;
//     }

//     if (active) {
//       active.style.maxHeight = null;
//       active.classList.remove("show");
//       active.previousElementSibling.classList.remove("active");
//       active.previousElementSibling.lastElementChild.classList.remove("active");
//     }

//     panel.style.maxHeight = panel.scrollHeight + "px";
//     panel.classList.add("show");
//     this.classList.add("active");
//     this.lastElementChild.classList.add("active");
//   });
// }

// const active = document.querySelector(".accordion.active");
// if (active) {
//   const panel = active.nextElementSibling;
//   panel.style.maxHeight = panel.scrollHeight + "px";
//   panel.classList.add("show");
// }


// const accordions = document.querySelectorAll(".accordion");

// for (const accordion of accordions) {
//   accordion.addEventListener("click", function() {
//     const panel = this.nextElementSibling;
//     const active = document.querySelector(".panel.show");

//     if (panel.style.maxHeight) {
//       return;
//     }

//     if (active) {
//       active.style.maxHeight = null;
//       active.classList.remove("show");
//       active.previousElementSibling.classList.remove("active");
//       active.previousElementSibling.lastElementChild.classList.remove("active");
//     }

//     panel.style.maxHeight = panel.scrollHeight + "px";
//     panel.classList.add("show");
//     this.classList.add("active");
//     this.lastElementChild.classList.add("active");

//     panel.scrollIntoView({behavior: "smooth", block: "start"});
//   });
// }

// const active = document.querySelector(".accordion.active");
// if (active) {
//   const panel = active.nextElementSibling;
//   panel.style.maxHeight = panel.scrollHeight + "px";
//   panel.classList.add("show");
//   panel.scrollIntoView({behavior: "smooth", block: "start"});
// }

// const accordions = document.querySelectorAll(".accordion");

// for (const accordion of accordions) {
//   accordion.addEventListener("click", function() {
//     const panel = this.nextElementSibling;
//     const active = document.querySelector(".panel.show");

//     if (panel.style.maxHeight) {
//       return;
//     }

//     if (active) {
//       active.style.maxHeight = null;
//       active.classList.remove("show");
//       active.previousElementSibling.classList.remove("active");
//       active.previousElementSibling.lastElementChild.classList.remove("active");
//     }

//     panel.style.maxHeight = panel.scrollHeight + "px";
//     panel.classList.add("show");
//     this.classList.add("active");
//     this.lastElementChild.classList.add("active");

//     this.scrollIntoView({behavior: "smooth", block: "start"});
//   });
// }

// const active = document.querySelector(".accordion.active");
// if (active) {
//   const panel = active.nextElementSibling;
//   panel.style.maxHeight = panel.scrollHeight + "px";
//   panel.classList.add("show");
//   active.scrollIntoView({behavior: "smooth", block: "start"});
// }


// const accordions = document.querySelectorAll(".accordion");

// for (const accordion of accordions) {
//   accordion.addEventListener("click", function() {
//     const panel = this.nextElementSibling;
//     const active = document.querySelector(".panel.show");

//     if (panel.style.maxHeight) {
//       return;
//     }

//     if (active) {
//       active.style.maxHeight = null;
//       active.classList.remove("show");
//       active.previousElementSibling.classList.remove("active");
//       active.previousElementSibling.lastElementChild.classList.remove("active");
//     }

//     const panelRect = panel.getBoundingClientRect();

//     panel.style.maxHeight = panel.scrollHeight + "px";
//     panel.classList.add("show");
//     this.classList.add("active");
//     this.lastElementChild.classList.add("active");

//     const newPanelRect = panel.getBoundingClientRect();
//     const titleRect = this.getBoundingClientRect();

//     const deltaY = newPanelRect.height - panelRect.height;

//     window.scrollBy({
//       top: titleRect.top - deltaY / 2 - window.scrollY,
//       behavior: "smooth"
//     });
//   });
// }

// const active = document.querySelector(".accordion.active");
// if (active) {
//   const panel = active.nextElementSibling;
//   panel.style.maxHeight = panel.scrollHeight + "px";

//   const titleRect = active.getBoundingClientRect();
//   window.scrollTo({
//     top: titleRect.top - window.scrollY,
//   });
// }



// const accordions = document.querySelectorAll(".accordion");

// for (const accordion of accordions) {
//   accordion.addEventListener("click", function() {
//     const panel = this.nextElementSibling;
//     const active = document.querySelector(".panel.show");

//     if (panel.style.maxHeight) {
//       return;
//     }

//     if (active) {
//       active.style.maxHeight = null;
//       active.classList.remove("show");
//       active.previousElementSibling.classList.remove("active");
//       active.previousElementSibling.lastElementChild.classList.remove("active");
//     }

//     const panelRect = panel.getBoundingClientRect();

//     panel.style.maxHeight = panel.scrollHeight + "px";
//     panel.classList.add("show");
//     this.classList.add("active");
//     this.lastElementChild.classList.add("active");

//     const newPanelRect = panel.getBoundingClientRect();
//     const titleRect = this.getBoundingClientRect();

//     const deltaY = newPanelRect.height - panelRect.height;

//     window.scrollBy({
//       top: titleRect.top - deltaY / 2 - window.innerHeight / 2,
//       behavior: "smooth"
//     });
//   });
// }

// const active = document.querySelector(".accordion.active");
// if (active) {
//   const panel = active.nextElementSibling;
//   panel.style.maxHeight = panel.scrollHeight + "px";

//   const jeunesseBtn = document.querySelector(".accordion:first-of-type");
//   const jeunesseBtnRect = jeunesseBtn.getBoundingClientRect();
//   window.scrollTo({
//     top: jeunesseBtnRect.top - window.innerHeight / 2,
//   });
// }


// const accordions = document.querySelectorAll(".accordion");

// for (const accordion of accordions) {
//   accordion.addEventListener("click", function() {
//     const panel = this.nextElementSibling;
//     const active = document.querySelector(".panel.show");

//     if (panel.style.maxHeight) {
//       return;
//     }

//     if (active) {
//       active.style.maxHeight = null;
//       active.classList.remove("show");
//       active.previousElementSibling.classList.remove("active");
//       active.previousElementSibling.lastElementChild.classList.remove("active");
//     }

//     const panelRect = panel.getBoundingClientRect();

//     panel.style.maxHeight = panel.scrollHeight + "px";
//     panel.classList.add("show");
//     this.classList.add("active");
//     this.lastElementChild.classList.add("active");

//     const newPanelRect = panel.getBoundingClientRect();
//     const jeunesseButtonRect = document.getElementById("jeunesse-btn").getBoundingClientRect();

//     const deltaY = newPanelRect.height - panelRect.height;

//     window.scrollBy({
//       top: jeunesseButtonRect.top - deltaY / 2 - window.scrollY,
//       behavior: "smooth"
//     });
//   });
// }

// const jeunesseButton = document.getElementById("jeunesse-btn");
// if (jeunesseButton) {
//   const panel = document.querySelector("#jeunesse-panel");
//   panel.style.maxHeight = panel.scrollHeight + "px";

//   const jeunesseButtonRect = jeunesseButton.getBoundingClientRect();
//   window.scrollTo({
//     top: jeunesseButtonRect.top - window.scrollY,
//   });
// Événements de clic pour les boutons
// var jeunesseBtn = document.getElementById("jeunesse-btn");
// var deadlockBtn = document.getElementById("deadlock-btn");

// jeunesseBtn.addEventListener("click", function() {
//   document.getElementById("jeunesse-panel").classList.toggle("active");
//   document.getElementById("deadlock-panel").classList.remove("active");
//   scrollToTop();
// });

// deadlockBtn.addEventListener("click", function() {
//   document.getElementById("deadlock-panel").classList.toggle("active");
//   document.getElementById("jeunesse-panel").classList.remove("active");
//   scrollToTop();
// });


// // Récupération des éléments HTML
// const jeunesseButton = document.getElementById("jeunesse-button");
// const jeunessePanel = document.getElementById("jeunesse-panel");
// const deadlockButton = document.getElementById("deadlock-button");
// const deadlockPanel = document.getElementById("deadlock-panel");

// // Fonction pour fermer tous les panels sauf celui passé en paramètre
// function closePanels(panelToKeepOpen) {
//   if (panelToKeepOpen !== jeunessePanel) {
//     jeunessePanel.classList.remove("open");
//     jeunesseButton.classList.remove("rotate");
//   }
//   if (panelToKeepOpen !== deadlockPanel) {
//     deadlockPanel.classList.remove("open");
//     deadlockButton.classList.remove("rotate");
//   }
// }

// // Fonction pour scroller vers le titre correspondant
// function scrollToTitle(panel) {
//   const title = panel.querySelector(".title");
//   const panelTop = panel.getBoundingClientRect().top;
//   const titleTop = title.getBoundingClientRect().top;
//   const offset = titleTop - panelTop - 20;
//   window.scrollBy({
//     top: offset,
//     behavior: "smooth",
//   });
// }

// // Ajout des événements de clic sur les boutons
// jeunesseButton.addEventListener("click", () => {
//   if (!jeunessePanel.classList.contains("open")) {
//     closePanels(jeunessePanel);
//     jeunessePanel.classList.add("open");
//     jeunesseButton.classList.add("rotate");
//     setTimeout(() => scrollToTitle(jeunessePanel), 500);
//   }
// });

// deadlockButton.addEventListener("click", () => {
//   if (!deadlockPanel.classList.contains("open")) {
//     closePanels(deadlockPanel);
//     deadlockPanel.classList.add("open");
//     deadlockButton.classList.add("rotate");
//     setTimeout(() => scrollToTitle(deadlockPanel), 500);
//   }
// });



// $(document).ready(function() {

//   // Définit l'accordéon
//   $(".accordion-title").click(function() {
//     // Vérifie si le contenu est déjà visible
//     var content = $(this).next(".accordion-content");
//     if (!content.is(":visible")) {
//       // Ferme tous les autres contenus
//       $(".accordion-content").slideUp(500);
//       $(".accordion-title i").removeClass("fa-chevron-up").addClass("fa-chevron-down");

//       // Ouvre le contenu sélectionné
//       content.slideDown(500);

//       // Change l'icône de la flèche
//       $(this).children("i").removeClass("fa-chevron-down").addClass("fa-chevron-up");

//       // Obtient la position de l'élément cliqué
//       var position = $(this).offset().top;

//       // Obtient la hauteur de la barre de navigation
//       var navHeight = $("nav").outerHeight();

//       // Scroll vers la position de l'élément cliqué moins la hauteur de la barre de navigation avec un délai de 500ms pour tenir compte de l'animation
//       $('html, body').animate({
//         scrollTop: position - navHeight
//       }, 500);
//     }
//   });

//   // Positionne le titre de la section ouverte en haut de la page
//   function positionTitle() {
//     var openContent = $(".accordion-content:visible");
//     if (openContent.length > 0) {
//       var position = openContent.prev(".accordion-title").offset().top;
//       var navHeight = $("nav").outerHeight();
//       $('html, body').scrollTop(position - navHeight);
//     }
//   }

//   // Appelle la fonction pour positionner le titre de la section ouverte lors du chargement de la page
//   positionTitle();

//   // Appelle la fonction pour positionner le titre de la section ouverte lors de l'ouverture d'une section
//   $(".accordion-title").click(function() {
//     positionTitle();
//   });

// });




// // Accordion script
// const accordions = document.querySelectorAll(".accordion");

// accordions.forEach((accordion) => {
//   accordion.addEventListener("click", () => {
//     const panel = accordion.nextElementSibling;
//     const arrow = accordion.querySelector(".arrow");
//     if (panel.style.maxHeight) {
//       panel.style.maxHeight = null;
//       arrow.classList.remove("up");
//       arrow.classList.add("down");
//     } else {
//       accordions.forEach((accordion) => {
//         accordion.classList.remove("active");
//         const p = accordion.nextElementSibling;
//         p.style.maxHeight = null;
//         const a = accordion.querySelector(".arrow");
//         a.classList.remove("up");
//         a.classList.add("down");
//       });
//       accordion.classList.add("active");
//       panel.style.maxHeight = panel.scrollHeight + "px";
//       arrow.classList.remove("down");
//       arrow.classList.add("up");

//       // Move title to top of page
//       const title = accordion.querySelector("h1").textContent;
//       document.title = title;
//       const top = panel.offsetTop;
//       window.scrollTo({ top: top, behavior: "smooth" });
//     }
//   });
// });





// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;

//   if (!accordionPanel.style.maxHeight) {
//     // Close any other active accordion panels
//     accordionButtons.forEach((button) => {
//       const panel = button.nextElementSibling;
//       if (panel !== accordionPanel && panel.style.maxHeight) {
//         panel.style.maxHeight = null;
//         button.classList.remove("active");
//       }
//     });

//     // Open the clicked accordion panel
//     accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//     this.classList.add("active");

//     // Scroll to the opened accordion panel
//     scrollTo(accordionPanel);
//   } else {
//     // Close the clicked accordion panel
//     accordionPanel.style.maxHeight = null;
//     this.classList.remove("active");
//   }
// }

// accordionButtons.forEach((button) => {
//   button.addEventListener("click", toggleAccordion);
// });





// const accordionHeaders = document.querySelectorAll('.accordion');

// accordionHeaders.forEach(accordionHeader => {
//   accordionHeader.addEventListener('click', event => {
//     const currentlyActiveAccordionHeader = document.querySelector('.accordion.active');
//     if (currentlyActiveAccordionHeader && currentlyActiveAccordionHeader !== accordionHeader) {
//       currentlyActiveAccordionHeader.classList.toggle('active');
//       currentlyActiveAccordionHeader.nextElementSibling.style.maxHeight = 0;
//     }

//     accordionHeader.classList.toggle('active');
//     const accordionPanel = accordionHeader.nextElementSibling;

//     if (accordionHeader.classList.contains('active')) {
//       accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//       setTimeout(() => {
//         window.scrollBy(0, -document.querySelector('.navbar').offsetHeight);
//       }, 400);
//     } else {
//       accordionPanel.style.maxHeight = 0;
//     }
//   });
// });





// const accordionHeaders = document.querySelectorAll('.accordion');
// const navbar = document.querySelector('.navbar');

// // Add click event listener to all accordion headers
// accordionHeaders.forEach((header) => {
//   header.addEventListener('click', () => {
//     // Toggle active class on clicked header
//     header.classList.toggle('active');
    
//     // Find the panel associated with the clicked header
//     const panel = header.nextElementSibling;
    
//     // If the panel is already open, close it
//     if (panel.style.maxHeight) {
//       panel.style.maxHeight = null;
//     } else {
//       // Otherwise, close any other open panel and open the clicked panel
//       accordionHeaders.forEach((otherHeader) => {
//         if (otherHeader !== header && otherHeader.classList.contains('active')) {
//           otherHeader.classList.remove('active');
//           otherHeader.nextElementSibling.style.maxHeight = null;
//         }
//       });
//       // Calculate how far to scroll to show the panel below the navbar
//       const scrollDistance = panel.getBoundingClientRect().top - navbar.getBoundingClientRect().bottom;
//       // Scroll to the panel while taking the height of the navbar into account
//       window.scrollBy({ top: scrollDistance - navbar.offsetHeight, left: 0, behavior: 'smooth' });
//       panel.style.maxHeight = panel.scrollHeight + 'px';
//     }
//   });
// });




// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;

//   if (!accordionPanel.style.maxHeight) {
//     // Close any other active accordion panels
//     accordionButtons.forEach((button) => {
//       const panel = button.nextElementSibling;
//       if (panel !== accordionPanel && panel.style.maxHeight) {
//         panel.style.maxHeight = null;
//         button.classList.remove("active");
//       }
//     });

//     // Open the clicked accordion panel
//     accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//     this.classList.add("active");

//     // Scroll to the opened accordion panel
//     scrollTo(accordionPanel);
//   } else {
//     // Close the clicked accordion panel
//     accordionPanel.style.maxHeight = null;
//     this.classList.remove("active");

//     // If all accordion panels are closed, activate the first one
//     const activePanels = Array.from(accordionButtons).filter(button => button.classList.contains("active"));
//     if (activePanels.length === 0) {
//       const firstButton = accordionButtons[0];
//       const firstPanel = firstButton.nextElementSibling;
//       firstButton.classList.add("active");
//       firstPanel.style.maxHeight = firstPanel.scrollHeight + "px";
//     }
//   }
// }

// accordionButtons.forEach((button) => {
//   button.addEventListener("click", toggleAccordion);
// });



// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;

//   if (!this.classList.contains("active")) {
//     // Close any other active accordion panels
//     accordionButtons.forEach((button) => {
//       const panel = button.nextElementSibling;
//       if (panel.style.maxHeight && button !== this) {
//         panel.style.maxHeight = null;
//         button.classList.remove("active");
//       }
//     });

//     // Open the clicked accordion panel
//     accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//     this.classList.add("active");

//     // Scroll to the opened accordion panel
//     scrollTo(accordionPanel);
//   } else {
//     // Close the clicked accordion panel
//     accordionPanel.style.maxHeight = null;
//     this.classList.remove("active");
//   }
// }

// accordionButtons.forEach((button) => {
//   button.addEventListener("click", toggleAccordion);
// });





// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;
// let activeAccordion = null;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;

//   if (accordionPanel !== activeAccordion) {
//     // Close any other active accordion panels
//     accordionButtons.forEach((button) => {
//       const panel = button.nextElementSibling;
//       if (panel !== accordionPanel && panel === activeAccordion) {
//         panel.style.maxHeight = null;
//         button.classList.remove("active");
//       }
//     });

//     // Open the clicked accordion panel
//     accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//     this.classList.add("active");

//     // Set the clicked accordion panel as active
//     activeAccordion = accordionPanel;

//     // Scroll to the opened accordion panel
//     scrollTo(accordionPanel);
//   } else {
//     // Close the clicked accordion panel
//     accordionPanel.style.maxHeight = null;
//     this.classList.remove("active");

//     // Reset the active accordion
//     activeAccordion = null;
//   }
// }

// accordionButtons.forEach((button) => {
//   button.addEventListener("click", toggleAccordion);
// });





// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;
// let activeButton = null;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function closeAccordion(accordionPanel, button) {
//   // Close the accordion panel
//   accordionPanel.style.maxHeight = null;
//   button.classList.remove("active");
// }

// function openAccordion(button, accordionPanel) {
//   // Close any other active accordion panels
//   if (activeButton && activeButton !== button) {
//     const activePanel = activeButton.nextElementSibling;
//     closeAccordion(activePanel, activeButton);
//   }

//   // Open the clicked accordion panel
//   accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//   button.classList.add("active");

//   // Set the active button
//   activeButton = button;

//   // Scroll to the opened accordion panel
//   scrollTo(accordionPanel);
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;

//   if (!accordionPanel.style.maxHeight) {
//     // Open the clicked accordion panel
//     openAccordion(this, accordionPanel);
//   } else {
//     // Close the clicked accordion panel
//     closeAccordion(accordionPanel, this);

//     // Set the active button to null
//     activeButton = null;
//   }
// }

// accordionButtons.forEach((button) => {
//   button.addEventListener("click", toggleAccordion);
// });




// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;
//   const activeAccordionButton = document.querySelector(".accordion.active");
//   const activeAccordionPanel = activeAccordionButton.nextElementSibling;

//   if (this === activeAccordionButton) {
//     // Close the clicked accordion panel if it is already active
//     accordionPanel.style.maxHeight = null;
//     this.classList.remove("active");
//   } else {
//     // Close the currently active accordion panel
//     if (activeAccordionPanel.style.maxHeight) {
//       activeAccordionPanel.style.maxHeight = null;
//       activeAccordionButton.classList.remove("active");
//     }

//     // Open the clicked accordion panel
//     accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//     this.classList.add("active");

//     // Scroll to the opened accordion panel
//     scrollTo(accordionPanel);
//   }
// }

// accordionButtons.forEach((button) => {
//   button.addEventListener("click", toggleAccordion);
// });




// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;

//   if (this.classList.contains("active")) {
//     // close the clicked accordion panel
//     accordionPanel.style.maxHeight = null;
//     this.classList.remove("active");
//   } else {
//     // close any other active accordion panels
//     accordionButtons.forEach((button) => {
//       if (button.classList.contains("active")) {
//         button.classList.remove("active");
//         button.nextElementSibling.style.maxHeight = null;
//       }
//     });

//     // open the clicked accordion panel
//     accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//     this.classList.add("active");

//     // scroll to the opened accordion panel
//     scrollTo(accordionPanel);
//   }
// }

// accordionButtons.forEach((button) => {
//   button.addEventListener("click", toggleAccordion);
// });




// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;

//   if (this.classList.contains("active")) {
//     // if the clicked accordion panel is already active, disable it
//     if (accordionPanel.classList.contains("show")) {
//       accordionPanel.classList.remove("show");
//       accordionPanel.style.maxHeight = null;
//       this.classList.remove("active");
//     }
//   } else {
//     // close any other active accordion panels
//     accordionButtons.forEach((button) => {
//       if (button.classList.contains("active")) {
//         button.classList.remove("active");
//         button.nextElementSibling.classList.remove("show");
//         button.nextElementSibling.style.maxHeight = null;
//       }
//     });

//     // open the clicked accordion panel
//     accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//     accordionPanel.classList.add("show");
//     this.classList.add("active");

//     // scroll to the opened accordion panel
//     scrollTo(accordionPanel);
//   }
// }




// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;
//   const isActive = this.classList.contains("active");

//   accordionButtons.forEach((button) => {
//     button.classList.remove("active");
//     button.nextElementSibling.style.maxHeight = null;
//   });

//   if (!isActive) {
//     // open the clicked accordion panel
//     accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//     this.classList.add("active");

//     // scroll to the opened accordion panel
//     scrollTo(accordionPanel);
//   }
// }

// accordionButtons.forEach((button) => {
//   button.addEventListener("click", toggleAccordion);
// });













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





// // JS Pop-up connexion

// document.getElementById("loginButton").addEventListener("click", function() {
//   document.getElementById("loginPopup").style.display = "block";
// });

// document.getElementById("loginPopup").addEventListener("click", function(event) {
//   if (event.target === this) {
//     this.style.display = "none";
//   }
// });

// document.getElementById("loginForm").addEventListener("submit", function(event) {
//   event.preventDefault();
  
//   var username = document.getElementById("username").value;
//   var password = document.getElementById("password").value;
    
//   document.getElementById("username").value = "";
//   document.getElementById("password").value = "";
  
//   document.getElementById("loginPopup").style.display = "none";
// });



// // JS Création de compte 
// var loginContent = document.getElementById("loginContent");
// var createAccountButton = document.querySelector(".creation");

// createAccountButton.addEventListener("click", function() {
//   // Modifier le titre du formulaire
//   loginContent.querySelector("h2").textContent = "Créer un compte";

//   // Remplacer les champs de connexion par ceux de création de compte
//   var emailField = document.createElement("input");
//   emailField.type = "email";
//   emailField.id = "email";
//   emailField.name = "email";
//   emailField.placeholder = "Votre adresse e-mail";

//   var usernameField = document.createElement("input");
//   usernameField.type = "text";
//   usernameField.id = "newUsername";
//   usernameField.name = "newUsername";
//   usernameField.placeholder = "Votre nom d'utilisateur";

//   var passwordField = document.createElement("input");
//   passwordField.type = "password";
//   passwordField.id = "newPassword";
//   passwordField.name = "newPassword";
//   passwordField.placeholder = "Votre mot de passe";

//   var loginForm = document.getElementById("loginForm");
//   loginForm.innerHTML = ""; // Supprimer les champs existants
//   loginForm.appendChild(emailField);
//   loginForm.appendChild(usernameField);
//   loginForm.appendChild(passwordField);

//   // Modifier l'action du bouton de soumission du formulaire
//   var submitButton = document.querySelector(".submit");
//   submitButton.value = "Créer un compte";
// });




// JS bouton Se connecter
var loginButton = document.getElementById("loginButton");
var loginPopup = document.getElementById("loginPopup");
var loginForm = document.getElementById("loginForm");
var loginContent = document.getElementById("loginContent");
var createAccountForm = null;

loginButton.addEventListener("click", function() {
  loginContent.querySelector("h2").textContent = "Connexion";

  // Supprimer le formulaire de création de compte s'il est présent
  if (createAccountForm) {
    createAccountForm.remove();
    createAccountForm = null;
  }

  loginForm.style.display = "block";
  loginPopup.style.display = "block";
});

window.addEventListener("click", function(event) {
  if (event.target === loginPopup) {
    loginPopup.style.display = "none";
    if (createAccountForm) {
      createAccountForm.remove();
      createAccountForm = null;
    }
  }
});

loginForm.addEventListener("submit", function(event) {
  event.preventDefault();

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  document.getElementById("username").value = "";
  document.getElementById("password").value = "";

  // Traitement de la connexion
  // ...
});

var createAccountButton = document.querySelector(".creation");

createAccountButton.addEventListener("click", function() {
  loginContent.querySelector("h2").textContent = "Créer un compte";

  // Supprimer le formulaire de connexion s'il est présent
  if (loginForm) {
    loginForm.style.display = "none";
  }

  // Créer le formulaire de création de compte s'il n'existe pas encore
  if (!createAccountForm) {
    createAccountForm = document.createElement("form");
    createAccountForm.id = "createAccountForm";

    var emailLabel = document.createElement("label");
    emailLabel.textContent = "Adresse e-mail :";
    emailLabel.setAttribute("for", "email");

    var emailField = document.createElement("input");
    emailField.type = "email";
    emailField.id = "email";
    emailField.name = "email";
    emailField.placeholder = "Votre adresse e-mail";

    var usernameLabel = document.createElement("label");
    usernameLabel.textContent = "Nom d'utilisateur :";
    usernameLabel.setAttribute("for", "newUsername");

    var usernameField = document.createElement("input");
    usernameField.type = "text";
    usernameField.id = "newUsername";
    usernameField.name = "newUsername";
    usernameField.placeholder = "Votre nom d'utilisateur";

    var passwordLabel = document.createElement("label");
    passwordLabel.textContent = "Mot de passe :";
    passwordLabel.setAttribute("for", "newPassword");

    var passwordField = document.createElement("input");
    passwordField.type = "password";
    passwordField.id = "newPassword";
    passwordField.name = "newPassword";
    passwordField.placeholder = "Votre mot de passe";

    var createButton = document.createElement("input");
    createButton.type = "submit";
    createButton.className = "submit creation";
    createButton.value = "Créer un compte";

    createAccountForm.appendChild(emailLabel);
    createAccountForm.appendChild(emailField);
    createAccountForm.appendChild(usernameLabel);
    createAccountForm.appendChild(usernameField);
    createAccountForm.appendChild(passwordLabel);
    createAccountForm.appendChild(passwordField);
    createAccountForm.appendChild(createButton);

    loginContent.appendChild(createAccountForm);
  }

  createAccountForm.style.display = "block";
});










// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;

//   if (this.classList.contains("active")) {
//     // close the clicked accordion panel
//     accordionPanel.style.maxHeight = null;
//     this.classList.remove("active");
//   } else {
//     // close any other active accordion panels
//     accordionButtons.forEach((button) => {
//       if (button.classList.contains("active")) {
//         button.classList.remove("active");
//         button.nextElementSibling.style.maxHeight = null;
//       }
//     });

//     // open the clicked accordion panel
//     if (accordionPanel.scrollHeight !== 0) {
//       accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//       this.classList.add("active");

//       // scroll to the opened accordion panel
//       scrollTo(accordionPanel);
//     }
//   }
// }

// accordionButtons.forEach((button) => {
//   button.addEventListener("click", toggleAccordion);
// });






// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;

//   if (this.classList.contains("active")) {
//     // close the clicked accordion panel
//     accordionPanel.style.maxHeight = null;
//     this.classList.remove("active");
//     return; // Return early if clicked accordion is already closed
//   }

//   // close any other active accordion panels
//   accordionButtons.forEach((button) => {
//     button.classList.remove("active");
//     button.nextElementSibling.style.maxHeight = null;
//   });

//   // open the clicked accordion panel
//   accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//   this.classList.add("active");

//   // scroll to the opened accordion panel
//   scrollTo(accordionPanel);
// }

// accordionButtons.forEach((button) => {
//   button.addEventListener("click", toggleAccordion);
//   button.nextElementSibling.classList.add("show");
// });

// // Close all accordions except the one clicked
// function closeAllAccordions(exceptAccordion) {
//   accordionButtons.forEach((button) => {
//     if (button !== exceptAccordion) {
//       button.classList.remove("active");
//       button.nextElementSibling.style.maxHeight = null;
//     }
//   });
// }

// // Add click event listener to each accordion button
// accordionButtons.forEach((button) => {
//   button.addEventListener("click", () => {
//     // Close all other accordions except the one clicked
//     closeAllAccordions(button);
//     // Show/hide the accordion content
//     button.nextElementSibling.classList.toggle("show");
//   });
// });








// const accordionButtons = document.querySelectorAll(".accordion");
// const navbarHeight = document.querySelector("nav").offsetHeight;

// function scrollTo(element) {
//   window.scroll({
//     behavior: "smooth",
//     left: 0,
//     top: element.offsetTop - navbarHeight,
//   });
// }

// function toggleAccordion() {
//   const accordionPanel = this.nextElementSibling;

//   if (this.classList.contains("active")) {
//     // close the clicked accordion panel
//     accordionPanel.style.maxHeight = null;
//     this.classList.remove("active");
//   } else {
//     // close any other active accordion panels
//     accordionButtons.forEach((button) => {
//       button.classList.remove("active");
//       button.nextElementSibling.style.maxHeight = null;
//     });

//     // open the clicked accordion panel
//     accordionPanel.style.maxHeight = accordionPanel.scrollHeight + "px";
//     this.classList.add("active");

//     // scroll to the opened accordion panel
//     scrollTo(accordionPanel);
//   }
  
//   // check if the clicked button is the only one open
//   const openAccordions = document.querySelectorAll(".accordion.active");
//   if (openAccordions.length === 1) {
//     this.nextElementSibling.classList.add("show");
//   } else {
//     this.nextElementSibling.classList.remove("show");
//   }
// }

// accordionButtons.forEach((button, index) => {
//   if (index === 0) {
//     // add "active" class to first accordion button
//     button.classList.add("active");
    
//     // set the max-height of the first accordion panel to its actual height
//     button.nextElementSibling.style.maxHeight = button.nextElementSibling.scrollHeight + "px";
//   }
  
//   button.addEventListener("click", toggleAccordion);
// });






// // Code pour assombrir la navbar
// var img = document.getElementById("image-id");
// var canvas = document.createElement("canvas");
// canvas.width = img.width;
// canvas.height = img.height;
// var context = canvas.getContext("2d");
// context.drawImage(img, 0, 0);
// var imageData = context.getImageData(0, 0, canvas.width, canvas.height);
// var data = imageData.data;
// var r = 0, g = 0, b = 0;
// for (var i = 0; i < data.length; i += 4) {
//   r += data[i];
//   g += data[i + 1];
//   b += data[i + 2];
// }
// r /= (data.length / 4);
// g /= (data.length / 4);
// b /= (data.length / 4);
// var brightness = (r + g + b) / 3;
// var navbar = document.querySelector("nav");
// if (brightness < 128) {
//   navbar.classList.add("dark-nav");
// } else {
//   navbar.classList.remove("dark-nav");
// }





// Carrousel Accueil JQUERY

  // Configurer l'intervalle de temps de 5 secondes pour le défilement automatique
  $('.carousel').carousel({
    interval: 5000
  });

  // Ajouter la fonctionnalité de défilement manuel
  $('.carousel-control-prev').click(function() {
    $('#myCarousel').carousel('prev');
  });

  $('.carousel-control-next').click(function() {
    $('#myCarousel').carousel('next');
  });