<?php

RequirePage::model('CRUD');
RequirePage::model('Voiture');
RequirePage::model('Categorie');


class ControllerVoiture extends controller {
    public function index(){
       
        $voiture = new Voiture;
        $selectCategorie = $voiture->selectCategorie();
        return Twig::render('voiture-index.php', ['voitures'=>$selectCategorie]);
        
       

    }

     public function create(){
        CheckSession::sessionAuth();
        if($_SESSION['privilege'] == 1 || $_SESSION['privilege'] == 2){
        $categorie = new Categorie;
        $select = $categorie->select();
        return Twig::render('voiture-create.php', ['categories'=>$select]);
        }
        RequirePage::url('login'); 
    } 

    public function store() {

        $categorie = new Categorie;
        $select = $categorie->select();

        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $target_dir = 'uploads/'; 
            $target_file = $target_dir . basename($_FILES['photo']['name']);
                
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
              
                $_POST['photo'] = $_FILES['photo']['name'];
             
                $voiture = new Voiture;
                $insert = $voiture->insert($_POST);
    
               
                RequirePage::url('voiture/show/'.$insert);
            } else {
                
                return Twig::render('voiture-create.php', ['errors' => 'Error', 'voiture' => $_POST, 'categories'=>$select]);
            }
        } else {
           
            return Twig::render('voiture-create.php', ['errors' => 'Sélectionnez un fichier', 'voiture' => $_POST, 'categories'=>$select]);
        }
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
        CheckSession::sessionAuth();
        if($_SESSION['privilege'] == 2){
        $voiture = new Voiture;
        $update = $voiture->delete($_POST['id']);
        RequirePage::url('voiture/index');
        }else{
            RequirePage::url('login');
        }
    }
    
        
    
}

?>