<?php

include_once 'controller/Controller.class.php';

class CostsController extends Controller {

    private $cost = null;

    function __construct() {
        $this->cost = new Cost();
    }

    public function index() {
        $mission = new Mission;
        $record = $mission->getRecordMostRecent();
        $dataDebits = $this->cost->getDebitCosts($record["id_mission"]);
        $dataCredits = $this->cost->getCreditCosts($record["id_mission"]);
        include_once 'view/feuille_de_comptabilite.php';
    }

    public function addDebit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['submit'])){
                $fileInfo = pathinfo($_FILES['screenshot']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                $date = $_POST['date'];
                $description = $_POST['description'];
                $quantity = $_POST['montant'];
                $id_mission = 2; //$_SESION['id_mission_a_afficher']
                $evidence = $_FILES['screenshot']['name'];
                $id_type_of_expense = $_POST['type_depense'];
            }

            if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0): 
                if ($_FILES['screenshot']['size'] <= 1000000):
                    if (in_array($extension, $allowedExtensions)):
                        echo "L'envoi a bien été effectué !";
                        move_uploaded_file($_FILES['screenshot']['tmp_name'], 'db-files/' . basename($_FILES['screenshot']['name']));
                        $this->cost->insertRecord([$date, $description, $quantity, "", $id_mission, $evidence, $id_type_of_expense]);
                    endif;
                else:
                    echo "Le format de la preuve n'est pas accepté";
                endif;
            endif; 
            $this->index();
        } else {
            $typeOfExpense = new TypeOfExpense();
            $records = $typeOfExpense->readRecords();
            include_once 'view/formulaire_debit.php';
        }
    }

    public function viewCostsOfMission() {
        $id = $_GET['id'];
        $mission = new Mission;
        $record = $mission->getRecordById($id);
        $dataDebits = $this->cost->getDebitCosts($record["id_mission"]);
        $dataCredits = $this->cost->getCreditCosts($record["id_mission"]);
        include_once 'view/feuille_de_comptabilite.php';
    }

}

?>
