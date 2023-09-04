<?php
if (isset($_POST['btn-newsletter'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    // Verification si l'imput est vide
    if(empty($email)){
        setFlash('inserer votre email svp', 'danger');
        header('Location:/');
    }else {
        setFlash('bravo', 'success');
        header('Location:/'); 
    }
    
}
