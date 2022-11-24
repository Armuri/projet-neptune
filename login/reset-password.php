<?php
// initialisation de la session    
session_start();
 
// on vérifie si l'user est déjà logué, si c'est le pas le cas on le redirige vers la page login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: page-de-connexion.php");
    exit;
}
 
// on inclus le fichier "config.php" dans ce fichier
require_once "link-mysql.php";
 
// Création de variables et initialisation de celles-ci avec des valeurs vides
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processus de mise en forme pour l'envoie la base de donnée
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // validé un nouveau mot de passe 
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // validé le mot de passe
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Exécution du protocole
            if(mysqli_stmt_execute($stmt)){
                // le mot de passe a été mis à jour. La session va être détruite et l'utilisateur est redirifé vers la page de login
                session_destroy();
                header("location: page-de-connexion.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // ferme le protocole
            mysqli_stmt_close($stmt);
        }
    }
    
    // Cferme la connexion
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Réinitialiser votre mot de passe</h2>
        <p>Veuillez remplir le formulaire pour réinitialiser votre mot de passe.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>Nouveau mot de passe :</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirmer votre mot de passe :</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="submit value="Submit">
                <a class="reset" href="bienvenue.php">Annuler</a>
            </div>
        </form>
    </div>    
    <link rel="stylesheet" href="index.css"><!-- href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" -->
</body>
</html>