<?php

class Journal extends CRUD {

    protected $table = 'log';
    protected $primaryKey = 'id';
    protected $fillable = ['adresse_ip','date', 'nom', 'page_visitee' ];

 /*    public function selectCategorie() {
        $sql = "SELECT categorie.nom from categorie";
        $stmt = $this->query($sql);
        return $stmt;
       } */
    
}

?>