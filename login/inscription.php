<?php
// Introduire le fichier config.php au fichier register.php
require_once "config.php";
 
// Création de variables et initialisation de celles-ci avec des valeurs vides
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processus de mise en forme pour l'envoie vers la base de donnée
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validation de username 
    if(empty(trim($_POST["username"]))){  // si la case "username" est vide et qu'elle est quand même envoyé alors afficher :
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){ // si la cas "username" contient des caractères étrangers aux lettres,nombres et underscores alors afficher :
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // On prépare la selection de "id" qui provient de la table USER pour ensuite introduire la valeur rentrée par l'utilisateur dans la colonne "username"
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Lier les variables pour la préparation de la sélection précédente
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Créer un paramètre du nom de "param-username"
            $param_username = trim($_POST["username"]);
            
            // essaie d'exécution (true ou false) selon le résultat
            if(mysqli_stmt_execute($stmt)){
                // on le stock 
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // ferme protocole
            mysqli_stmt_close($stmt);
        }
    }
    
    // password validé
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // password validé confirmé
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Regarde si y'a pas des erreurs avant l'injection dans la base de données relié à mysql
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // préparation d'une insertion dans la ba mysql des données 'password'
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // liaison des variables "$stmt" et "$param_username" à une requête MySQL
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // créer un paramètre
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // essaie d'exécuter le protocole pour le transfert des données
            if(mysqli_stmt_execute($stmt)){
                // redirige vers la page de login
                header("location: login.php");
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
    <title>Inscrivez-vous</title>
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Inscrivez-vous</h2>
        <p>Remplissez le formulaire pour créer votre compte</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nom d'utilisateur :</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Mot de passe :</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirmer votre mot de passe :</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="submit" value="Submit">
                <input type="reset" class="reset" value="Reset">
            </div>
            <p>Vous avez déjà un compte  <a href="page-de-connexion.php">Connectez-vous ici</a>.</p>
        </form>
    </div>    
    <link rel="stylesheet" href="index.css">
</body>
</html>




<!-- href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" -->