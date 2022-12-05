<?php


$dsn = 'mysql:host=localhost;dbname=projet-neptune';  // avant tout il faut créer une nouvelle base de donnée à partir de PHPmyadmin qui portera le nom 'projet-neptune'
$user = 'Arthur'; // à modifier selon le compte ('root' généralement)
$password = 'password'; // champ laissé à vide quand on se connecte avec le compte 'root' sinon mettre votre mdp.

try {
    $dbh = new PDO($dsn, $user, $password);
    $insert = $dbh->prepare('SELECT (login,password) FROM users WHERE  ');
    $insert->execute(array('nom' => $nom , 'prenom' => $prenom , 'nom_utilisateur' => $login , 'mot_de_passe' => $password , 'mail' => $mail));

} catch (PDOException $e) {
    echo 'champs manquants, réesayer' . $e -> getMessage() ;
}
   
