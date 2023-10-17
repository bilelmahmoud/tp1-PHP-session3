<?php
require_once('Classe/CRUD.php');

$crud = new CRUD;
$insert = $crud->insert('voiture', $_POST);

header("location:voiture-affiche.php?id=$insert");

?>