// MENU PORTABLE
let hamburgerBootton = document.querySelector(".menuHamburger");
let closeBoutton = document.querySelector(".close-X");
let phoneMenu2 = document.querySelector(".menuPhone");

hamburgerBootton.addEventListener("click", () => {
    phoneMenu2.style.display = "block";
    hamburgerBootton.style.display = "none";
    closeBoutton.style.display = "block";
//     // alert("Bonjour");
});


closeBoutton.addEventListener("click", () => {
   phoneMenu2.style.display = "none";
//    hamburgerBootton.style.display = "block";
window.location.href = "/";

});





















// const contentToHide = document.querySelector('.content-to-hide');
// const menuButton = document.getElementById('menuButton');


// menuButton.addEventListener('click', () => {

//     if (contentToHide.style.display === 'none' || contentToHide.style.display === '') {
//         contentToHide.style.display = 'block';
//     } else {
//         contentToHide.style.display = 'none';
//     }
// });





// // Récupérez le bouton du menu hamburger et le bouton de fermeture du menu
// var menuHamburger = document.querySelector('.menuHamburger');
// var closeBtn = document.querySelector('.close-X');

// // Récupérez la section principale de votre site
// var mainContent = document.getElementById('main-content');

// // Ajoutez un gestionnaire d'événement au bouton du menu hamburger
// menuHamburger.addEventListener('click', function () {
//     // Ajoutez une classe pour masquer la section principale
//     mainContent.classList.add('hide-content');
// });

// // Ajoutez un gestionnaire d'événement au bouton de fermeture du menu
// closeBtn.addEventListener('click', function () {
//     // Supprimez la classe pour afficher à nouveau la section principale
//     mainContent.classList.remove('hide-content');
// });
