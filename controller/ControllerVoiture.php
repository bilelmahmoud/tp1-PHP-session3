<?php

RequirePage::model('CRUD');
RequirePage::model('Voiture');
RequirePage::model('Categorie');


class ControllerVoiture extends controller {
    public function index(){
       
        $voiture = new Voiture;
       /*  $selectCategorie = $voiture->voitureCategorie(); */
        $select = $voiture->select();
        
       /*  $categorie = new Categorie;
        $selectCategorie = $categorie->selectId($select['categorie_id']);
     */
        return Twig::render('voiture-index.php', ['voitures'=>$select]);
        
       

    }

     public function create(){

        $categorie = new Categorie;
        $select = $categorie->select();
        return Twig::render('voiture-create.php', ['categories'=>$select]);
        
    } 

    public function store(){
        print_r($_POST);
                
        $voiture = new Voiture;
        $insert = $voiture->insert($_POST);
     
        print_r($selectId); 

         RequirePage::url('voiture/show/'.$insert);  

       

    }


    public function show($id){
        
        $voiture = new Voiture;
        $selectId = $voiture->selectId($id);
        $categorie = new Categorie;
        $selectCategorie = $categorie->selectId($selectId['categorie_id']);
        return Twig::render('voiture-show.php', ['voiture'=>$selectId, 'categories'=>$selectCategorie['nom']]);
    }

    public function edit($id){
        $voiture = new Voiture;
        $selectId = $voiture->selectId($id);
        $categorie = new Categorie;
        $selectCategories = $categorie->select();
        return Twig::render('voiture-edit.php', ['voiture'=>$selectId, 
                                'categories'=>$selectCategories]); 
       
    }
    public function update(){
        print_r($_POST);
        $voiture = new Voiture;
        $update =  $voiture->update($_POST);

       
        RequirePage::url('voiture/show/'.$_POST['id']);
    }

    Public function destroy(){
        
        $voiture = new Voiture;
        $update = $voiture->delete($_POST['id']);
        RequirePage::url('voiture/index');
    }
    
        
    
}

?>