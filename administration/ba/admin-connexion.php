<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select = $dbh->prepare('SELECT * FROM users WHERE and id_admin:=id_admin');
    $select->execute(array('id_admin' => 1));
    $result = $select->fetch();

    if(!$result) {
        header("location ./accueil.php");
    }
    session_start();
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = "admin";

    header("location: /administration/page-administration.php");
    exit;
}