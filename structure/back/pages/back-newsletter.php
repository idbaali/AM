<?php
if (isset($_POST['btn-newsletter'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    // Verification si l'imput est vide
    if(empty($email)){
        setFlash('inserer votre email svp', 'danger');
        // header('Location:/');
        ?>
        <script>
            window.location.href="/";
        </script>
        <?php

    }else {
        setFlash('bravo, votre e-mail est : '.$email , 'success');
        // header('Location:/'); 
        ?>
        <script>
            window.location.href="/";
        </script>
        <?php
    }
   

    
}

?>
