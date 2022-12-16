<?php
include "./page_reservation.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chambres - Hotel Neptune</title>
</head>
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
    <body>
            <link rel="stylesheet" href="./chambres-reservation.css">
    
    <section id="section-1">

            <div class="container">
                <h1> Chambre Triple Economique</h1>
               <div class="left">
                <img src="./chambres/chambre-triple-economique.jpg" alt="chambre-triple-economique" height="300" width="650">
               </div> 
               <div class="midle">
                <h3>Avantage de la chambre : </h3>
                <ul>
                  <li>Douche et Baignoire</li>
                  <li>Coffre fort</li>
                  <li>Wifi gratuite</li>
                  <li>Télévision Full HD</li>
                  </ul>
                </div>
            </div>
    </section>
    <button onclick="document.getElementById('id01').style.display='block'">Réservation</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <form method="POST" class="modal-content animate" action="/accueil.php">

    <div class="container">

      <label for="name"><b>Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrer votre nom d'utilisateur" name="login" required>
      <label for="name"><b>E-mail :</b></label>
      <input type="email" placeholder="Entrer votre e-mail" name="email" required>
      <label for="name"><b>Ecrivez le nom de la chambre : Chambre Triple Economique </b>  </label>
      <input type="text"name="chambres" required>
       <br><br>
      <label for="psw"><b> Début de la réservation : </b></label>
      <input type="date" name="date_debut" required>
      <br> <br>
      <label for="psw"><b> Fin de la réservation : </b></label>
      <input type="date" name="date_fin" required>
        <br><br>
      <label for="psw"> <b>Service déjeuner le matin:20e</b></label>
      <input type="checkbox" name="dejeuner">
      <br><br>
      <label for="psw"><b>Prix d'une nuit : 190e</b>  </label>
      <br><br>
      <button type="submit">Réserver</button>

    <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div> 
</body>
</html>