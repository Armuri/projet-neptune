<?php
include "./ba/link-mysql.php";

if (isset ($_POST["nom"])){
    $nom = $_POST["nom"];
}else { 
    $nom = "";
}

if (isset ($_POST["email"])){
    $email = $_POST["email"];
}else {
    $email = "";
}

if (isset ($_POST["sujet"])){
    $sujet = $_POST["sujet"];
}else {
    $sujet = "";
}

if (isset ($_POST["message"])){
    $message = $_POST["message"];
}else {
    $message = "";
}




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert = $dbh->prepare("INSERT INTO formulaire (nom, email, sujet, message) VALUES ('$nom', '$email','$sujet', '$message')");
    $insert->execute(array('nom' => $nom, 'email' => $email, 'sujet' => $sujet, 'message' => $message ));
    header('location: ./accueil.php');
    exit;
}

?>