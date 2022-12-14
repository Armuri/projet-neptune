<?php

include "./ba/formulaire.php";

?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacts - Hotel Neptune </title>
</head>
<body>
    <?php include('./nav-bar.php'); ?>
    <div class="contactez-nous">
    <h1>Nos réseaux sociaux :</h1>
<h2>Contactez-nous</h2>
<p>Un problème, une question, envie de nous envoyer un message d’amour ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
<form action="" method="POST">
<div>
<label for="nom">Votre nom</label>
<input type="text" id="nom" name="nom" placeholder="Votre" required>
</div>
<div>
<label for="email">Votre e-mail</label>
<input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
</div>
<div>
<label for="sujet">Quel est le sujet de votre message ?</label>
<input type="text" name="sujet" id="sujet" placeholder="Mon sujet est....">
</div>
<div>
<label for="message">Votre message</label>
<input type="psw" id="message" name="message" placeholder="Bonjour, je vous contacte car...." required >
</div>
<div>
<button type="submit">Envoyer mon message</button>
</div>
</form>
</div>
<link rel="stylesheet" href="./css/contact.css">
</body>
</html>