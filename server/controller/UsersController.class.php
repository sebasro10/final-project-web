<?php

include_once 'controller/Controller.class.php';

class UsersController extends Controller {

    private $user = null;

    function __construct() {
        $this->user = new User();
    }

    public function index() {
        
    }

}

?>
