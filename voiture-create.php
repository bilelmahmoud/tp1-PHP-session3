<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer un client</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="voiture-store.php" method="post">
        <label>marque
            <input type="text" name="marque">
        </label>
        <label>modele
            <input type="text" name="modele">
        </label>
       
        <label>annee
            <input type="text" name="annee">
        </label>
       
       
        <input type="submit" value="save">
    </form>
    
</body>
</html>