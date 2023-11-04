<?php

class Categorie extends CRUD {

    protected $table = 'categorie';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nom'];

    public function selectCategorie() {
        $sql = "SELECT categorie.nom from categorie";
        $stmt = $this->query($sql);
        return $stmt;
       }
    
}

?>