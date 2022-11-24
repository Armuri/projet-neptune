<?php
/* truc de bases pour link php avec mysql */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Arthur');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'projet-neptune');
 
/* essaie pour se connecter à la base de donnée mysql */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// vérifie la connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>