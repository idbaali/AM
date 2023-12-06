<?php
// FONCTION POUR INSERER DES INSCRIPTIONS
if (!function_exists('insert_donateur')) {
    function insert_donateur($first_name, $last_name, $email, $password_vrais)
    {
        global $connexion;
        $insert_data = $connexion->prepare('INSERT INTO espace_donateur (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)');
        $insert_data->bindValue(':first_name', $first_name, PDO::PARAM_STR);
        $insert_data->bindValue(':last_name', $last_name, PDO::PARAM_STR);
        $insert_data->bindValue(':email', $email, PDO::PARAM_STR);
        $insert_data->bindValue(':password', $password_vrais, PDO::PARAM_STR);
        return $insert_data->execute();
    }
}
?>
