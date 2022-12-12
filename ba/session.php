<?php

include "connexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select = $dbh->prepare('SELECT * FROM users WHERE nom_utilisateur=:login and mot_de_passe=:password and id_admin=:"1" ');
    $select->execute(array('login' => $login, 'password' => $password, 'id_admin' => "1"));
    $result = $select->fetch();
    if(!$result) {
        header('Location/inscription.php');
    }
        session_start();
        $_SESSION['prenom'] = $prenom;
        header('Location/accueil.php');
        exit;
}