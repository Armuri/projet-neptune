<?php

include "./ba/connexion.php";
if(!isset ($_SESSION["username"])){
    $_SESSION["user"] = "nouvel, utilisateur";
    $_SESSION = $_SESSION["user"];
}

?>

<html>
<head>
</head>
   <body>
    <link rel="stylesheet" href="./css/nav.css">
    <nav>
    <ul class="ulnavbar">
        <!-- <h1> Bonjour, <b><?php echo htmlspecialchars($_SESSION["users"]); ?></b>.</h1> -->
        <a href="accueil.php"><li class="linavbar">Accueil</li></a>
        <a href="presentation-chambres.php"><li class="linavbar">Chambre</li></a>
        <a href="contact.php"><li class="linavbar">Contact</li></a>
        <a href="connexion.php"><li class="linavbar">Connexion/Inscription</li></a>
    </ul>
        
    </nav>
</body> 
</html>


<!-- <style>.box_triangle {
        width: 0px;
        height: 0px;
        border-style:solid;
        border-width:0px 10px 9px 10px; /* bas droite haut gauche */
        border-color: transparent transparent rgb(34, 74, 255) transparent;
        margin-left:50%;
    }</style>
    <div class="box_triangle"></div> -->