<?php

include_once 'controller/Controller.class.php';

class UsersController extends Controller {

    private $user = null;

    function __construct() {
        $this->user = new User();
    }

    public function index() {
        include_once 'view/login.php';
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
