<?php
// FONCTION POUR INSERER DES INSCRIPTIONS
if (!function_exists('insert_inscription')) {
    function insert_inscription($first_name, $last_name, $email, $password_vrais)
    {
        global $connexion;
        $tableName = 'espace_donateur'; // Assurez-vous de définir le bon nom de table
        $insert_data = $connexion->prepare("INSERT INTO $tableName (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)");
        $insert_data->bindValue(':first_name', $first_name, PDO::PARAM_STR);
        $insert_data->bindValue(':last_name', $last_name, PDO::PARAM_STR);
        $insert_data->bindValue(':email', $email, PDO::PARAM_STR);
        $insert_data->bindValue(':password', $password_vrais, PDO::PARAM_STR);
        return $insert_data->execute();
    }
}
?>

