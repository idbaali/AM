<?php
// FONCTION POUR INSERER DES UTILISATEURS
if (!function_exists('insert_user')) {
    function insert_user($first_name, $last_name, $email, $password)
    {
        global $connexion;
        $tableName = 'users'; // Assurez-vous de définir le bon nom de table
        $insert_data = $connexion->prepare("INSERT INTO $tableName (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)");
        $insert_data->bindValue(':first_name', $first_name, PDO::PARAM_STR);
        $insert_data->bindValue(':last_name', $last_name, PDO::PARAM_STR);
        $insert_data->bindValue(':email', $email, PDO::PARAM_STR);
        $insert_data->bindValue(':password', $password, PDO::PARAM_STR);
        return $insert_data->execute();
    }
}

// FONCTION POUR VÉRIFIER L'EXISTENCE D'UN UTILISATEUR PAR EMAIL

if (!function_exists('user_exists')) {
    function user_exists($email)
    {
        global $connexion;
        $tableName = 'users'; // Assurez-vous de définir le bon nom de table
        $check_user = $connexion->prepare('SELECT COUNT(*) FROM ' . $tableName . ' WHERE email = :email');
        $check_user->bindValue(':email', $email, PDO::PARAM_STR);
        $check_user->execute();
        return $check_user->fetchColumn() > 0;
    }
}
?>

