<?php

RequirePage::model('CRUD');
RequirePage::model('Voiture');
RequirePage::model('Categorie');


class ControllerVoiture extends controller {
    public function index(){
       
        $voiture = new Voiture;
        $selectCategorie = $voiture->selectCategorie();
      /*   $select = $voiture->select(); */
        
       /*  $categorie = new Categorie;
        $selectCategorie = $categorie->selectId($select['categorie_id']);
     */
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

    public function store(){
       /*  print_r($_POST);
                
        $voiture = new Voiture;
        $insert = $voiture->insert($_POST);
     
        print_r($selectId); 

         RequirePage::url('voiture/show/'.$insert);   */
         $voiture = new Voiture;

         if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $target_dir = "/PHP/tp1-PHP-session3/uploads/img/";
            $target_file = $_SERVER['DOCUMENT_ROOT'].$target_dir .$_FILES['photo']["name"];
            
            $check = getimagesize($_FILES['photo']["tmp_name"]);
            
            if ($check !== false) {
               
                move_uploaded_file($_FILES['photo']["tmp_name"], $target_file);
        
               
                $_POST['photo'] = $_FILES['photo']["name"];
                           
             
            } else {
                echo "Le fichier n'est pas une image valide.";
                die();
               
            }

                      
        }
       /*  var_dump([$_POST]); */
        unset($_POST['submit']);
        $insert = $voiture->insert($_POST);
        RequirePage::url('voiture/show/'.$insert); 


       /*  $_POST['photo'] = $_FILES['photo']['name']; */
           
/*             $voiture = new Voiture; */


           
         


       

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