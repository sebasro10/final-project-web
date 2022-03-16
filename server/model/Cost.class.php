<?php 

include_once 'util/DataModel.class.php';

class Cost extends DataModel {
   
    function __construct(){
        parent::__construct('cost');
    }

    function readRecords() {
        $sql = 'select * from costs';
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

    function deleteRecord($id) {
        $sql = "delete from costs where id_cost='$id'";
        $this->statement = $this->conn->query($sql);
        $success = $this->statement->execute();
        return $success;
    }

    function insertRecord($values) {
        $sql = 'insert into costs (date, description, quantity, currency, id_mission, evidence, type_of_expense) values(?,?,?,?,?,?,?)';
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

    function updateRecord($id, $values) {
        $sql = "update costs set date=?,
            description=?,
            quantity=?,
            currency=?,
            id_mission=?,
            evidence=?,
            type_of_expense=?
            where id_cost=$id";
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

    // function getRecordById($id) {
    //     $sql = "select * from costs where id='$id'";
    //     $this->statement = $this->conn->prepare($sql);
    //     $success = $this->statement->execute();
    //     if ($success) {
    //         $this->statement->setFetchMode(PDO::FETCH_ASSOC);
    //         $records = $this->statement->fetchAll();
    //         return $records;
    //     }
    //     return [];
    // }

}

?>