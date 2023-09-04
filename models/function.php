<?php
    // FONCTION POUR AFFICHER LES MESSAGES
     function setFlash($message, $status)
     {
 
         $_SESSION['flash'][] = array(
             'message' => $message,
             'status' => $status
         );
     }
 


?>