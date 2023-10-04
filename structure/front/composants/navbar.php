<!-- MENU PRINCIPAL -->

<div class="content-to-hide">

    <nav class="nav-principal">

        <!-- MENU HAMBURGER -->
        <!-- <i class="fas fa-bars menuHamburger d-lg-none"></i> -->

        <!-- LOGO POUR MENU PRINCIPAL -->
        <a class="" href="/"><img class="logo" src="../assets/img/amlogo.png" alt="Action Mephi"></a>

        <!-- FAIRE UN DON RESPONSIVE -->
        <!-- <li class="donPhone d-lg-none">
        <a class="" href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank"><i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
    </li> -->


        <ul id="popupForm">

            <li class="nav-item-active">
                <a class="active" aria-current="page" href="/">ACCUEIL</a>
            </li>
            <li class="nav-item ligne">
                <a class="brule" href="/nous-decouvrir">NOUS DÉCOUVRIR</a>
            </li>
            <li class="nav-item ligne">
                <a class="brule" href="/evenements">ÉVÉNEMENTS</a>
            </li>
            <li class="nav-item ligne">
                <a class="brule" href="/nos-domaines">NOS DOMAINS D'ACTIONS</a>
            </li>
            <li class="nav-item ligne">
                <a class="brule" href="/s-engager">S'ENGAGER</a>
            </li>

            <!-- BOUTTON DE RECHERCHE POUR MENU PRINCIPAL-->
            <li>
                <a href=""><i class="fas fa-magnifying-glass grandir sucher d-none d-lg-block"></i></a>
            </li>

            <!-- DONATEUR POUR MENU PRINCIPAL-->
            <li class="donateur">
                <a class="" href="espace-donateur">
                    <i class="fas fa-circle-user me-2"></i>ESPACE DONATEUR
                </a>
            </li>


            <!-- FAIRE UN DON POUR MENU PRINCIPAL -->
            <li class="don">
                <a class="" href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank"><i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
            </li>
        </ul>

    </nav>

</div>




<!-- ENSEMBLE DU MENU HAMBURGER -->
<div class="hautMenuPhone">

    <!-- MENU HAMBURGER -->
    <i class="fas fa-bars menuHamburger"></i>

    <!-- POUR FERMER LE MENU : CloseBoutton -->
    <i class="fas fa-xmark close-X"></i>

    <!-- LOGO RESPONSIVE OU PHONE-->
    <a class="" href="/"><img class="logo" src="../assets/img/amlogo.png" alt="Action Mephi"></a>

    <!-- FAIRE UN DON RESPONSIVE -->
    <div class="donPhone">
        <a class="" href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank"><i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
    </div>

</div>



<!-- MENU PHONE OU RESPONSIVE-->
<div class="menuPhone">
    <ul class="navbar-nav menuPhone1">

        <!-- DONATEUR RESPONSIVE OU PHONE-->
        <div class="donateur2" id="espace-donateur">
            <a class="espaceDona" href="/espace-donateur">
                <i class="fas fa-circle-user me-2"></i>ESPACE DONATEUR
            </a>
        </div>

        <!-- BOUTTON DE RECHERCHE PHONE -->
        <div class="">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Votre recherche" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Recherche</button>
            </form>
        </div>

        <div class="">
            <li class="">
                <a class="" href="/">ACCUEIL</a>
            </li>
            <li class="">
                <a class="" href="/nous-decouvrir">NOUS DÉCOUVRIR</a>
            </li>
            <li class="">
                <a class="" href="/evenements">ÉVÉNEMENTS</a>
            </li>
            <li class="">
                <a class="" href="/nos-domaines">NOS DOMAINS D'ACTIONS</a>
            </li>
            <li class="">
                <a class="" href="/s-engager">S'ENGAGER</a>
            </li>
        </div>
    </ul>
    <!-- PETIT MENU RESPONSIVE OU PHONE-->

    <div class="navbarpetitPhone">

        <ul class="navbar-nav">
            <li><a class="droite-phone petitPhone" href="/#newsletter">S'inscrire à la newsletter</a></li>
            <li><a class="petitPhone" href="/presse">Presse</a></li>
            <li><a class="petitPhone" href="/contact">Contact</a></li>
            <li><a class="petitPhone" href="/faq">FAQ</a></li>
        </ul>
    </div>

</div>





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