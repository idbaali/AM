<?php

session_start();

include("allInclude.php");


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {

        /* HOME */
    case 'home':

        include 'structures/front/pages/home.php';
        break;

        /* NOUS DECOUVRIR */
    case 'nous-decouvrir':

        include 'structures/front/pages/nousdecouvrir.php';
        break;

        /* EVENEMENTS */
    case 'evenements':

        include 'structures/front/pages/evenements.php';
        break;

        /* NOS DOMAINS DES ACTIONS */
    case 'nos-domaines-d-actions':

        include 'structures/front/pages/nosdomainesdaction.php';
        break;

        /* S'ENGAGER */
    case 's-engager':

        include 'structures/front/pages/sengager.php';
        break;

        /* ESPACE DENATEUR */
    case 'espace-donateur':

        include 'structures/front/pages/espacedonateur.php';
        break;

        /* FAIRE UN DON */
    case 'faire-un-don':

        include 'structures/front/pages/faireundon.php';
        break;

        /* DEVENIR BENEVOL */
    case 'devenir-benevol':

        include 'structures/front/pages/devenirbenevol.php';
        break;


        /*------------------------------------------------------------------------*/

        /* PORTAIL ACTION MEPHI */
    case 'portail-action-mephi':

        include 'structures/front/pages/portailactionmephi.php';
        break;

        /* S'INSCRIRE A LA NEWSLETTER */
    case 's-inscrire-a-la-newsletter':

        include 'structures/front/pages/sinscrirealanewsletter.php';
        break;

        /* PRESSE */
    case 'presse':

        include 'structures/front/pages/presse.php';
        break;

        /* CONTACT */
    case 'contact':

        include 'structures/front/pages/contact.php';
        break;

        /* FAQ */
    case 'faq':

        include 'structures/front/pages/faq.php';
        break;







        /* 404 NOT FOUND */
    default:
        header("HTTP/1.1 404 Not Found");
        include 'structures/front/pages/page-404.php';
        break;
        /* 404 NOT FOUND */
}
