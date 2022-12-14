<?php
include "./page_reservation.php";
?>

DOCTYPE html>
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
                <h1>Chambre Double Economique</h1>
               <div class="left">
                <img src="./chambres/chambre-double-economique.jpg" alt="chambre-double-economique" height="300" width="650">
               </div> 
               <div class="midle">
                <h3>Description de la chambre : </h3>
                <p>Les chambres Single (18 m2) sont dotées d'un lit simple et d'une salle de bains en marbre à baignoire. Une boisson de bienvenue vous est également offerte.</p>
               </div>
            </div>
    </section>
    <button onclick="document.getElementById('id01').style.display='block'">Réservation</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <form method="POST" class="modal-content animate" action="">

    <div class="container">

      <label for="name"><b>Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrer votre nom d'utilisateur" name="login" required>
      <label for="name"><b>E-mail :</b></label>
      <input type="email" placeholder="Entrer votre e-mail" name="email" required>
      <label for="name"><b>Ecrivez le nom de la chambre : ('Chambre Double Economique') </b>  </label>
      <input type="text"name="chambres" required>
       <br><br>
      <label for="psw"><b> Début de la réservation </b></label>
      <input type="date" name="date_debut" required>
      <br> <br>
      <label for="psw"><b> Fin de la réservation</b></label>
      <input type="date" name="date_fin" required>
        <br><br>
      <button type="submit">Réserver</button>

    <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div> 
</body>
</html>