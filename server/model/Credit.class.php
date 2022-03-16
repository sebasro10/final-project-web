<?php 

include_once 'util/DataModel.class.php';

class Credit extends DataModel {
   
    function __construct(){
        parent::__construct('credit');
    }

    function readRecords() {
        $sql = 'select * from credits';
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

    function deleteRecord($id) {
        $sql = "delete from credits where id_credit=$id";
        $this->statement = $this->conn->query($sql);
        $success = $this->statement->execute();
        return $success;
    }

    function insertRecord($values) {
        $sql = 'insert into credits (date, description, quantity, currency, id_mission) values(?,?,?,?,?)';
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

    function updateRecord($id, $values) {
        $sql = "update credits set date=?,
            description=?,
            quantity=?,
            currency=?,
            id_mission=?
            where id_credit=$id";
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

}

?>