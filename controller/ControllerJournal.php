<?php
RequirePage::model('CRUD');
RequirePage::model('Journal');

class ControllerJournal extends Controller {

    public function index(){

       /*  $_SERVER['REMOTE_ADDR'];
        echo '<pre>';
        print_r($_SERVER);

        echo '</pre>';
        die();
   */
    $log = array(
        'adresse_ip' => $_SERVER['REMOTE_ADDR'],
        'date' =>  date('Y-m-d H:i:s'),
        'nom' => (isset($_SESSION['username'])) ? $_SESSION['username'] : 'guest',
        'page_visitee' => 'journal/index'
    );

    $journal = new Journal;

    $data = $journal->insert($log);

    $selectJournal = $journal->selectId($data);

    // Convertissez le tableau associatif en tableau numéroté
    $selectJournal = array_values($selectJournal);

    return Twig::render('journal/index.php', ['selectJournal' => $selectJournal]);
        }


    public function error($e = null){
        return 'error '.$e;
    }

}

?>