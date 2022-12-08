<?php

require "./ba/connexion.php";


?>


<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Neptune : Connexion</title>
</head>
<body>
    <?php include('./nav-bar.php'); ?>
        <p>Vous êtes dans la page de connexion.</p>
        <form method="POST">
                  <input type="login" name="login" placeholder="Nom d'utilisateur*" required>
                  <br>
                  <input type="password" name="password" placeholder="Mot de passe*" required>
                  <br>
                  <input class="submit" type="submit" name="submit" value="Se connecter" >
                  <p>Vous n'avez pas de compte ?<a href="inscription.php"> Cliquez ici  pour le créer </a> </p>
        </form>
        <link rel="stylesheet" href="./css/form.css">
</body>
</html>
