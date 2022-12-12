<?php

require "link-mysql.php";

if (isset ($_POST["prenom"])){
    $prenom = $_POST["prenom"];
}else {
    $prenom = "";
}


if (isset ($_POST["login"])){
    $login = $_POST["login"];
}else {
    $login = "";
}

if (isset ($_POST["password"])){
    $password = $_POST["password"];
}else {
    $password = "";
}


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select = $dbh->prepare('SELECT * FROM users WHERE nom_utilisateur=:login and mot_de_passe=:password');
    $select->execute(array('login' => $login, 'password' => $password));
    $result = $select->fetchAll();

    if(!$result) {
        echo '<h1>Mauvaise coordonnées,<a href="./connexion.php">réesayer</a>.</p>';
    }
    session_start();

    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $prenom;

    header("location: bienvenue.php");
}


?>
