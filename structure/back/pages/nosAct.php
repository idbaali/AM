<?php
require_once('nav_admin.php');
?>
<section class="p-login">
  <div class="row">
    <div class="col-md-2 col-sm-2 col-lg-2"></div>
    <div class="col-md-8 col-sm-8 col-lg-8"></div>

    <form method="POST" action="">
      <?php
      $title_action = htmlspecialchars(trim($_POST["title"]));
      $image_action = htmlspecialchars(trim($_POST["image"]));
      $date_action = htmlspecialchars(trim($_POST["date"]));
      $country_action = htmlspecialchars(trim($_POST["country"]));
      $description_action = htmlspecialchars(trim($_POST["description"]));
      $btn_action_action = htmlspecialchars(trim($_POST["btn_action"]));

      ?>

      <form>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
          <div class="mb-3">
            <label for="actionTitle" class="form-label">Titre de l'action</label>
            <input type="text" class="form-control" id="actionTitle" name="title">

          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
          <div class="mb-3">
            <label for="actionImage" class="form-label">Image de l'action</label>
            <input type="file" class="form-control" id="actionImage" name="image">
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
          <div class="mb-3">
            <label for="actionDate" class="form-label">Date de l'action</label>
            <input type="datetime-local" class="form-control" id="actionDate" name="date">
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
          <div class="mb-3">
            <label for="actionCountry" class="form-label">Pays</label>
            <input type="text" class="form-control" id="actionCountry" name="country">
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
          <div class="mb-3">
            <label for="actionDescription" class="form-label">Description de l'action</label>
            <textarea class="form-control" id="actionDescription" name="description" rows="4"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="btn_action">Soumettre</button>
      </form>
  </div>
</section>