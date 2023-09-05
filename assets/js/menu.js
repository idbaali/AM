const hamburger = document.getElementById("nav-icon2");
const menuPop = document.getElementById("popupForm");
/* ici à revoir "none ou block" */
menuPop.style.display = "";

hamburger.addEventListener("click", (event) => {
    hamburger.classList.toggle('open');
    menuPop.classList.toggle('popupFormClass'); 
    if (menuPop.classList.contains("popupFormClass") == true) {
        menuPop.style.display = "flex";
    }    
    else {
        menuPop.style.display = "none";
    }
    
}) 
function redimensionnement() {

    if (window.matchMedia("(min-width: 600px)").matches) {
        /* La largeur minimum de l'affichage est 600 px inclus */
        menuPop.style.display = "flex";
    } else {
        /* L'affichage est inférieur à 600px de large */
        menuPop.style.display = "none";
    }
}

window.addEventListener('resize', redimensionnement, false);