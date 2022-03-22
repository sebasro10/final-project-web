<?php

include_once 'util/DataModel.class.php';

class Mission extends DataModel {

    function __construct() {
        parent::__construct('mission');
    }

    function readRecords() {
        $id_user = $_SESSION['id_user'];
        $sql = "select * from missions where id_user=$id_user";
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

    function closeMission($id){
        $sql = "update missions set status=:status where id_mission=:id";
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute(['status'=>"cloturée", 'id'=>$id]);
        return $success;
    }

    function getRecordById($id, $id_user) {
        $sql = "select * from missions where id_mission=$id and id_user=$id_user";
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetch();
        return $records;
    }

    function getRecordMostRecent($id_user) {
        $sql = "select * from missions where id_user=$id_user ORDER BY start_date DESC";
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $record = $this->statement->fetch();
        return $record;
    }

    function readAllRecords() {
        $sql = 'select m.name, m.status, u.last_name, m.id_mission from missions m, users u WHERE m.id_user = u.id_user';
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

}

?>