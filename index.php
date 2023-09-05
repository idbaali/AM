<?php

session_start();

include("allInclude.php");


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {


        /* MENU PRINCIPAL */


        /* HOME */
    case 'home':

        include 'structure/front/pages/home.php';
        break;

        /* DECOUVRIR */
    case 'decouvrir':

        include 'structure/front/pages/decouvrir.php';
        break;

        /* EVENEMENTS */
    case 'evenements':

        include 'structure/front/pages/evenements.php';
        break;

        /* DOMAINS DES ACTIONS */
    case 'domaines-actions':

        include 'structure/front/pages/domaines_actions.php';
        break;

        /* S'ENGAGER */
    case 's-engager':

        include 'structure/front/pages/s_engager.php';
        break;

        /* ESPACE DENATEUR */
    case 'espace-donateur':

        include 'structure/front/pages/espace_donateur.php';
        break;

        /* FAIRE UN DON */
    case 'faire-don':

        include 'structure/front/pages/faire_don.php';
        break;



        /*---------------------------- PAGES INTERNE --------------------------- */

        /* TOUTES LES ACTUALITES */
    case 'all_news':

        include 'structure/front/pages/all_news.php';
        break;

        /* TOUTES LES ACTIONS */
    case 'all_actions':

        include 'structure/front/pages/all_actions.php';
        break;

     
        /* DEVENIR BENEVOLE */
    case 'dev_benevole':

        include 'structure/front/pages/dev_benevole.php';
        break;   

        



        /*------------------------- MENU DEROULANT---------------------------*/

        /* Aide aux enfants handicapées */
    case 'aide-enfants':

        include 'structure/front/pages/enfants.php';
        break;

        /* Aide aux personnes adult handicapées */
    case 'aide-adults':

        include 'structure/front/pages/adults.php';
        break;

        /* Aide aux orphelins */
    case 'aide-orphelins':

        include 'structure/front/pages/orphilins.php';
        break;


        /* Devenir donateur */
    case 'devenir-donateur':

        include 'structure/front/pages/dev_donateur.php';
        break;

        /* Devenir membre */
    case 'devenir-membre':

        include 'structure/front/pages/dev_membre.php';
        break;

        /* Devenir formateur */
    case 'devenir-formateur':

        include 'structure/front/pages/dev_formateur.php';
        break;

        /* Formation de la musique */
    case 'formation-musique':

        include 'structure/front/pages/formation.php';
        break;

        /* Faire un stage */
    case 'faire-stage':

        include 'structure/front/pages/stage.php';
        break;





        /*---------------------------- SOUS MENU OU PETIT NAVBAR --------------------------- */

        /* PORTAIL ACTION MEPHI */
    case 'portail':

        include 'structure/front/pages/portail.php';
        break;

        /* S'INSCRIRE A LA NEWSLETTER */
    case 'newsletter':

        include 'structure/front/pages/newsletter.php';
        break;

        /* PRESSE */
    case 'presse':

        include 'structure/front/pages/presse.php';
        break;

        /* CONTACT */
    case 'contact':

        include 'structure/front/pages/contact.php';
        break;

        /* FAQ */
    case 'faq':

        include 'structure/front/pages/faq.php';
        break;




/* -------------------TRAITEMANT BACK-END------------------------ */

                /* NEWSLETTER */
    case 'back-newsletter':

        include 'structure/back/pages/back-newsletter.php';
        break;






        /* 404 NOT FOUND */
    default:
        header("HTTP/1.1 404 Not Found");
        include 'structure/front/pages/page-404.php';
        break;
        /* 404 NOT FOUND */
}

include('structure/front/composants/footer.php');
