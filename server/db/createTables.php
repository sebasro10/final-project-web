<?php

require_once("connect.php");
// SQL statement for creating new tables
$statements = [
    'CREATE TABLE services( 
        id_service INT(10) AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL, 
        PRIMARY KEY (id_service)
    );',
    'CREATE TABLE users( 
        id_user INT AUTO_INCREMENT,
        first_name VARCHAR(100) NOT NULL, 
        last_name   VARCHAR(100) NOT NULL,
        mdp   VARCHAR(100) NOT NULL,
        email  VARCHAR(100) NOT NULL,
        phone   VARCHAR(100) NOT NULL,
        id_service  INT(10),
        PRIMARY KEY(id_user),
        FOREIGN KEY(id_service) REFERENCES services(id_service)     
    );',
    'CREATE TABLE missions( 
        id_mission   INT AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        status  VARCHAR(100) NOT NULL, 
        place   VARCHAR(100) NOT NULL,
        description  VARCHAR(1000) NOT NULL,
        start_date  VARCHAR(100) NOT NULL,
        end_date   VARCHAR(100) NOT NULL,
        id_user   INT,
        foreign key (id_user) references users(id_user),
        PRIMARY KEY(id_mission)
    );',
    'CREATE TABLE credits( 
        id_credit   INT AUTO_INCREMENT,
        date VARCHAR(100) NOT NULL, 
        description   VARCHAR(100) NOT NULL,
        quantity   VARCHAR(100) NOT NULL,
        currency  VARCHAR(100) NOT NULL,
        id_mission  INT,
        foreign key (id_mission) references missions(id_mission),
        PRIMARY KEY(id_credit)
    );',
    'CREATE TABLE types_of_expense (
        id_type_of_expense INT AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        PRIMARY KEY(id_type_of_expense)
    );',
    'CREATE TABLE costs (
        id_cost   INT AUTO_INCREMENT,
        date VARCHAR(100) NOT NULL, 
        description   VARCHAR(100) NOT NULL,
        quantity   VARCHAR(100) NOT NULL,
        currency  VARCHAR(100) NOT NULL,
        id_mission   INT,
        evidence VARCHAR(100) NOT NULL, 
        id_type_of_expense INT,
        foreign key (id_mission) references missions(id_mission),
        foreign key (id_type_of_expense) references types_of_expense(id_type_of_expense),
        PRIMARY KEY(id_cost)
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
