<?php
RequirePage::model('CRUD');
RequirePage::model('Journal');




class ControllerJournal extends Controller {

    public function index(){

     
    $journal = new Journal;
    $selectJournal = $journal->select();


 

    return Twig::render('journal/index.php', ['selectJournals' => $selectJournal]);
        }


    public function error($e = null){
        return 'error '.$e;
    }

}

?>