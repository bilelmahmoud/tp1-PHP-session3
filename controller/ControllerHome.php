<?php

class ControllerHome extends Controller {

    public function index(){
  

      return Twig::render('home.php', ["name" => 'BILEL']);
    }

    public function error($e = null){
        return 'error '.$e;
    }

}

?>