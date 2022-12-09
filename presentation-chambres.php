<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chambres - Hotel Neptune</title>
<body>
<link rel="stylesheet" href="./css/pres-chambres.css">
<?php include "./nav-bar.php" ?>
<h2>Pages des chambres</h2>
<p>Entrez la suite que vous désirez dans la barre de recherche.</p>

<div class="row">
  <div class="left" style="background-color:#bbb;">
    <h2>Menu</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Faire une recherche.." title="Type in a category">
    <ul id="myMenu">

      <li><a href="./chambres/chambre-simple-deluxe.php">Chambre Simple Deluxe</a></li>
      <li><a href="./chambres/chambre-simple-economique.php">Chambre Simple Economique</a></li>
      <li><a href="./chambres/chambre-double-deluxe.php">Chambre Double Deluxe</a></li>
      <li><a href="./chambres/chambre-double-economique.php">Chambre Double Economique</a></li>
      <li><a href="./chambres/chambre-double-classique.php">Chambre Double Classique</a></li>
      <li><a href="./chambres/chambre-double-confort.php">Chambre Double Confort</a></li>
      <li><a href="./chambres/chambre-lits-jumeaux-classique.php">Chambre Lits Jumeaux Classique</a></li>
      <li><a href="./chambres/chambre-triple-economique.php">Chambre Triple Economique</a></li>
      <li><a href="./chambres/chambre-triple-classique.php">Chambre Triple Classique</a></li>
      
    </ul>
  </div>
  
  <div class="right" style="background-color:#ddd;">
    <h2>Indications : </h2>
    <p>Vous pouvez sur votre gauche visualiser les différentes types de suites que propose l'Hotel Neptune </p>
  </div>
</div>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>
