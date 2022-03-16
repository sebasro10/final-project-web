<?php
require_once("config.php");

echo "$dsn, $root,$root_password";
$pdo = new PDO(
    $dsn,
    $root,
    $root_password
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<br><br> Connection success <br><br> ";
