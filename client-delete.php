<?php
require_once('Classe/CRUD.php');

$crud = new CRUD;
$delete = $crud->delete('client', $_POST['id']);

?>