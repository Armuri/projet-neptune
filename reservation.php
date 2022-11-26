<?php 
class Reservation {
// connexion à la base de donnée 
 private $pdo;
 private $stmt;
 public $error;
 function __construct(){
    try { 
      $this->pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset:".DB_CHAR, DB_USER, DB_PASS [PDO:: ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION]
      );  
      } catch (Exception $ex) { exit ($ex->getMessage()); }
   }

// on arrête la connection avec la base de donnée 
 function __destruct() {
    $this->pdo = null;
    $this->stmt = null; 
    
 }

}

// on met en route la base de donnée 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Arthur');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'projet-neptune');
