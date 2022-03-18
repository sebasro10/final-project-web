<?php

include_once 'util/DataModel.class.php';

class TypeOfExpense extends DataModel {

    function __construct() {
        parent::__construct('types_of_expense');
    }

    function readRecords() {
        $sql = 'select * from types_of_expense';
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

    function deleteRecord($id) {
        $sql = "delete from types_of_expense where id_type_of_expense=$id";
        $this->statement = $this->conn->query($sql);
        $success = $this->statement->execute();
        return $success;
    }

    function insertRecord($values) {
        $sql = 'insert into types_of_expense (name) values(?)';
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

    function updateRecord($id, $values) {
        $sql = "update types_of_expense set name=? where id_type_of_expense =$id";
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

}

?>