<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<section class="p-home">

    <?php

    include_once('models/connexion.php');
    include_once('models/description.php');

// Vérifier si l'ID de l'actualité est présent dans l'URL
if (isset($_GET['id'])) {
    $actualite_id = $_GET['id'];
    error_log("ID : " . $actualite_id);

    // Ajouter un message de débogage
    var_dump($_GET);


    // Ajouter un message de débogage
    // var_dump($_GET['id']);
    var_dump($_GET);

    // Récupérer les détails de l'actualité en fonction de l'ID
    $actualite_details = getActualiteDetailsById($actualite_id);

    // Ajouter un message de débogage
    var_dump($actualite_details);

    // Vérifier si l'actualité existe
    if ($actualite_details) {

    ?>
            <div class="p-actualite">
                <h1>DESCRIPTION</h1>
                <h2><?= $actualite_details['title'] ?></h2>
                <p><?= $actualite_details['description'] ?></p>
                <!-- Autres détails de l'actualité -->
                <small><?= $actualite_details['date'] ?> | <?= $actualite_details['city'] ?> | <?= $actualite_details['country'] ?></small>
            </div>
    <?php
        } else {
            echo "Actualité non trouvée.";
        }
    } else {
        echo "ID de l'actualité non spécifié.";
    }
    ?>







</section>