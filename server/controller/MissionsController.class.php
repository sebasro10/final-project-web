<?php

include_once 'controller/Controller.class.php';

class MissionsController extends Controller {

    private $mission = null;

    function __construct() {
        $this->mission = new Mission();
    }

    public function index() {
        $records = $this->mission->readRecords();
        include_once 'view/tableau_missions2.php';
    }

    public function addMission() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['nom_mission']) && $_POST['lieu_mission'] != "" && isset($_POST['date_debut']) && $_POST['date_fin'] != "" && isset($_POST['description_mission'])) {
                $nom = $_POST['nom_mission'];
                $lieu = $_POST['lieu_mission'];
                $date_debut = $_POST['date_debut'];
                $date_fin = $_POST['date_fin'];
                $description = $_POST['description_mission'];
                $statut = "en cours";
                
                $user = $_SESSION['id_user'];

                $this->mission->insertRecord([$nom, $statut , $lieu, $description, $date_debut, $date_fin, $user]);
                $this->index();
            }
        } else {
            include_once 'view/formulaire_mission2.php';
        }
    }

    public function closeMission() {
        $this->mission->closeMission($_GET['id']);
        $this->index();
    }

    public function deleteMission() {
        $this->mission->deleteRecord($_GET['id']);
        $this->index();
    }

    public function updateMission() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['nom_mission']) && $_POST['lieu_mission'] != "" && isset($_POST['date_debut']) && $_POST['date_fin'] != "" && isset($_POST['description_mission'])) {
                $id_mission = $_POST['id'];
                $nom = $_POST['nom_mission'];
                $lieu = $_POST['lieu_mission'];
                $date_debut = $_POST['date_debut'];
                $date_fin = $_POST['date_fin'];
                $description = $_POST['description_mission'];
                $statut = "en cours";
                
                $user = $_SESSION['user_id'];
            
                modifier_mission($nom, $statut , $lieu, $date_debut, $date_fin, $description, $user, $id_mission);
                
                echo "mission modifiée";
            }
        } else {
            $record = $this->mission->getRecordById($_GET['id'], $_SESSION["id_user"])[0];
            include_once 'view/modification_mission.php';
        }
    }

    public function viewAllMissions() {
        $records = $this->mission->readAllRecords();
        include_once 'view/tableau_mission_direction.php';
    }

}

?>
