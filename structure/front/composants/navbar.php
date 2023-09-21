<!-- MENU PRINCIPAL -->

<!-- <nav class="nav-principal">
    <a class="" href="/"><img class="logo" src="assets/img/amlogo.png" alt="Action Mephi"></a>


    <button class="navbar-toggler" type="button" id="hamburgerBtn">
        <span class="navbar-toggler-icon"></span>
    </button> 


    <ul id="popupForm">
        <li class="item-active">
            <a class="active" aria-current="page" href="/">ACCUEIL</a>
        </li>
        <li class="ligne">
            <a class="brule" href="nous-decouvrir">NOUS DECOUVRIR</a>
        </li>
        <li class="ligne">
            <a class="brule" href="evenements">EVENEMENTS</a>
        </li>
        <li class="ligne">
            <a class="brule" href="nos-domaines">NOS DOMAINS D'ACTIONS</a>
        </li>
        <li class="ligne">
            <a class="brule" href="s-engager">S'ENGAGER</a>
        </li>

        <li>
            <a href=""><i class="fas fa-magnifying-glass grandir sucher"></i></a>
        </li>


        <li class="donateur">
            <a class="" href="espace-donateur">
                <i class="fas fa-circle-user me-2"></i>ESPACE DONATEUR
            </a>
        </li>

        <li class="don">
            <a class="" href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank"><i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
        </li>

    </ul>

</nav> -->


<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">

        <!-- Logo à gauche -->
        <a class="navbar-brand" href="/"><img class="logo" src="../assets/img/amlogo2.png" alt="Action Mephi"></a>

        <!-- Bouton du menu hamburger à gauche -->
        <button class="navbar-toggler hamburger" id="menu-hamburger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Menu principal -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="/">ACCUEIL</a>
                </li>
                <li class="nav-item ligne">
                    <a class="nav-link brule" href="decouvrir">DECOUVRIR</a>
                </li>
                <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                <li class="nav-item ligne">
                    <a class="nav-link brule" href="evenements">EVENEMENTS</a>
                </li>
                <li class="nav-item ligne">
                    <a class="nav-link brule" href="domaines-actions">DOMAINS DES ACTIONS</a>
                </li>
                <li class="nav-item ligne">
                    <a class="nav-link brule" href="s-engager">S'ENGAGER</a>
                </li>

                <li class="area-bouton d-lg-none" id="popupForm">
                    <a href=""><input type="text" id="area" placeholder="   Votre recherche"><button class="fas fa-magnifying-glass grandir bouton-area"></button></a>
                </li>
            </ul>

            <!-- Formulaire de recherche -->
            <li class="nav-item ligne phone-hide brule sucher d-none d-lg-block">
                <a href="nav-link brule">
                    <i class="fas fa-magnifying-glass grandir sucher"></i>
                </a>
            </li>

            <div class="donateur d-flex phone-hide" id="espace-donateur">
                <a class="espaceDona" href="espace-donateur">
                    <i class="fas fa-circle-user me-2"></i>ESPACE DONATEUR
                </a>
            </div>


        </div>
        <!-- Bouton "Faire un don" à droite, masqué sur les écrans de bureau ""-->
        <div class="donPhone carrousel-et-donPhone">
            <a class="" href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank"><i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
        </div>
    </div>
</nav>





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