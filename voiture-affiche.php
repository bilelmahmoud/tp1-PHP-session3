<?php
if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];
    require_once('Classe/CRUD.php');
    $crud = new CRUD;
    $voiture = $crud->selectId('voiture', $id);

    // foreach($client as $key=>$value){
    //     $$key=$value;
    // }

     extract($voiture);
     
   

}else{
    header('location:client-index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voiture</title>
</head>
<body>
    <h1>voiture</h1>
    <p><strong>marque: </strong><?= $marque; ?></p>
    <p><strong>modele: </strong><?= $modele; ?></p>
    <p><strong>annee: </strong><?= $annee; ?></p>
    <a href="voiture-edit.php?id=<?= $id; ?>">Edit</a>
    <form action="voiture-delete.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>