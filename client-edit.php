<?php
if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];
    require_once('Classe/CRUD.php');
    $crud = new CRUD;
    $client = $crud->selectId('client', $id);
    extract($client);
}else{
    header('location:index.php');
}
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
    <h1>Client Edit</h1>
    <form  action="client-update.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <label>Nom
            <input type="text" name="nom" value="<?= $nom; ?>">
        </label>
        <label>Adresse
            <input type="text" name="adresse"  value="<?= $adresse; ?>">
        </label>
        <label>Phone
            <input type="text" name="phone"  value="<?= $phone; ?>">
        </label>
        
        <label>Courriel
            <input type="email" name="courriel"  value="<?= $courriel; ?>">
        </label>
        <input type="submit" value="save">
    </form>
    
</body>
</html>