<?php
if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];
    require_once('Classe/CRUD.php');
    $crud = new CRUD;
    $voiture = $crud->selectId('voiture', $id);
    extract($voiture);
}else{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter une voiture</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>voiture Edit</h1>
    <form action="voiture-update.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <label>modele
            <input type="text" name="modele" value="<?= $modele; ?>">
        </label>
        <label>marque
            <input type="text" name="marque"  value="<?= $marque; ?>">
        </label>
        <label>annee
            <input type="text" name="annee"  value="<?= $annee; ?>">
        </label>
        
       
        <input type="submit" value="save">
    </form>
    
</body>
</html>