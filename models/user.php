<?php

function findOneUserBy($critere,$value) {
    // SQL
    // Récupération de la variable $db par l'intermediaire d'un global > situé dans le fichier db_connect.php > fichier qui sera appelé via register.php
    global $db;
    $sql = "SELECT * FROM users WHERE email = :email";
    //$sql = "SELECT * FROM users WHERE $critere = '$value'";
    // Préparer la requête
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":email",$value,PDO::PARAM_STR);
    // Executer la requête
    $resultat = $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resultat = $stmt->fetchAll();
   // var_dump($resultat);
    // echo "</pre>";
    return $resultat;

    function addUser() {
        $Sql = "INSERT INTO users (login,email, password, nom, prenom, is_admin, created_at) VALUES (:login,:email,:password,:nom,:prenom,:is_admin,:created_at)";
        $stmt = $db->preapre($Sql);
        $stmt->bindParam(":login"),$datas['login'],PDO::PARAM_STR;
        $stmt->bindParam(":email"),$datas['email'],PDO::PARAM_STR;
        $stmt->bindParam(":password",password_hash($datas['password'],PASSWORD_ARGON2I), PDO::PARAM_STR);
        $stmt->bindParam(":nom"),$datas['nom'],PDO::PARAM_STR;
        $stmt->bindParam(":prenom"),$datas['prenom'],PDO::PARAM_STR;
        $stmt->bindParam(":is_admin",0,PDO::PARAM_BOOL);
        $stmt->bindParam(":created_at",date('Y-m-d H:i:s'),PDO::PARAM_STR);
        $stmt->execute();
    }
}