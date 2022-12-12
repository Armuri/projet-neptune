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
    $password = md5($password);
}else {
    $password = "";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert = $dbh->prepare("INSERT INTO users (nom, prenom, mail, nom_utilisateur, mot_de_passe) VALUES ('$nom', '$prenom','$email','$login','$password')");
    $insert->execute(array('nom' => $nom, 'prenom' => $prenom, 'mail' => $email, 'nom_utilisateur' => $login, 'mot_de_passe' => $password ));

}

?>

    