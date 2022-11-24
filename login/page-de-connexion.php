<?php
// Initialisation de la session 
session_start();
 
// Si l'user est déjà connecté on l'envoie sur le page de bienvenue
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// inclus dans ce fichier le fichier config (on va utiliser les paramètres présent dans celui-ci)
require_once "config.php";
 
// définition de username (vide) et password (vide) et username error...
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// transfert des données écrites par l'utilisateur vers la base de donnée
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // on regarde si l'username est videe ou non quand l'utilisateur va appuyer sur submit
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // on regarde si le password est vide ou non quand l'utilisateur va appuyer sur submit
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // vérifier l'authenticité de la requête de l'utilisateur 
    if(empty($username_err) && empty($password_err)){
        // on va se servir dans la base de données
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // liaison des variables "$stmt" et "$param_username" à une requête MySQL
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // crée un paramètre
            $param_username = $username;
            
            // essaie d'exécution (true ou false) selon le résultat
            if(mysqli_stmt_execute($stmt)){
                // on le stock 
                mysqli_stmt_store_result($stmt);
                
                // on regarde si l'username existe, si il existe alors on vérifie le password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Liaison des résultats des variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // si le password est correct alors on démarre une session
                            session_start();
                            
                            // on enregistre la data sur la ba mysql
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // redirection de l'user vers la page de bienvenue
                            header("location: welcome.php");
                        } else{
                            // sinon (invalide password, on lui affiche un message d'erreur)
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // si username incorrect alors on affiche un message d'erreur
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // ferme le protocole
            mysqli_stmt_close($stmt);
        }
    }
    
    // ferme la connexion
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page de connexion</title>
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Page de connexion</h2>
        <p>Entrez vos identifiants afin d'accéder à la réservation des chambres.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nom d'utilisateur :</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Mot de passe :</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="submit" value="Login">
            </div>
            <p>Vous n'avez pas de compte? <a href="register.php">Inscrivez-vous maintenant!</a>.</p>
        </form>
    </div>
    <link rel="stylesheet" href="index.css">
</body>
</html>
