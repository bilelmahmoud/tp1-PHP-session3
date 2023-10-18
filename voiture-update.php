<?php
require_once('Classe/CRUD.php');

$crud = new CRUD;
$update = $crud->update('voiture', $_POST);
header('location:index.php');



?>