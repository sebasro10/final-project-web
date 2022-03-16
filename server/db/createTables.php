<?php

require_once("connect.php");
// SQL statement for creating new tables
$statements = [
    'CREATE TABLE Services( 
        id   INT AUTO_INCREMENT,
        namea  VARCHAR(100) NOT NULL, 
        PRIMARY KEY(id)
    );',
    'CREATE TABLE Users( 
        id   INT AUTO_INCREMENT,
        first_name  VARCHAR(100) NOT NULL, 
        last_name   VARCHAR(100) NULL,
        mdp   VARCHAR(100) NULL,
        email  VARCHAR(100) NULL,
        phone   VARCHAR(100) NULL,
        service1   VARCHAR(100) NULL,
        PRIMARY KEY(id)
    );',
    'CREATE TABLE Mission( 
        id   INT AUTO_INCREMENT,
        status1  VARCHAR(100) NOT NULL, 
        place   VARCHAR(100) NULL,
        date1   VARCHAR(100) NULL,
        start_date1  VARCHAR(100) NULL,
        end_date1   VARCHAR(100) NULL,
        user_id1   VARCHAR(100) NULL,
        PRIMARY KEY(id)
    );',
    'CREATE TABLE Credit( 
        id   INT AUTO_INCREMENT,
        date1 VARCHAR(100) NOT NULL, 
        description1   VARCHAR(100) NULL,
        quantity   VARCHAR(100) NULL,
        currency  VARCHAR(100) NULL,
        mission_id   VARCHAR(100) NULL,
        PRIMARY KEY(id)
    );',
    'CREATE TABLE Tax (
        id   INT AUTO_INCREMENT,
        date1 VARCHAR(100) NOT NULL, 
        description1   VARCHAR(100) NULL,
        quantity   VARCHAR(100) NULL,
        currency  VARCHAR(100) NULL,
        mission_id   VARCHAR(100) NULL,
        preuve VARCHAR(100) NULL, 
        type_de_depense VARCHAR(100) NULL,
        PRIMARY KEY(id)
    )'
];

//print_r($statements);

// execute SQL statements
foreach ($statements as $statement) {
    try {
        $pdo->exec($statement);
        echo "<b>Table created </b>: $statement <br><br>";
    } catch (PDOException $e) {
        die("DB ERROR: " . $e->getMessage());
    }
}
