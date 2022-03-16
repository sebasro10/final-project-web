<?php

class PDOFactory {

    static function getConnection() {
        include('db/config.php');
        $conn = new PDO($dsn, $root, $root_password);
        return $conn;
    }

}

