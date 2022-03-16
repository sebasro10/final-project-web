<?php

include_once 'util/DataModel.class.php';

class Mission extends DataModel
{

    function __construct()
    {
        parent::__construct('mission');
    }

<<<<<<< HEAD
    function readRecords() {
=======
    function readRecords()
    {
>>>>>>> 8cb6b4f58cd742f0fa98a8999afdeefecd0c5897
        $sql = 'select * from missions';
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

<<<<<<< HEAD
    function deleteRecord($id) {
        $sql = "delete from missions where id_mission=$id";
=======
    function deleteRecord($id)
    {
        $sql = "delete from missions where id='$id'";
>>>>>>> 8cb6b4f58cd742f0fa98a8999afdeefecd0c5897
        $this->statement = $this->conn->query($sql);
        $success = $this->statement->execute();
        return $success;
    }

<<<<<<< HEAD
    function insertRecord($values) {
        $sql = 'insert into missions (name, status, place, description, start_date, end_date, id_user) values(?,?,?,?,?,?,?)';
=======
    function insertRecord($values)
    {
        $sql = 'insert into missions (id_user, id_author, citation, citationDate) values(?,?,?,?)';
>>>>>>> 8cb6b4f58cd742f0fa98a8999afdeefecd0c5897
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

<<<<<<< HEAD
    function updateRecord($id, $values) {
        $sql = "update missions set name=?,
            status=?,
            place=?,
            description=?,
            start_date=?,
            end_date=?,
            id_user=?
            where id_mission=$id";
=======
    function updateRecord($id, $values)
    {
        $sql = "update missions set id_user=?,
            id_author=?,
            citation=?,
            citationDate=?
            where id=$id";
>>>>>>> 8cb6b4f58cd742f0fa98a8999afdeefecd0c5897
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }
}
