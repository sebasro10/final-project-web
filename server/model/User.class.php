<?php

include_once 'util/DataModel.class.php';

class User extends DataModel
{

    function __construct()
    {
        parent::__construct('user');
    }

    function readRecords()
    {
        $sql = 'select * from users';
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }

    function deleteRecord($id)
    {
        $sql = "delete from users where id_user='$id'";
        $this->statement = $this->conn->query($sql);
        $success = $this->statement->execute();
        return $success;
    }

    function insertRecord($values)
    {
        $sql = 'insert into users (first_name, last_name, mdp, email, phone, id_service) values(?,?,?,?,?,?)';
        //echo '<br>' . $sql . '<br>';
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

    function updateRecord($id, $values)
    {
        $sql = "update users set id_user=?,
            first_name=?,
            last_name=?,
            mdp=?,
            email=?,
            phone=?,
            service=?,
            id_service=?,
            where id_user=$id";
        $this->statement = $this->conn->prepare($sql);
        $success = $this->statement->execute($values);
        return $success;
    }

    function getRecordByEmail($mail)
    {
        $sql = "select * from users where email='$mail'";
        $this->statement = $this->conn->query($sql);
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $records = $this->statement->fetchAll();
        return $records;
    }
}
