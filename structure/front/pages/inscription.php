<section class="p-home p-login">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-lg-3"></div>
        <div class="col-md-6 col-sm-6 col-lg-6">

<?php

function sendConfirmationEmail($to) {
    $subject = 'Confirmation d\'inscription';
    $message = 'Félicitations ! Votre inscription a été enregistrée avec succès. Veuillez consulter votre e-mail, parfois vous pouvez le trouver dans votre dossier de spam.';
    $headers = 'From: ikebaalidavid@live.de' . "\r\n" .
        'Reply-To: ikebaalidavid@yahoo.fr' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}

if (isset($_POST['inscription'])) {

        $first_name = htmlspecialchars(trim($_POST["first_name"]));
        $last_name = htmlspecialchars(trim($_POST["last_name"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $password = htmlspecialchars(trim($_POST["password"]));
        $confirmPassword = htmlspecialchars(trim($_POST["confirmPassword"]));

        if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirmPassword)) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Echec!</strong> Veuillez remplir tous les champs requis svp !.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        } elseif ($password != $confirmPassword) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Echec!</strong> Les deux mots de passe ne sont pas identiques !.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        } else {
            // Move password hashing here
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);

            if (user_exists($email)) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Echec!</strong> L\'utilisateur avec cet email existe déjà !.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
            } else {
                // ENREGISTREMENT DANS LA BDD
                $user = insert_inscription($first_name, $last_name, $email, $password_hashed);

                if ($user) {
                    sendConfirmationEmail($email);
                                                            // Redirect
                    echo '<script>window.location.href = "/confirmation";</script>';
                    exit();
                } else {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Echec!</strong> Échec de l\'enregistrement !.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                }
            }
        }

}
?>


            <h2>Inscription</h2>

            <form action="" method="POST" class="inscriptionForm">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="first_name">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="last_name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Confirmer mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" name="confirmPassword">
                        </div>
                    </div>
                </div>

                <input type="hidden" name="csrf_token" value="">

                <button type="submit" class="btn btn-primary" name="inscription">S'inscrire</button>
            </form>
        </div>

        <div class="col-md-3 col-sm-3 col-lg-3"></div>
    </div>
</section>

</body>
</html>
