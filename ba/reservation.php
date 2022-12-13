<?php 

require "link-mysql.php";


    if (isset ($_POST["id"])){
        $id_reservation = $_POST["id"];
    }
    else{
        $id_reservation = "";
    }

    if (isset ($_POST["nom de chambre"])){
        $nom_chambre = $_POST["nom de chambre"];
    }
    else{
        $nom_chambre = "";
    }

    if (isset ($_POST["debut"])){
        $debut = $_POST["debut"];
    }
    else{
        $debut = "";
    }

    if (isset ($_POST["fin"])){
        $fin= $_POST["fin"];
    }
    else{
        $fin = "";
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $insert = $dbh->prepare('INSERT * FROM reservation WHERE and id_reservation=:id and nom_chambre=:nom de chambre and debut=:debut and fin=:fin');
        $insert->execute(array('id' => $id_reservation, 'nom de chambre' => $nom_chambre, 'debut' => $debut, 'duree' => $fin));
        $result = $insert->fetch();

        if(!$result){
            header("location ./");
        }
        header("location ./");
    }   



?>