<?php

require "./ba/link-mysql.php" ;
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
    <header>
        <h1>Hôtel Neptune</h1>
    </header>
    <?php include('./nav-bar.php'); ?>
        <p>Vous êtes dans la page de connexion.</p>
        <form method="POST" action="connexion.php">
                  <input type="login" name="login" placeholder="Nom d'utilisateur*" required>
                  <br>
                  <input type="password" name="password" placeholder="Mot de passe*" required>
                  <br>
                  <input class="submit" type="submit" name="submit" value="Se connecter" >
                  <p>Vous n'avez pas de compte ? Cliquez <a href="inscription.php">ici</a>  pour le créer ! </p>
        </form>
        <link rel="stylesheet" href="./css/form.css">
</body>
</html>
