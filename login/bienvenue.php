<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: page-de-connexion.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Neptune</title>
</head>
<body>
    <div class="boxmain">
        <h1 class="msg_bvn">Bonjour, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue sur votre espace Hotel Neptune.</h1>
            <div class="group-control">
            <a href="reset-password.php" class="submit">Réinitialiser mon mot de passe</a>
            <a href="deconnexion.php" class="reset">Se déconnecter du compte</a>
            </div>
    </div>
    
    <link rel="stylesheet" href="bienvenue.css">
</body>
</html>