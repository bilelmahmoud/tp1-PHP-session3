<?php

class Voiture extends CRUD {

    protected $table = 'voiture';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'marque', 'model',"annee" , 'categorie_id'];


    /* protected $fillable = ['id', 'nom', 'adresse', 'phone', 'code_postal', 'courriel', 'ville_id']; */

   /*  public function clientVille(){
        $sql = "SELECT * FROM $this->table INNER JOIN ville ON ville.id = ville_id";
        $stmt = $this->query($sql);
        $clientVille = $stmt->fetchAll();
        return $clientVille;
    } */
}

?>