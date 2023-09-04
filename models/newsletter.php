<?php
if(!function_exists('insert_newsletter')) {
    function insert_newsletter($email)  {
        global $connexion;
        $insert_data = $connexion->prepare('INSERT INTO newsletter (email) VALUES (:email)');
        $insert_data->bindValue(':email', $email, PDO::PARAM_STR);
        return $insert_data->execute();
    }
}

?>