<?php
// FONCTION POUR INSERER DES NOS ACTIONS
if (!function_exists('insert_actionActions')) {
    function insert_actionActions($title, $categorie, $country, $city, $description)
    {
        global $connexion;
        $insert_data = $connexion->prepare('INSERT INTO our_action (title, description, country, city, categorie) VALUES (:title, :description, :country, :city, :categorie)');
        $insert_data->bindValue(':title',$title, PDO::PARAM_STR);
        $insert_data->bindValue(':description',$description, PDO::PARAM_STR);
        $insert_data->bindValue(':country',$country, PDO::PARAM_STR);
        $insert_data->bindValue(':city',$city, PDO::PARAM_STR);
        $insert_data->bindValue(':categorie',$categorie, PDO::PARAM_STR);
        return $insert_data->execute();
    }
}

// FONCTION POUR AFFICHER DES NOS ACTIONS
if (!function_exists('getAllActions')) {
    function getAllActions() {
        global $connexion;
        $getNosActions = $connexion->prepare('SELECT * FROM our_action');
        $getNosActions->execute();
        $allActions = $getNosActions->fetchAll();
        return $allActions;

    }
}




?>
