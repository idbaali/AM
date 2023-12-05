<?php
require_once('nav_admin.php');
?>
<section class="p-login">
  <div class="row">
    <div class="col-md-2 col-sm-2 col-lg-2"></div>
    <div class="col-md-8 col-sm-8 col-lg-8">

      <form method="POST" action="" class="formActualite">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $title_actualite = htmlspecialchars(trim($_POST["title"]));
          // $image_actualite = $_FILES['actualiteImage'];
          $city_actualite = htmlspecialchars(trim($_POST["city"]));
          $country_actualite = htmlspecialchars(trim($_POST["country"]));
          $description_actualite = htmlspecialchars(trim($_POST["description"]));
          $categorie_actuatite = htmlspecialchars(trim($_POST["categorie"]));

          // VERIFICATION INPUT VIDE
          if (empty($title_actualite) || empty($city_actualite) || empty($country_actualite) || empty($description_actualite) || empty($categorie_actuatite)) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Echec!</strong> Veuillez remplir tous les champs requis svp !.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
          } else {
            // ENREGISTREMENT DANS LA BDD
            $actualites = insert_actualites($title_actualite, $categorie_actuatite, $country_actualite, $city_actualite, $description_actualite);
            if ($actualites) {
            ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Felicitation!</strong> Les actualites enregistré avec succès.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
            } else {
            ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Echec!</strong> echéc d enregistrement !.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        <?php
            }
          }
        }
        ?>

        <div class="mb-3">
          <label for="exampleInputTitle" class="form-label">Titre de l'actualité</label>
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
              <label for="categorie" class="form-label">Catégorie de l'actualité</label>
              <select class="form-select" aria-label="Default select example" name="categorie">
                <option selected>Selectionner votre catégorie</option>
                <option value="urgence">Urgence</option>
                <option value="information">Information</option>
                <option value="communique">Communiqué de presse</option>
                <option value="douloureux">Douloureux</option>
              </select>
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
        <button type="submit" class="btn btn-primary btnActualite" name="btnActualite">Soumettre</button>
      </form>
    </div>
  </div>
</section>