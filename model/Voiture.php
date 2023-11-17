<?php

class Voiture extends CRUD {

    protected $table = 'voiture';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'marque', 'modele','annee' , 'categorie_id', 'photo'];



        public function selectCategorie(){
        $sql = "SELECT   voiture.*, nom from $this->table
         INNER JOIN categorie ON categorie_id = categorie.id";
        $stmt = $this->query($sql);
        $voitureCategorie = $stmt->fetchAll();
        return $voitureCategorie;
    }  


    
    
}

?>