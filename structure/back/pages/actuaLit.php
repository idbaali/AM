<?php
require_once('nav_admin.php');
?>
<section class="p-login">
  <div class="row">
    <div class="col-md-2 col-sm-2 col-lg-2"></div>
    <div class="col-md-8 col-sm-8 col-lg-8">

      <!-- SEVEUR  -->
      <form method="POST" action="" class="formActualite">
        <?php
        // $title_actualite = htmlspecialchars(trim($_POST["title"]));
        // // $image_actualite = htmlspecialchars(trim($_POST["image"]));
        // $city_actualite = htmlspecialchars(trim($_POST["city"]));
        // $country_actualite = htmlspecialchars(trim($_POST["country"]));
        // $description_actualite = htmlspecialchars(trim($_POST["description"]));
        // $btnActualite_actualite = ($_POST["btnActualite"]);

        // // VERIFICATION INPUT VIDE
        // if(isset($btnActualite_actualite)) {
        //   if(empty($title_actualite) and empty($city_actualite) and empty($country_action) and empty($description_actualite)) {
        //     echo "Veuillez remplir tous les champs requis svp !";
        //   } else {
        //     // ENREGISTREMENT DANS LA BDD
        //     echo "Success";
        //   }
        // }

        ?>

        <form method="post" class="formActualite">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre de l'actualité</label>
            <input type="text" class="form-control" id="exampleInputTitle" name="title">
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
              <div class="mb-3">
                <label for="actualiteImage" class="form-label">Image de l'actualité</label>
                <input type="file" class="form-control" id="actualiteImage" name="actualiteImage">
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
              <div class="mb-3">
                <label for="actualiteDate" class="form-label">Date de l'actualité</label>
                <input type="datetime-local" class="form-control" id="actualiteDate" name="actualiteDate">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description de l'actualité</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
          </div>
          <div class="mb-3">
            <label for="country" class="form-label">Pays</label>
            <input type="text" class="form-control" id="country" name="country">
          </div>
          <div class="mb-3">
            <label for="city" class="form-label">Ville</label>
            <input type="text" class="form-control" id="city" name="city">
          </div>
          <button type="submit" class="btn btn-primary btnActualite">Soumettre</button>
        </form>
    </div>
    <!-- <div class="col-md-2 col-sm-2 col-lg-2"></div> -->
  </div>
</section>