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
    <title>voiture</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>voiture</h1>
    <p><strong>marque: </strong><?= $marque; ?></p>
    <p><strong>modele: </strong><?= $modele; ?></p>
    <p><strong>annee: </strong><?= $annee; ?></p>
   
    <form  action="voiture-delete.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>