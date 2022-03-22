<?php

require_once("connect.php");


$statements = [
    'INSERT INTO `services` (`id_service`, `name`) VALUES (1, "Admin");',
    'INSERT INTO `services` (`id_service`, `name`) VALUES (2, "IT");',
    'INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `mdp`, `email`, `phone`, `service`, `id_service`) 
    VALUES (NULL, "Donald", "Trump", "I am god", "MakeThisCompany@GreatAgain.com", "1234567", "Administrator", 1)'
];


foreach ($statements as $statement) {
    try {
        $pdo->exec($statement);
        echo "<b>Sample Inserted </b>: $statement <br><br>";
    } catch (PDOException $e) {
        die("DB ERROR: " . $e->getMessage());
    }
}
