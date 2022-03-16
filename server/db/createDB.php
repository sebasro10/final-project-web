<?php
try {
    //echo "$error";
    $dbh = new PDO("mysql:host=$host", $root, $root_password);

    $dbh->exec("CREATE DATABASE `$db`"); //  or die(print_r($dbh->errorInfo(), true));

    $msg = implode($dbh->errorInfo());
    $error = "Can't create database '" . $db . "'; database exists";

    if (strpos($msg, $error)) {
        echo "Warning: Database: `$db` has been already created, type YES if you want to delete the database and create a new one? <br><br> ";
        $delete = "1";
    }
} catch (PDOException $e) {

    die("DB ERROR: " . $e->getMessage());
}

if (isset($_POST['action'])) {
    if ($_POST['action'] == "Confirm") {
        if (isset($_POST['confirmation']) && $_POST['confirmation'] == 'YES') {

            // Delete Database
            try {
                $dbh->exec("DROP DATABASE IF EXISTS `$db`");
                echo "DataBase `$db` has been deleted <br><br> ";
                $dbh->exec("CREATE DATABASE `$db`");
                echo "DataBase `$db` has been created <br><br> ";
                unset($delete);
            } catch (PDOException $e) {
                die("DB ERROR: " . $e->getMessage());
            }
        } else {
            echo "Please type YES";
        }
    } elseif ($_POST['action'] == "Cancel") {
        echo "DataBase has not been deleted";
        unset($delete);
    } else {
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($delete)) { ?>
        <form method="post">
            <input type="text" name="confirmation" id="">
            <input type="submit" name="action" value="Confirm">
            <input type="submit" name="action" value="Cancel">
        </form>
    <?php } else echo " " ?>
</body>

</html>