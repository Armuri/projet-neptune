<?php

require "link-mysql.php";

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
    $select = $dbh->prepare('SELECT * FROM users WHERE and nom_utilisateur=:login and mot_de_passe=:password');
    $select->execute(array('login' => $login, 'password' => $password));
    $result = $select->fetch();

    if(!$result) {
        header("location ./accueil.php");
    }
    session_start();
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $login;

    header("location: ./session.php");
    exit;
}


?>
