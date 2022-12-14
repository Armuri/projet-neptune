<?php
include "/wamp64/www/projet-neptune/ba/link-mysql.php";

if (isset($_POST["login"])){
 $_POST["login"] = $login;
}else 

    $login = ""; 
if (isset($_POST["email"])){
 $_POST["email"] = $email;
}else 
    $email = ""; 

if (isset($_POST["chambres"])){
 $_POST["chambres"] = $chambres;
}else 
    $chambres = ""; 

if (isset($_POST["date_debut"])){
 $_POST["date_debut"] = $date_debut;
}else 
    $date_debut = ""; 

if (isset($_POST["date_fin"])){
 $_POST["date_fin"] = $date_fin;
}else 
    $date_fin = ""; 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert = $dbh->prepare('INSERT INTO reservations (nom_utilisateur, email, chambres, date_debut, date_fin) VALUES ('$login', '$email', '$chambres', '$date_debut', '$date_fin')');
    $insert->execute(array('login' => $login, 'email' => $email, 'chambres' => $chambres, 'date_debut' => $date_debut, 'date_fin' => $date_fin, ));
    header('location : ./page_reservation.php');
}

?>

