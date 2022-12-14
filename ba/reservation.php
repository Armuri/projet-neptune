<?php 

require "link-mysql.php";


    if (isset ($_POST["login"])){
        $id_reservation = $_POST["login"];
    }
    else{
        $id_reservation = "";
    }

    if (isset ($_POST["email"])){
        $mail = $_POST["email"];
    }
    else{
        $mail = "";
    }

    if (isset ($_POST["chambres"])){
        $nom_chambre = $_POST["chambres"];
    }
    else{
        $nom_chambre = "";
    }

    if (isset ($_POST["date"])){
        $debut = $_POST["date"];
    }
    else{
        $debut = "";
    }

    if (isset ($_POST["date"])){
        $fin= $_POST["date"];
    }
    else{
        $fin = "";
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $insert = $dbh->prepare('INSERT * FROM reservation WHERE and id_reservation=:login and nom_chambre=:chambres and debut=:date and fin=:date');
        $insert->execute(array('login' => $id_reservation, 'chambres' => $nom_chambre, 'date' => $debut, 'date' => $fin));
        $result = $insert->fetch();

        if(!$result){
            header("location ./reservation_erreur.php");
        }
        header("location ./reservation_succés.php");
    }   
?>