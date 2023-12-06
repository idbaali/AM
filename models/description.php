<?php
// Fonction pour insérer une nouvelle catégorie d'actualité :
function insertCategory($name)
{
    global $connexion;

    $query = $connexion->prepare('INSERT INTO news_categories (name) VALUES (:name)');
    $query->bindValue(':name', $name, PDO::PARAM_STR);

    return $query->execute();
}

// Fonction pour récupérer toutes les catégories d'actualités
function getAllCategories()
{
    global $connexion;

    $query = $connexion->prepare('SELECT * FROM news_categories');
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}


// Fonction pour mettre à jour les détails d'une actualité :
function updateActualite($id, $title, $description, $country, $city, $categorie_id)
{
    global $connexion;

    $query = $connexion->prepare('UPDATE news SET title = :title, description = :description, country = :country, city = :city, categorie_id = :categorie_id WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->bindValue(':title', $title, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':country', $country, PDO::PARAM_STR);
    $query->bindValue(':city', $city, PDO::PARAM_STR);
    $query->bindValue(':categorie_id', $categorie_id, PDO::PARAM_INT);

    return $query->execute();
}


// Fonction pour supprimer une actualité :
function deleteActualite($id)
{
    global $connexion;

    $query = $connexion->prepare('DELETE FROM news WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    return $query->execute();
}


// Fonction pour récupérer les détails d'une actualité par son ID
function getActualiteDetailsById($actualite_id)
{
    global $connexion;

    // Préparez la requête SQL pour récupérer les détails de l'actualité par son ID
    $query = $connexion->prepare('SELECT * FROM news WHERE id = :actualite_id');
    $query->bindValue(':actualite_id', $actualite_id, PDO::PARAM_INT);
    $query->execute();

    // Récupérez les résultats de la requête
    $actualite_details = $query->fetch(PDO::FETCH_ASSOC);

    // Retournez les détails de l'actualité
    return $actualite_details;
}

?>
