<?php
require "./ba/connexion.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienvenue - Hotel Neptune</title>
</head>
<body>
    <?php include "nav-bar.php" ?>
    <h1 class="msg_bvn">Bonjour, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue sur votre espace Hotel Neptune.</h1>
</body>
</html>