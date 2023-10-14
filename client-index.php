<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;
$client = $crud->select('client', 'nom');

//print_r($client);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de client</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<header>
    <h1>LOCATION DE VOITURE</h1>
</header>


<body>
    <h2>Client</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Phone</th>
            <th>Courriel</th>
        </tr>

        <?php
        foreach($client as $row){
        ?>

            <tr>
                <td><a href="client-affiche.php?id=<?= $row['id']?>"><?= $row['nom']?></a></td>
                <td><?= $row['adresse']?></td>
                <td><?= $row['phone']?></td>
                <td><?= $row['courriel']?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <a href="client-create.php">Ajouter</a>
    
</body>
</html>