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
        $sql = "delete from costs where id_cost=$id";
        $this->statement = $this->conn->query($sql);
        $success = $this->statement->execute();
        return $success;
    }

    function insertRecord($values) {
        $sql = 'insert into costs (date, description, quantity, currency, id_mission, evidence, id_type_of_expense) values(?,?,?,?,?,?,?)';
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

    function getDebitCosts($id) {
        $sql = 'SELECT co.date, co.description, co.quantity, co.evidence, t.name FROM costs AS co JOIN types_of_expense AS t ON co.id_type_of_expense=t.id_type_of_expense WHERE co.id_mission = :id_mission';
        $this->statement = $this->conn->prepare($sql);
        $this->statement->execute(['id_mission' => $id]);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

    function getCreditCosts($id) {
        $sql = 'SELECT date, description, quantity FROM credits WHERE id_mission = :id_mission';
        $this->statement = $this->conn->prepare($sql);
        $this->statement->execute(['id_mission' => $id]);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

}

?>