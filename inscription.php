<?php

require "./ba/helper.php"

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
                  <input type="text" name="nom" placeholder="Nom" required>
                  <br><br>
                  <input type="text" name="prenom" placeholder="Prénom" required>
                  <br><br>
                  <input type="email" name="email" placeholder="xxx@xxx.com" required>
                  <br><br>
                  <input type="login" name="login" placeholder="Nom d'utilisateur" required>
                  <br><br>
                  <input type="password" name="password" placeholder="Mot de passe" required>
                  <br><br>

                  <!--
                  <p>Confirmer votre mot de passe</p>
                  <input type="text" name="confirm-password" id="confirm-password">
                  <br>
                  -->
                  <input type="checkbox" name="checkbox" placeholder="Mémoriser ma connexion">
                  <br>
                  <input type="submit" name="submit" value="S'inscrire" >
              </form>
    <link rel="stylesheet" href="./css/index.css">
</body>
</html>

