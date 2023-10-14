<?php
if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];
    require_once('Classe/CRUD.php');
    $crud = new CRUD;
    $client = $crud->selectId('client', $id);

    // foreach($client as $key=>$value){
    //     $$key=$value;
    // }

     extract($client);
     
     /* $ville = $crud->selectId('ville', $ville_id);
     $ville_nom = $ville['ville'];
 */

}else{
    header('location:client-index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client</title>
</head>
<body>
    <h1>Client</h1>
    <p><strong>Nom: </strong><?= $nom; ?></p>
    <p><strong>Adresse: </strong><?= $adresse; ?></p>
    <p><strong>Phone: </strong><?= $phone; ?></p>
    <p><strong>Courriel: </strong><?= $courriel; ?></p>
    <a href="client-edit.php?id=<?= $id; ?>">Edit</a>
    <form action="client-delete.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>