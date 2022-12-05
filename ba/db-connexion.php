<?php

$dsn = 'mysql:host=localhost;dbname=projet-neptune';  // avant tout il faut créer une nouvelle base de donnée à partir de PHPmyadmin qui portera le nom 'projet-neptune'
$user = 'Arthur'; // à modifier selon le compte ('root' généralement)
$password = 'password'; // champ laissé à vide quand on se connecte avec le compte 'root' sinon mettre votre mdp.

try {
    $dbh = new PDO($dsn, $user, $password);
    $select = $dbh->prepare("SELECT * FROM users WHERE 'nom_utilisateur' =:nom_utilisateur AND 'mot_de_passe' =:mot_de_passe ;");
    $select->execute(array( 'nom_utilisateur' => $login, 'mot_de_passe' => $password));
    $result = $select->fetchAll();
    var_dump($result[0]);
} 
catch (PDOException $e) {
    echo 'champs manquants, réesayer' . $e -> getMessage() ;
}
   