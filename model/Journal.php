<?php
require_once('CRUD.php');
class Journal extends CRUD {

    protected $table = 'log';
    protected $primaryKey = 'id';
    protected $fillable = ['adresse_ip','date', 'nom', 'page_visitee' ];

    
}

?>