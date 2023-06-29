<?php

session_start();

include("allInclude.php");


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {


        /* MENU PRINCIPAL */

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

        


        /*------------------------- MENU DEROULANT---------------------------*/

        /* Aide aux enfants handicapées */
    case 'aide-enfants':

        include 'structures/front/pages/enfants.php';
        break;

        /* Aide aux personnes adult handicapées */
    case 'aide-adults':

        include 'structures/front/pages/adults.php';
        break;

        /* Aide aux orphelins */
    case 'aide-orphelins':

        include 'structures/front/pages/orphilins.php';
        break;

        /* Devenir bénévole */
    case 'devenir-benevole':

        include 'structures/front/pages/dev_benevol.php';
        break;

        /* Devenir donateur */
    case 'devenir-donateur':

        include 'structures/front/pages/dev_donateur.php';
        break;

        /* Devenir membre */
    case 'devenir-membre':

        include 'structures/front/pages/dev_membre.php';
        break;

        /* Devenir formateur */
    case 'devenir-formateur':

        include 'structures/front/pages/dev_formateur.php';
        break;

        /* Formation de la musique */
    case 'formation-musique':

        include 'structures/front/pages/formation.php';
        break;

        /* Faire un stage */
    case 'faire-stage':

        include 'structures/front/pages/stage.php';
        break;





        /*---------------------------- SOUS MENU OU PETIT NAVBAR --------------------------- */

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

include ('structures/front/composents/footer.php');

