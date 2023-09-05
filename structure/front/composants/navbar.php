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
        <a class="navbar-brand" href="/"><img class="logo" src="assets/img/amlogo.png" alt="Action Mephi"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
            </ul>

            <form class="d-flex me-2 phone-hide brule sucher">
                <input class="form-control me-2 sucher" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline-info sucher" type="submit">Ok</button>
            </form>

            <div class="donateur d-flex phone-hide">
                <a class="" href="espace-donateur">
                    <i class="fas fa-circle-user me-2"></i>ESPACE DONATEUR
                </a>
            </div>

            <div class="don d-flex phone-hide">
                <a class="" href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank"><i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
            </div>
        </div>
    </div>
</nav>

<?php
if (isset($_SESSION['flash'])) {
    foreach ($_SESSION['flash'] as $flash) {
        $message = $flash['message'];
        $status = $flash['status'];

        switch ($status) {
            case 'success':
                $icon = 'felicitation';
                break;
            case 'danger':
                $icon = 'echec';
                break;
            case 'warning':
                $icon = 'attention';
        }
        // Afficher le message avec le statut approprié
        echo '
            <div class="alert alert-' . $status . ' alert-dismissible fade show" role="alert">
                <strong>' . $icon . '!</strong>' . $message . '.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
    }
    // Supprimer le message de la session
    unset($_SESSION['flash']);
}
?>

</header>