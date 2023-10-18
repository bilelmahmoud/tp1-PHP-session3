<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;
$client = $crud->select('client', 'nom');
$voiture = $crud->select('voiture' );

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
            <th>afficher</th>
            <th>modifier</th>
            
        </tr>

        <?php
        foreach($client as $row){
        ?>

            <tr>
                <td><?= $row['nom']?></td>
                <td><?= $row['adresse']?></td>
                <td><?= $row['phone']?></td>
                <td><?= $row['courriel']?></td>
                <td><a href="client-affiche.php?id=<?= $row['id']?>">afficher</a></td>
                <td><a href="client-edit.php?id=<?= $row['id']?>">modifier</a></td>
               
                
            </tr>
        <?php
        }
        ?>
    </table>

    
    <br><br>
    <a href="client-create.php">Ajouter</a>
    <h2>voiture</h2>
    <table>
        <tr>
            <th>marque</th>
            <th>modele</th>
            <th>annee</th>
            <th>afficher</th>
            <th>modifier</th>
            
           
        </tr>

        <?php
        foreach($voiture as $row){
        ?>

            <tr>
                <td><?= $row['marque']?></a></td>
                <td><?= $row['modele']?></td>
                <td><?= $row['annee']?></td>
                <td><a href="voiture-affiche.php?id=<?= $row['id']?>">afficher</a></td>
                <td><a href="voiture-edit.php?id=<?= $row['id']?>">modifier</a></td>
                
               
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <a href="voiture-create.php">Ajouter</a>
    
</body>
</html>