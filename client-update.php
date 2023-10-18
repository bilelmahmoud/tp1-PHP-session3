<?php
require_once('Classe/CRUD.php');

$crud = new CRUD;
$update = $crud->update('client', $_POST);
header('location:index.php');



?>