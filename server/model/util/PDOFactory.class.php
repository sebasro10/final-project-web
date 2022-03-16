<?php

class PDOFactory {

    static function getConnection() {
        include(dirname(__DIR__).'/db/config.php');
        $conn = new PDO($dsn, $root, $root_password);
        return $conn;
    }

}

