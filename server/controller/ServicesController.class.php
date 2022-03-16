<?php

include_once 'controller/Controller.class.php';

class ServicesController extends Controller {

    private $service = null;

    function __construct() {
        $this->service = new Service();
    }

    public function index() {
        
    }

}

?>
