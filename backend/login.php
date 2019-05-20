<?php

// 1- Connexion à la DB
require '../kernel/db_connect.php';
// 2- Récupérer les données du form
require '../kernel/functions.php';
$fields_required = ['login','password'];
$datas_form = extractDatasForm($_POST, $fields_required);
if(in_array(null,$datas_form)){
    $messages[] = "Tous les champs sont obligatoires";

}
// 3- Vérifier que tous les champs sont remplis


// 4- Lancer une requête SQL pour récupérer le user avec le login saisi
// 5- Comparer le mot de passe stocké dans la DB au mot de passe saisi par le user
// 6- Si comparaison ok > is-admin == 1 ??
// 7- Si user est admin > démarrage session, stockage dans la session d'une preuve d'authentification
// 8- Redirection du user vers la page gestion.php (page à créer)

// Gestion des erreurs avec la variable $_SESSION['messages']
// On cumule les messages d'erreur et on redirige le user sur le form de login avec affichages de toutes les eereurs