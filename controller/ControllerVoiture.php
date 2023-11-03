<?php

RequirePage::model('CRUD');
RequirePage::model('Voiture');
RequirePage::model('Categorie');


class ControllerVoiture extends controller {
    public function index(){
        print_r($select);
        $voiture = new Voiture;
        $select = $voiture->select();
        return Twig::render('voiture-index.php', ['voitures'=>$select]);
        
       

    }

     public function create(){

        $categorie = new Categorie;
        $selectCategorie = $categorie->select('nom');
        return Twig::render('voiture-create.php', ['categories'=>$selectCategorie]);
        
    } 

    public function store(){
        print_r($_POST);
 
       
        
        $voiture = new Voiture;
        $insert = $voiture->insert($_POST);
        $selectId = $voiture->selectId($insert);
        /* print_r($insert); */
        print_r($selectId); 

         RequirePage::url('voiture/show/'.$insert);  

        $categorie = new Categorie;
        $selectCategorie = $categorie->selectId($selectId['categorie_id']);
        RequirePage::url('voiture/show/'.$insert); 
        return Twig::render('voiture-show.php', ['voiture'=>$selectId, 'categorie'=>  $selectCategorie['nom']]);


    }


    public function show($id){
        
        $voiture = new Voiture;
        $selectId = $voiture->selectId($id);
        $categorie = new Categorie;
        $selectCategorie = $categorie->selectId($selectId['categorie_id']);
        return Twig::render('voiture-show.php', ['voiture'=>$selectId, 'categorie'=>  $selectCategorie['nom']]);
    }

    public function edit($id){
        $voiture = new Voiture;
        $selectId = $voiture->selectId($id);
        $categorie = new Categorie;
        $selectCategorie = $categorie->select('nom');
        return Twig::render('voiture-edit.php', ['voiture'=>$selectId, 
                                'categorie'=>$selectCategorie]); 
       
    }
    public function update(){

        $voiture = new Voiture;
        $update =  $voiture->update($_POST);

       
        RequirePage::url('voiture/show/'.$_POST['id']);
    }

    Public function destroy(){
        //print_r($_POST);
        $voiture = new Voiture;
        $update = $voiture->delete($_POST['id']);
        RequirePage::url('voiture/index');
    }
        
    
}

?>