<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Neptune</title>
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Bonjour, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue sur votre espace Hotel Neptune.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Réinitialiser mon mot de passe</a>
        <a href="logout.php" class="btn btn-danger ml-3">Se déconnecter du compte</a>
    </p>
    <link rel="stylesheet" href="index.css">
</body>
</html>