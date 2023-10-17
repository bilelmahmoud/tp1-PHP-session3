<?php
require_once('Classe/CRUD.php');

$crud = new CRUD;
$delete = $crud->delete('voiture', $_POST['id']);

?>