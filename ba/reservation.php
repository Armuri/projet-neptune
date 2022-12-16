<?php 

require "link-mysql.php";

    if (isset ($_POST["login"])){
        $nom_utilisateur = $_POST["login"];
    }
    else{
        $nom_utilisateur = "";
    }
    
    if (isset ($_POST["id"])){
        $id_reservation = $_POST["id"];
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

    if (isset ($_POST["date1"])){
        $debut = $_POST["date1"];
    }
    else{
        $debut = "";
    }

    if (isset ($_POST["date2"])){
        $fin= $_POST["date2"];
    }
    else{
        $fin = "";
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $insert = $dbh->prepare("INSERT INTO reservation (login,id, email, chambres, date, date) VALUES ('$nom_chambre', '$id_reservation', '$mail','$nom_chambre','$debut,'$fin')");
        $insert->execute(array('login'=>$nom_utilisateur, 'id' => $id_reservation, 'chambres' => $nom_chambre, 'date1' => $debut, 'date2' => $fin));
        $result = $insert->fetch();

        if(!$result){
            header("location ./reservation_erreur.php");
        }
        header("location ./reservation_succés.php");
    }   
?>