<?php

if (isset ($_POST["nom"])){
    $nom = $_POST["nom"];
}else {
    $nom = "";
}

if (isset ($_POST["prenom"])){
    $prenom = $_POST["prenom"];
}else {
    $prenom = "";
}

if (isset ($_POST["mail"])){
    $mail = $_POST["mail"];
}else {
    $mail = "";
}

if (isset ($_POST["login"])){
    $login = $_POST["login"];
}else {
    $login = "";
}

if (isset ($_POST["password"])){
    $password = $_POST["password"];
}else {
    $password = "";
}



if (empty($_POST["nom"]) && (isset ($_POST["prenom"])) && (isset ($_POST["login"])) && (isset ($_POST["mail"]))  && (isset($_POST["password"]))){
    echo "Veuillez entrer un nom."; 
}
if ((isset ($_POST["nom"])) && (empty($_POST["prenom"])) && (isset ($_POST["login"])) && (isset ($_POST["mail"]))  && (isset($_POST["password"]))){
    echo "Veuillez entrer un prénom."; 
}

if ((isset ($_POST["nom"])) && ((isset($_POST["prenom"]))) && (empty ($_POST["login"])) && (isset ($_POST["mail"]))  && (isset($_POST["password"]))){
    echo "Veuillez entrer un nom d'utilisateur."; 
}

if ((isset ($_POST["login"])) && (isset ($_POST["mail"]))  && empty ($_POST["password"])){
    echo "Veuillez entrer un mot de passe."; 
}


if ((isset ($_POST["password"])) &&  (isset ($_POST["login"])) &&  empty ($_POST["mail"])){
    echo "Veuillez entrer votre adresse e-mail.";  
}



$dsn = 'mysql:host=localhost;dbname=projet-neptune';  // avant tout il faut créer une nouvelle base de donnée à partir de PHPmyadmin qui portera le nom 'projet-neptune'
$user = 'Arthur'; // à modifier selon le compte ('root' généralement)
$password = 'password'; // champ laissé à vide quand on se connecte avec le compte 'root' sinon mettre votre mdp.

try {
    $dbh = new PDO($dsn, $user, $password);
    $insert = $dbh->prepare("INSERT INTO `users` (nom, prenom, nom_utilisateur, mot_de_passe, mail) VALUES ('$nom', '$prenom','$login','$password','$mail')");
    $insert->execute(array('nom' => $nom , 'prenom' => $prenom , 'nom_utilisateur' => $login , 'mot_de_passe' => $password , 'mail' => $mail));

} catch (PDOException $e) {
    echo 'champs manquants, réesayer' . $e -> getMessage() ;
}
   

?>

    