<?php
// Initialisation de la session 
session_start();
 
// Tableau contenant le nombre de sessions 
$_SESSION = array();
 
// Détruit la session
session_destroy();
 
// Redirection vers la page de login 
header("location: page-de-connexion.php");
exit;
?>