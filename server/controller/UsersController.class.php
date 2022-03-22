<?php

include_once 'controller/Controller.class.php';

class UsersController extends Controller {

    private $user = null;

    function __construct() {
        $this->user = new User();
    }

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mailPost = $_POST['email'];
            $passwordPost = $_POST['password'];
            
            try {
                $userBD = $this->user->getRecordByEmail($mailPost)[0];
                if (strcmp(sha1($passwordPost), $userBD["mdp"]) === 0) {
                    $_SESSION["mail"] = $mailPost;
                    $_SESSION["id_user"] = $userBD["id_user"];
                    $_SESSION["name_user"] = $userBD["first_name"] . " " . $userBD["last_name"];
                    $_SESSION["lastConnection"] = Date("Y-m-d H:i:s");
                    $costsController = new CostsController();
                    $costsController->index();
                } else throw new Exception();
            } catch (Exception $e) {
                include_once 'view/login.php';
            }
        } else {
            include_once 'view/login.php';
        }
    }

    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //validations
            //$this->user->insertRecord([$loginPost,$mailPost,$passwordPost]);
        } else {
            include_once 'view/signup.php';
        }
    }

}

?>
