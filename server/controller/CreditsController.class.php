<?php

include_once 'controller/Controller.class.php';

class CreditsController extends Controller {

    private $credit = null;

    function __construct() {
        $this->credit = new Cost();
    }

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $date = $_POST['date'];
            $description = $_POST['description'];
            $quantity = $_POST['montant'];
            $id_mission = $_GET['id'];
            $this->credit->insertRecord([$date, $description, $quantity, "", $id_mission, "", 1]); // missing data
            $costsController = new CostsController();
            $costsController->index();
        } else {
            $id_mission = $_GET['id'];
            include_once 'view/formulaire_credit.php';
        }
    }

}

?>
