<?php

include_once 'util/DataModel.class.php';

class credits extends DataModel
{

    function __construct()
    {
        parent::__construct('credit');
    }

    function readRecords()
    {
        $sql = 'select * from credits';
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

    function deleteRecord($id)
    {
        $sql = "delete from credits where id='$id'";
        $this->statement = $this->conn->query($sql);
        $success = $this->statement->execute();
        return $success;
    }

    function insertRecord($values)
    {
        $sql = 'insert into credits (id_user, id_author, citation, citationDate) values(?,?,?,?)';
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

    function updateRecord($id, $values)
    {
        $sql = "update credits set id_user=?,
            id_author=?,
            citation=?,
            citationDate=?
            where id=$id";
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }
}
