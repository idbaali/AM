<?php
// FONCTION POUR INSERER LES ACTUALITES
if (!function_exists('insert_actualites')) {
    function insert_actualites($title, $image, $categorie, $country, $city, $description)
    {
        global $connexion;
        $insert_data = $connexion->prepare('INSERT INTO news (title, image, description, country, city, categorie) VALUES (:title, :image, :description, :country, :city, :categorie)');
        $insert_data->bindValue(':title',$title, PDO::PARAM_STR);
        $insert_data->bindValue(':image',$image, PDO::PARAM_STR);
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
        $getActualites = $connexion->prepare('SELECT * FROM news');
        $getActualites->execute();
        $allActualites = $getActualites->fetchAll();
        return $allActualites;

    }
}
?>




<?php
// FONCTION POUR INSERER LES ACTUALITES AVEC INNER JOIN
// if (!function_exists('insert_actualites')) {
//     function insert_actualites($title, $categorie, $country, $city, $description, $imagePath)
//     {
//         global $connexion;
//         $insert_data = $connexion->prepare('INSERT INTO news (title, description, country, city, categorie_id, image) 
//                                            SELECT :title, :description, :country, :city, categories.id, :imagePath
//                                            FROM news_categories AS categories
//                                            WHERE categories.name = :categorie');
//         $insert_data->bindValue(':title', $title, PDO::PARAM_STR);
//         $insert_data->bindValue(':description', $description, PDO::PARAM_STR);
//         $insert_data->bindValue(':country', $country, PDO::PARAM_STR);
//         $insert_data->bindValue(':city', $city, PDO::PARAM_STR);
//         $insert_data->bindValue(':categorie', $categorie, PDO::PARAM_STR);
//         $insert_data->bindValue(':imagePath', $imagePath, PDO::PARAM_STR); // Assurez-vous d'avoir le chemin de l'image ici
//         return $insert_data->execute();
//     }
// }

// FONCTION POUR AFFICHER TOUTES LES ACTUALITES
// if (!function_exists('getAllActualites')) {
//     function getAllActualites()
//     {
//         global $connexion;
//         $getActualites = $connexion->prepare('SELECT news.*, categories.name AS categorie_name 
//                                              FROM news
//                                              INNER JOIN news_categories AS categories ON news.categorie_id = categories.id');
//         $getActualites->execute();
//         $allActualites = $getActualites->fetchAll();
//         return $allActualites;
//     }
// }
?>









