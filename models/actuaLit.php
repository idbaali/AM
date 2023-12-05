<?php
// FONCTION POUR INSERER LES ACTUALITES
if (!function_exists('insert_actualites')) {
    function insert_actualites($title, $categorie, $country, $city, $description)
    {
        global $connexion;
        $insert_data = $connexion->prepare('INSERT INTO actualites (actuatite_title, description_actualite, actualite_country, actualite_city, actualite_categorie) VALUES (:title, :description, :country, :city, :categorie)');
        $insert_data->bindValue(':title',$title, PDO::PARAM_STR);
        $insert_data->bindValue(':description',$description, PDO::PARAM_STR);
        $insert_data->bindValue(':country',$country, PDO::PARAM_STR);
        $insert_data->bindValue(':city',$city, PDO::PARAM_STR);
        $insert_data->bindValue(':categorie',$categorie, PDO::PARAM_STR);
        return $insert_data->execute();
    }
}

// FONCTION POUR AFFICHER LES ACTUALITES
if (!function_exists('getAllActualites')) {
    function getAllActualites() {
        global $connexion;
        $getActualites = $connexion->prepare('SELECT * FROM actualites');
        $getActualites->execute();
        $allActualites = $getActualites->fetchAll();
        return $allActualites;

    }
}
?>