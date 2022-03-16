<?php

include_once 'Crudable.interface.php';
include_once 'PDOFactory.class.php';

abstract class DataModel implements Crudable {

    protected $conn = null;

    function __construct() {
        $this->conn = PDOFactory::getConnection();
    }

    function close() {
        $this->conn = null;
    }

}

?>