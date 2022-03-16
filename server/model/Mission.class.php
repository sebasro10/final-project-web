<?php

include_once 'util/DataModel.class.php';

class Mission extends DataModel {

    function __construct() {
        parent::__construct('mission');
    }

    function readRecords() {
        $sql = 'select * from missions';
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

    function deleteRecord($id) {
        $sql = "delete from missions where id_mission=$id";
        $this->statement = $this->conn->query($sql);
        $success = $this->statement->execute();
        return $success;
    }

    function insertRecord($values) {
        $sql = 'insert into missions (name, status, place, description, start_date, end_date, id_user) values(?,?,?,?,?,?,?)';
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

    function updateRecord($id, $values) {
        $sql = "update missions set name=?,
            status=?,
            place=?,
            description=?,
            start_date=?,
            end_date=?,
            id_user=?
            where id_mission=$id";
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

}

?>