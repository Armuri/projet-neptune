<?php

require_once "./ba/helper.php";

?>


<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Neptune : Connexion</title>
</head>
<body>
    <header>
        <h1>Hôtel Neptune</h1>
    </header>
        <?php include('./nav-bar.php'); ?>
        <p>Vous êtes dans la page d'inscription.</p>
              <form method="POST">
                  <p>Nom</p>
                  <input type="text" name="nom" id="nom">
                  <p>Prénom</p>
                  <input type="text" name="prenom" id="prenom">
                  <p>Mail</p>
                  <input type="text" name="mail" id="mail">
                  <p>Nom d'utilisateur</p>
                  <input type="text" name="login" id="login">
                  <p>Mot de passe </p>
                  <input type="text" name="password" id="password">
                  <!--
                  <p>Confirmer votre mot de passe</p>
                  <input type="text" name="confirm-password" id="confirm-password">
                  <br>
                  -->
                  <br>
                  <input type="submit" name="envoyer">
              </form>
    <link rel="stylesheet" href="./css/index.css">
</body>
</html>

