<?php
// FILTER AUTORISATION FOR SESSION EMAIL
if (isset($_SESSION['email'])) {
  redirect('/admin/admin');
}
?>
<section class="p-login">

  <?php
  if (isset($_POST['envoyer'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (!empty($email) and !empty($password)) {
      $password_crypt = sha1($password);
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ((verify_admin($email, $password_crypt)) > 0) {
          $admin = affiche_admin($email, $password_crypt);

          // setFlash('Identification réussie avec succès!!!', 'success');
  ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Felicitation!</strong> Inscription enregistré avec succès.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php


          // CREATION THE SESSIONS
          $_SESSION['email'] = $admin["email"];
          $_SESSION['fname'] = $admin["first_name"];
          $_SESSION['lname'] = $admin["last_name"];
          $_SESSION['image'] = $admin["image"];

          // echo $_SESSION['lname'];
          redirect("/admin/admin");



          echo $_SESSION['lname'];
        } else {

        ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Echec!</strong> Identifiant ou mot de passe incorrect !.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php

        }
      } else {
        echo $email . ' invalide';
      }
    } else {
      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Echec!</strong> Veuillez remplir tous les champs requis svp !.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
    }
  }

  ?>
  <div class="row">
    <div class="col-md-3 col-sm-3 col-lg-3"></div>
    <div class="col-md-6 col-sm-6 col-lg-6">
      <form method="POST"> <!-- Ajout de l'attribut method pour envoyer le formulaire en POST -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
        </div>
        <button type="submit" class="btn btn-primary" name="envoyer" value="envoyer">Valider</button>
      </form>

      <div class="col-md-3 col-sm-3 col-lg-3"></div>
    </div>
</section>