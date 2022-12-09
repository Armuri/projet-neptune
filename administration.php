<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administration</title>
</head>
<body>
    <?php include('./nav-bar.php'); ?>
    <link rel="stylesheet" href="./css/connexion-administration.css">
    <div class="pre-admin-block">
        <h1>Accés administration</h1>
        <div class="admin-block">
            <form action="" method="POST" id="admin_auth" enctype="multipart/form-data">
                <input type="login" name="identifiant" placeholder="Identifiant" value="admin" readonly>
                <br>
                <br>
            <input type="file" accept="passwd.txt" name="Permission key">
            </form>
            <br>
            <button type="submit" form="admin_auth">Envoyer</button>
        </div>
    </div>
</body>
</html>