<?php
session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

define('PATH_DIR', 'http://localhost/PHP/tp1-PHP-session3/');
//define('PATH_DIR', 'https://e2395390.webdev.cmaisonneuve.qc.ca/tp1-PHP-session3/');
require_once('controller/Controller.php');
require_once('library/RequirePage.php');
require_once __DIR__.'/vendor/autoload.php';
require_once('library/Twig.php');
require_once('library/CheckSession.php');
require_once('model/Journal.php');

$url = isset($_GET["url"]) ? explode ('/', ltrim($_GET["url"], '/')) : '/';

//print_r($url);

// echo $url[0]; // controller
// echo $url[1]; // method
// echo $url[2]; // value

$journal = new Journal;

$log = array(
    'adresse_ip' => $_SERVER['REMOTE_ADDR'],
    'date' =>  (new DateTime('now', new DateTimeZone('America/Toronto')))->format('Y-m-d H:i:s'),
    'nom' => (isset($_SESSION['username'])) ? $_SESSION['username'] : 'guest',
    'page_visitee' => $_SERVER['REQUEST_URI']
);



$data = $journal->insert($log);


if($url == '/'){
    require_once('controller/ControllerHome.php');
    $controller = new ControllerHome;
    echo $controller->index(); 
}else{
    //controller
    $requestURL = $url[0];
    $requestURL = ucfirst($requestURL);
    $controllerPath = __DIR__."/controller/Controller".$requestURL.".php";

    if(file_exists($controllerPath)){
        require_once( $controllerPath);
        $controllerName = 'Controller'.$requestURL;
        $controller = new $controllerName;
        if(isset($url[1])){
            $method = $url[1];
            if(isset($url[2])){
                echo $controller->$method($url[2]);
            }else{
                echo $controller->$method();
            }
        }else{
            echo $controller->index();
        }
        

    }else{
        require_once('controller/ControllerHome.php');
        $controller = new ControllerHome;
        echo $controller->error('404'); 
    }
}


// https://packagist.org/packages/rakit/validation
?>