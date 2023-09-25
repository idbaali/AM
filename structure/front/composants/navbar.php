<!-- MENU PRINCIPAL -->

<nav class="nav-principal">
    <a class="" href="/"><img class="logo" src="../assets/img/amlogo.png" alt="Action Mephi"></a>


    <ul id="popupForm">
        <li class="nav-item-active">
            <a class="active" aria-current="page" href="/">ACCUEIL</a>
        </li>
        <li class="nav-item ligne">
            <a class="brule" href="nous-decouvrir">NOUS DÉCOUVRIR</a>
        </li>
        <li class="nav-item ligne">
            <a class="brule" href="evenements">ÉVÉNEMENTS</a>
        </li>
        <li class="nav-item ligne">
            <a class="brule" href="nos-domaines">NOS DOMAINS D'ACTIONS</a>
        </li>
        <li class="nav-item ligne">
            <a class="brule" href="s-engager">S'ENGAGER</a>
        </li>

        <!--FORMULAIRE DE RECHERCHE POUR LE PHONE  -->
        <li class="area-bouton d-lg-none" id="popupForm">
            <a href=""><input type="text" id="area" placeholder=" Votre recherche"><button class="fas fa-magnifying-glass grandir bouton-area"></button></a>
        </li>

        <li>
            <a href=""><i class="fas fa-magnifying-glass grandir sucher d-none d-lg-block"></i></a>
        </li>


        <li class="donateur">
            <a class="" href="espace-donateur">
                <i class="fas fa-circle-user me-2"></i>ESPACE DONATEUR
            </a>
        </li>


        <!-- BOUTON MENU PHONE -->
        <div class="menuPhone d-lg-none">
            <i class="fas fa-bars"></i>
        </div>

        <!-- Bouton "Faire un don" à droite, masqué sur les écrans de bureau ""-->
        <li class="don donPhone carrousel-et-donPhone">
            <a class="" href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank"><i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
        </li>
    </ul>
</nav>


<!-- MENU PHONE 2-->


<ul class="navbar-nav me-auto mb-2 mb-lg-0 menuphone-2 d-lg-none">
    <i class="fas fa-xmark close-x"></i>

    <li class="nav-item-active">
        <a class="active" aria-current="page" href="/">ACCUEIL</a>
    </li>
    <li class="nav-item ligne">
        <a class="brule" href="nous-decouvrir">NOUS DÉCOUVRIR</a>
    </li>
    <li class="nav-item ligne">
        <a class="brule" href="evenements">ÉVÉNEMENTS</a>
    </li>
    <li class="nav-item ligne">
        <a class="brule" href="nos-domaines">NOS DOMAINS D'ACTIONS</a>
    </li>
    <li class="nav-item ligne">
        <a class="brule" href="s-engager">S'ENGAGER</a>
    </li>

    <li class="area-bouton d-lg-none gerade" id="popupForm">
        <a href=""><input type="text" id="area" placeholder=" Votre recherche"><button class="fas fa-magnifying-glass grandir bouton-area"></button></a>
    </li>


    <div class="donateur2 d-flex phone-hide" id="espace-donateur">
        <a class="espaceDona" href="espace-donateur">
            <i class="fas fa-circle-user me-2"></i>ESPACE DONATEUR
        </a>
    </div>

    <div class="donPhone2 carrousel-et-donPhone">
        <a class="" href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank"><i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
    </div>


    <!-- PETIT MENU -->

    <div class="droite navbarpetitPhone">
        <ul>
            <li><a class="droite-phone petitPhone" href="/#newsletter">S'inscrire à la newsletter</a></li>
            <li><a class="petitPhone" href="/presse">Presse</a></li>
            <li><a class="petitPhone" href="/contact">Contact</a></li>
            <li><a class="petitPhone" href="/faq">FAQ</a></li>
        </ul>
    </div>

</ul>







<?php
// AFFICHAGE DES MESSAGES FLASH 
if (isset($_SESSION['flash'])) {

    foreach ($_SESSION['flash'] as $flash) {
        $message = $flash['message'];
        $status = $flash['status'];

        switch ($status) {
            case 'success':
                $icon = 'Félicitation';
                break;
            case 'danger':
                $icon = 'Echec ';
                break;
            case 'warning':
                $icon = 'Attention ';
        }
        echo '
            <div class="alert alert-' . $status . ' alert-dismissible fade show" role="alert">
                <strong>' . $icon . '! </strong>' . $message . '.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
    }
    unset($_SESSION['flash']);
}
?>
</header>