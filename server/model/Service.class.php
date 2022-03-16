<?php

include_once 'util/DataModel.class.php';

class Service extends DataModel
{

    function __construct()
    {
        parent::__construct('service');
    }

    function readRecords()
    {
        $sql = 'select * from services';
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

    function deleteRecord($id)
    {
        $sql = "delete from services where id_service='$id'";
        $this->statement = $this->conn->query($sql);
        $success = $this->statement->execute();
        return $success;
    }

    function insertRecord($values)
    {
        $sql = 'insert into services (id_service, name) values(?,?)';
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

    function updateRecord($id, $values)
    {
        $sql = "update services set id_service=?,
            name=?,
            where id_service=$id";
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }
}
