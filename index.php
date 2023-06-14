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

        include 'structures/front/pages/nous_decouvrir.php';
        break;

        /* EVENEMENTS */
    case 'evenements':

        include 'structures/front/pages/evenements.php';
        break;

        /* NOS DOMAINS DES ACTIONS */
    case 'nos-domaines':

        include 'structures/front/pages/nos_domaines.php';
        break;

        /* S'ENGAGER */
    case 's-engager':

        include 'structures/front/pages/s_engager.php';
        break;

        /* ESPACE DENATEUR */
    case 'espace-donateur':

        include 'structures/front/pages/espace_donateur.php';
        break;

        /* FAIRE UN DON */
    case 'faire-don':

        include 'structures/front/pages/faireDon.php';
        break;

        /* DEVENIR BENEVOL */
    case 'benevol':

        include 'structures/front/pages/benevol.php';
        break;

        
        /*------------------------------------------------------------------------*/

        /* PORTAIL ACTION MEPHI */
    case 'portail':

        include 'structures/front/pages/portail.php';
        break;

        /* S'INSCRIRE A LA NEWSLETTER */
    case 'newsletter':

        include 'structures/front/pages/newsletter.php';
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
