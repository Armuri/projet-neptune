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
<form action="/page-traitement-donnees" method="post">
<div>
<label for="nom">Votre nom</label>
<input type="text" id="nom" name="nom" placeholder="Martin" required>
</div>
<div>
<label for="email">Votre e-mail</label>
<input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
</div>
<div>
<label for="sujet">Quel est le sujet de votre message ?</label>
<select name="sujet" id="sujet" required>
<option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
<option value="probleme-compte">Problème avec mon compte</option>
<option value="question-produit">Question à propos d’un produit</option>
<option value="suivi-commande">Suivi de ma commande</option>
<option value="autre">Autre...</option>
</select>
</div>
<div>
<label for="message">Votre message</label>
<textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
</div>
<div>
<button type="submit">Envoyer mon message</button>
</div>
</form>
</div>
<link rel="stylesheet" href="./css/contact.css">
</body>
</html>