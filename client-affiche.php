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
    <title>client</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <h1>Client</h1>
    <p><strong>Nom: </strong><?= $nom; ?></p>
    <p><strong>Adresse: </strong><?= $adresse; ?></p>
    <p><strong>Phone: </strong><?= $phone; ?></p>
    <p><strong>Courriel: </strong><?= $courriel; ?></p>
 
    <form  action="client-delete.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>