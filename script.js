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



const accordions = document.querySelectorAll(".accordion");

for (const accordion of accordions) {
  accordion.addEventListener("click", function() {
    const panel = this.nextElementSibling;
    const active = document.querySelector(".panel.show");

    if (panel.style.maxHeight) {
      return;
    }

    if (active) {
      active.style.maxHeight = null;
      active.classList.remove("show");
      active.previousElementSibling.classList.remove("active");
      active.previousElementSibling.lastElementChild.classList.remove("active");
    }

    panel.style.maxHeight = panel.scrollHeight + "px";
    panel.classList.add("show");
    this.classList.add("active");
    this.lastElementChild.classList.add("active");
  });
}

const active = document.querySelector(".accordion.active");
if (active) {
  const panel = active.nextElementSibling;
  panel.style.maxHeight = panel.scrollHeight + "px";
  panel.classList.add("show");
}
