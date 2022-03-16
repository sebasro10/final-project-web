<?php

include_once 'controller/Controller.class.php';

class CostsController extends Controller {

    private $cost = null;

    function __construct() {
        $this->cost = new Cost();
    }

    public function index() {
        
    }

}

?>
