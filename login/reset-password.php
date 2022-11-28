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
        $new_password_err = "Veuillez entrer un mot de passe.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Le mot de passe doit contenir au moins 6 caractères.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // validé le mot de passe
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Veuillez confirmer votre mot de passe.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Les mots de passes ne concordent pas.";
        }
    }
        
    // on regarde si il y'a pas d'erreur avant de le transmettre à la ba
    if(empty($new_password_err) && empty($confirm_password_err)){
        // on prépare le protocole de transfert des mots de passes
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // association d'une variable à la préparation de protocole avec un paramètre
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // on définit les paramètres
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Exécution du protocole
            if(mysqli_stmt_execute($stmt)){
                // le mot de passe a été mis à jour. La session va être détruite et l'utilisateur est redirigé vers la page de login
                session_destroy();
                header("location: page-de-connexion.php");
                exit();
            } else{
                echo "Oups! Quelque chose s'est mal passé. Veuillez réesayer plus tard.";
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
    <title>Reset Password</title>
</head>
<body>
    <div class="boxmain">
                <h1 class="neptune">Hotel Neptune</h1>
            <div class="texte">
                <p>L'Hotel Neptune est un hôtel Situé en face d'un port <br> de plaisance. </p> 
                <img src="images/port marianne.jpg" alt="port marianne hotel neptune" style="max-width: 250px">
                <p> Cet hôtel de style décontracté se trouve à 11 minutes <br> à pied de la plage et à 15,6 km du centre-ville de Montpellier.</p>
                <img src="images/map montpellier.jpg" alt="map montpellier" style="max-width: 250px">
            </div>
        </div>  
        <div class="boxmain2">
                <h1 class="carnon">à Carnon</h1>
            <div class="texte2">
                <p>239 rue de l'étang de l'or Carnon-Port, 34130 Mauguio</p> 
                <img src="images/map carnon.jpg" alt="map carnon hotel neptune" style="max-width: 300px">
            </div>
    </div>
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
                <input type="submit" class="submit" value="Envoyer">
                <a href="bienvenue.php" class="reset"> Annuler</a>
            </div>
        </form>
    </div>    
    <link rel="stylesheet" href="index.css">
</body>
</html>