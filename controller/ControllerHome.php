<?php

class ControllerHome extends Controller {

    public function index(){
  

      return Twig::render('home.php', ["name" => 'Découvrez une expérience de conduite inégalée avec notre sélection de voitures de prestige. Que vous recherchiez des performances exceptionnelles, un design captivant ou le confort ultime, nous avons la voiture parfaite pour votre prochaine aventure sur la route. Explorez notre flotte et vivez l excitation de la route à son maximum. Bienvenue dans le monde de la location de voitures conçu pour les vrais passionnés de l automobile.']);
    }

    public function error($e = null){
        return 'error '.$e;
    }

}

?>