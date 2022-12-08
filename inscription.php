<?php
require "./ba/inscription.php";

?>


<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription - Hotel Neptune</title>
</head>
    <?php include('./nav-bar.php'); ?>
<body>
    <link rel="stylesheet" href="./css/inscription.css">
          <form method="POST" action="connexion.php">
            <div class="container">
              <h1>S'inscrire</h1>
              <p>Remplissez le formulaire afin de créer votre compte.</p>
              <hr>
              
              <label for="nom"><b>Nom</b></label>
              <input type="text" placeholder="Votre nom*" name="nom" required>

              <label for="prenom"><b>Prénom</b></label>
              <input type="text" placeholder="Votre prénom*" name="prenom" required>
              
              <label for="email"><b>Email</b></label>
              <input type="email" placeholder="xxx@xxx.xxx*" name="email" required>

              <label for="login"><b>Nom d'utilisateur</b></label>
              <input type="login" placeholder="Nom d'utilisateur*" name="login" required>

              <label for="password"><b>Mot de passe</b></label>
              <input type="password" placeholder="Entrez votre mot de passe*" name="password" required>

              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Se souvenir de moi
              </label>

              <p>Vous avez déjà un compte ? <a href="connexion.php">Cliquez ici</a></p>

              <div class="clearfix">
                <button type="button" class="cancelbtn">Annuler</button>
                <button type="submit" class="signup">S'inscrire</button>
              </div>
            </div>
          </form>
        </div> 
</body>
</html>

