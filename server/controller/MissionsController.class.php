<?php

include_once 'controller/Controller.class.php';

class MissionsController extends Controller {

    private $mission = null;

    function __construct() {
        $this->mission = new Mission();
    }

    public function index() {
        
    }

}

?>
