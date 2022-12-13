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
               <div class="left">
                <img src="./chambres/chambre-double-classique.jpg" alt="chambre-double-classique" height="300" width="650">
               </div> 
               <div class="midle">
                <h1>Chambre Double Classique</h1>
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
        <label>Veuillez choisir une chambre :
  <select name="chambres" multiple size="3">
    <optgroup label="Chambres Simple">
      <option value="Chambre Simple Deluxe">Chambre Simple Deluxe</option>
      <option value="Chambre Simple Economique">Chambre Simple Economique</option>
    </optgroup>
    <optgroup label="Chambres Double">
      <option value="Chambre Double Deluxe">Chambre Double Deluxe</option>
      <option value="Chambre Double Economique">Chambre Double Economique</option>
      <option value="Chambre Double Classique">Chambre Double Classique</option>
      <option value="Chambre Double Confort">Chambre Double Confort</option>
      <!-- <option value="hamster" disabled>Hamster</option> -->
    </optgroup>
    <optgroup label="Chambre Triple">
      <option value="Chambre Triple Economique">Chambre Triple Economique</option>
      <option value="Chambre Triple Classique">Chambre Triple Classique</option>
    </optgroup>
    <optgroup label="Chambre spéciale">
    <option value="Chambre Lits Jumeaux Classique"> Chambre Lits Jumeaux Classique</option>
    </optgroup>
  </select>
</label>
       <br><br>
      <label for="psw"><b> Début de la réservation </b></label>
      <input type="date" name="date" required>
      <br> <br>
      <label for="psw"><b> Fin de la réservation</b></label>
      <input type="date" name="date" required>
        <br><br>
      <button type="submit">Réserver</button>

    <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div> 
</body>
</html>