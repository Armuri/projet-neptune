<?php


require "./ba/helper.php";

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
        <p>Vous êtes dans la page d'inscription, remplissez les champs suivants afin de créer votre compte.</p>
              <form method="POST" action="connexion.php">
                  <input type="text" name="nom" placeholder="Nom*" required>
                  <br>
                  <input type="text" name="prenom" placeholder="Prénom*" required>
                  <br>
                  <input type="email" name="email" placeholder="xxx@xxx.com*" required>
                  <br>
                  <input type="login" name="login" placeholder="Nom d'utilisateur*" required>
                  <br>
                  <input type="password" name="password" placeholder="Mot de passe*" required>
                  <br>
                  <!-- 
                  <input type="password" name="confirm-password" placeholder="Confirmer votre mot de passe*" required>
                  <br> -->
                  <input type="submit" name="submit" value="S'inscrire" >
                  <p>Vous avez déjà un compte ? Connectez-vous <a href="connexion.php" class="connexion">ici</a>.</p>
              </form>
    <link rel="stylesheet" href="./css/index.css">
</body>
</html>
