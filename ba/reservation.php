<?php 

require "link-mysql.php";

function PostReservation($id_reservation){
    if ($_POST[$id_reservation]){
        $id_reservation = $_POST[$id_reservation];
    }
    else{
        $id_reservation = "";
    }
}

function PostNomChambre($nom_chambre){
    if ($_POST[$nom_chambre]){
        $nom_chambre = $_POST[$nom_chambre];
    }
    else{
        $nom_chambre = "";
    }
}

function PostDate($date){
    if ($_POST[$date]){
        $date = $_POST[$date];
    }
    else{
        $date = "";
    }
}

function PostDuree($duree){
    if ($_POST[$duree]){
        $duree = $_POST[$duree];
    }
    else{
        $duree = "";
    }
}


?>