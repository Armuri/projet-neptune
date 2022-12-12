<?php

require "./ba/connexion.php";

?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion - Hotel Neptune</title>
</head>
<body>
    <?php include('./nav-bar.php'); ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mon site de ouf </title>
</head>
<body>
    <link rel="stylesheet" href="./css/connexion.css">
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
        modal.style.display = "none";
        }
        }
        </script> 
     <!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Connexion</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form method="POST" class="modal-content animate" action="presentation-chambres.php" >

    <div class="container">
      <label for="name"><b>Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrer votre nom d'utilisateur" name="login" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

      <button type="submit">Se connecter</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
      </label>
    </div>

    <p class="compte">Vous n'avez pas de compte ?<a href="inscription.php"> Cliquez ici  pour le créer </a> </p>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div> 
    
</html>
</body>
</html>
