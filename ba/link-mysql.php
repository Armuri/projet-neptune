<?php

$dsn = 'mysql:host=localhost;dbname=projet-neptune';  // avant tout il faut créer une nouvelle base de donnée à partir de PHPmyadmin qui portera le nom 'projet-neptune'
$user = 'Arthur'; // à modifier selon le compte ('root' généralement)
$password = 'password'; // champ laissé à vide quand on se connecte avec le compte 'root' sinon mettre votre mdp.

try {
    $dbh = new PDO($dsn, $user, $password);
} 
catch (PDOException $e) {
    echo 'ERROR, RETRY.' . $e -> getMessage() ;
}
