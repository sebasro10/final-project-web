<?php

require_once("connect.php");


$pass1 = sha1("I am so good");
$pass2 = sha1("president2024");;

$statements = [
    'INSERT INTO `services` (`id_service`, `name`) VALUES (1, "Admin");',
    'INSERT INTO `services` (`id_service`, `name`) VALUES (2, "User");',
    'INSERT INTO `services` (`id_service`, `name`) VALUES (3, "IT");',
    'INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `mdp`, `email`, `phone`, `id_service`) 
    VALUES (NULL, "Donald", "Trump", "' . $pass1 . '" , "Donald@president.com", "1234567", 1);',
    'INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `mdp`, `email`, `phone`, `id_service`) 
    VALUES (NULL, "Emmanuel", "Macron", "' . $pass2 . '", "Manu@president.fr", "1234567", 1)'
];


foreach ($statements as $statement) {
    try {
        $pdo->exec($statement);
        echo "<b>Sample Inserted </b>: $statement <br><br>";
    } catch (PDOException $e) {
        die("DB ERROR: " . $e->getMessage());
    }
}
