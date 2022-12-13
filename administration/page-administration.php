<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Administration</title>
    <link rel="stylesheet" href="./page-admin.css">
</head>
<body>
    <?php include "admin-nav.php"; ?>
    <h1>Page Administration</h1>
    <button type="button" form="ajouter">Ajouter une chambre</button>
    <button type="button" form="modifier">Modifier une page</button>
    <button type="button" form="supprimer">Supprimer une page</button>
    
    <div class="border-section">
        <div class="section_chambres">
            <div class="chambre">
                <div class="chambre-description">
                    <h2>Chambre Double Classique</h2>
                </div>
                <img src="./chambres/chambres/chambre-double-classique.jpg" alt="chambre-double-classique" height="180" width="280">
                <br>
                <input type="checkbox" name="checkbox">
            </div>

            <div class="chambre">
                <div class="chambre-description">
                    <h2>Chambre Double Classique</h2>
                </div>
                <img src="./chambres/chambres/chambre-double-confort.jpg" alt="chambre-double-confort" height="180" width="280">
                <br>
                <input type="checkbox" name="checkbox">
            </div>

            <div class="chambre">
                <div class="chambre-description">
                <h2>Chambre Double Deluxe</h2>
                </div>
                <img src="./chambres/chambres/chambre-double-deluxe.jpg" alt="chambre-double-deluxe" height="180" width="280">
                <br>
                <input type="checkbox" name="checkbox">
            </div>
        </div>

        <div class="section_chambres">
            <div class="chambre">
                <div class="chambre-description">
                    <h2>Chambre Double Economique</h2>
                </div>
                <img src="./chambres/chambres/chambre-double-economique.jpg" alt="chambre-double-economique" height="180" width="280">
                <br>
                <input type="checkbox" name="checkbox">
            </div>

            <div class="chambre">
                <div class="chambre-description">
                    <h2>Chambre Lits Jumeaux Classique</h2>
                </div>
                <img src="./chambres/chambres/chambre-lits-jumeaux-classique.jpg" alt="chambre-double-confort" height="180" width="280">
                <br>
                <input type="checkbox" name="checkbox">
            </div>

            <div class="chambre">
                <div class="chambre-description">
                    <h2>Chambre Simple Deluxe</h2>
                </div>
                <img src="./chambres/chambres/chambre-simple-deluxe.jpg" alt="chambre-simple-deluxe" height="180" width="280">
                <br>
                <input type="checkbox" name="checkbox">
            </div>
        </div>

        <div class="section_chambres">
            <div class="chambre">
                <div class="chambre-description">
                    <h2>Chambre Simple Economique</h2>
                </div>
                <img src="./chambres/chambres/chambre-simple-economique.jpg" alt="chambre-simple-economique" height="180" width="280">
                <br>
                <input type="checkbox" name="checkbox">
            </div>

            <div class="chambre">
                <div class="chambre-description">
                    <h2>Chambre Triple Classique</h2>
                </div>
                <img src="./chambres/chambres/chambre-triple-classique.jpg" alt="chambre-triple-classique" height="180" width="280">
                <br>
                <input type="checkbox" name="checkbox">
            </div>

            <div class="chambre">
                <div class="chambre-description">
                    <h2>Chambre Triple Classique</h2>
                </div>
                <img src="./chambres/chambres/chambre-triple-economique.jpg" alt="chambre-triple-economique" height="180" width="280">
                <br>
                <input type="checkbox" name="checkbox">
            </div>
        </div>
    </div>
</body>
</html>