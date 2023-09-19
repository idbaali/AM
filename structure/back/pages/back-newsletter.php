<?php
// TRAITEMENT DU FORMULAIRE D'INSCRIPTION A LA NWESLETTER
if (isset($_POST['btn-newsletter'])) {
    $email = htmlspecialchars(trim($_POST['email'])); 
    
    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            setFlash('Votre e-mail est bien enregistré : ' . $email, 'success');
            // header('Location:/'); 
            redirect("/");
        } else {
               setFlash('Votre e-mail n\'est pas valide : '.$email , 'danger');
                // header('Location:/'); 
                redirect("/");
        }

    } else {
        setFlash('inserer votre email svp', 'danger');
        // header('Location:/');

        redirect("/");
    }
}

?>