<?php

require_once "link-mysql.php";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select = $dbh->prepare('SELECT * FROM users WHERE nom_utilisateur=:login and mot_de_passe=:password');
    $select->execute(array('login' => $login, 'password' => $password));
    if(!'login' ($_GET["login"])) {
        echo "nom d'utilisateur incorrect.";
    }
    if(!'password' ($_GET["login"])){
        echo "mot de passe est incorrect.";
    }
    header('Location/accueil.php');

}



?>