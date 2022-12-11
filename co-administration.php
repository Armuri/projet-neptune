<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administration</title>
    <link rel="stylesheet" href="./css/connexion-admin.css">
</head>
<body>
    <?php include('./nav-bar.php'); ?>
    <div class="pre-admin-block">
        <h1>Accés administration</h1>
        <div class="admin-block">
            <form action="" method="POST" id="admin_auth" enctype="multipart/form-data">
                
                <input type="text" name="id-admin" placeholder="nom utilisateur admin" readonly>
            
                <br>
            <div>
            <input type="file" accept="passwd.txt" name="perm-key">
            </div>
            </form>
            <br>
            <div>
            <button type="submit" form="admin_auth">Envoyer</button>
            </div>
        </div>
    </div>
</body>
</html>