
// const hamburger = document.getElementById("nav-icon2");
// const menuPop = document.querySelector(".menuPhone");

// hamburger.addEventListener("click", () => {
//     hamburger.classList.toggle('open');
//     menuPop.classList.toggle('open');
//     menuPop.style.display = menuPop.classList.contains("open") ? "block" : "none";
// });

// function redimensionnement() {
//     if (window.matchMedia("(min-width: 768px)").matches) {
//         // L'affichage est supérieur ou égal à 768px de large
//         menuPop.style.display = "none"; // Masque le menuPhone en mode bureau
//             // hamburger.classList.remove('none'); // Retire la classe 'open' du hamburger
//     } else {
//         // L'affichage est inférieur à 768px de large
//         if (!menuPop.classList.contains("open")) {
//             menuPop.style.display = "none";
//         }
//     }
// }

// // Écoutez les changements de taille de la fenêtre
// window.addEventListener('resize', redimensionnement);

// // Appelez redimensionnement au chargement de la page
// window.addEventListener('load', redimensionnement);






const hamburger = document.getElementById("nav-icon2");
const menuPop = document.querySelector(".menuPhone");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle('open');
    menuPop.classList.toggle('open');
    menuPop.style.display = menuPop.classList.contains("open") ? "block" : "none";
});

function redimensionnement() {
    if (window.matchMedia("(min-width: 768px)").matches) {
        // L'affichage est supérieur ou égal à 768px de large
        menuPop.style.display = "none"; // Masque le menuPhone en mode bureau
    } else {
        // L'affichage est inférieur à 768px de large
        if (!menuPop.classList.contains("open")) {
            menuPop.style.display = "none";
        }
    }
}

// Écoutez les changements de taille de la fenêtre
window.addEventListener('resize', redimensionnement);

// Appelez redimensionnement au chargement de la page
window.addEventListener('load', redimensionnement);


























































// const hamburger = document.getElementById("nav-icon2");
// const phoneMenu = document.querySelector(".menuPhone");

// function togglePhoneMenu() {
//     hamburger.classList.toggle('open');
//     phoneMenu.classList.toggle('open');
//     phoneMenu.style.display = phoneMenu.classList.contains("open") ? "open" : "none";
// }

// hamburger.addEventListener("click", togglePhoneMenu);

// function redimensionnement() {
//     if (window.matchMedia("(min-width: 768px)").matches) {
//         // L'affichage est supérieur ou égal à 768px de large
//         phoneMenu.style.display = "none"; // Masque le menuPhone en mode bureau
//         hamburger.classList.remove('none'); // Retire la classe 'open' du hamburger
//     } else {
//         // L'affichage est inférieur à 768px de large
//         if (!phoneMenu.classList.contains("open")) {
//             phoneMenu.style.display = "none";
//             hamburger.classList.remove('open'); // Retire la classe 'open' du hamburger
//         }
//     }
// }

// // Écoutez les changements de taille de la fenêtre
// window.addEventListener('resize', redimensionnement);

// // Appelez redimensionnement au chargement de la page
// window.addEventListener('load', redimensionnement);







