<?php

require "link-mysql.php";

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

if (isset ($_POST["email"])){
    $email = $_POST["email"];
}else {
    $email = "";
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



if (empty($_POST["nom"]) && (isset ($_POST["prenom"])) && (isset ($_POST["login"])) && (isset ($_POST["email"]))  && (isset($_POST["password"]))){
    echo "Veuillez entrer un nom."; 
}
if ((isset ($_POST["nom"])) && (empty($_POST["prenom"])) && (isset ($_POST["login"])) && (isset ($_POST["email"]))  && (isset($_POST["password"]))){
    echo "Veuillez entrer un prénom."; 
}

if ((isset ($_POST["nom"])) && ((isset($_POST["prenom"]))) && (empty ($_POST["login"])) && (isset ($_POST["email"]))  && (isset($_POST["password"]))){
    echo "Veuillez entrer un nom d'utilisateur."; 
}

if ((isset ($_POST["login"])) && (isset ($_POST["email"]))  && empty ($_POST["password"])){
    echo "Veuillez entrer un mot de passe."; 
}


if ((isset ($_POST["password"])) &&  (isset ($_POST["login"])) &&  empty ($_POST["email"])){
    echo "Veuillez entrer votre adresse e-mail.";  
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert = $dbh->prepare("INSERT INTO `users` (nom, prenom, mail, nom_utilisateur, mot_de_passe ) VALUES ('$nom', '$prenom','$email','$login','$password')");
    $insert->execute(array('nom' => $nom, 'prenom' => $prenom, 'mail' => $email, 'nom_utilisateur' => $login, 'mot_de_passe' => $password ));

}

?>

    