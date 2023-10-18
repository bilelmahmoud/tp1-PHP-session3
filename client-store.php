<?php
require_once('Classe/CRUD.php');

$crud = new CRUD;
$insert = $crud->insert('client', $_POST);

header('location:index.php');

?>