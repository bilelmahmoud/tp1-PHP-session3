<?php

class ControllerJournal extends Controller {

    public function index(){

       /*  $_SERVER['REMOTE_ADDR'];
        echo '<pre>';
        print_r($_SERVER);

        echo '</pre>';
        die();
   */
      

      return Twig::render('journal/index.php');
    }


    public function error($e = null){
        return 'error '.$e;
    }

}

?>