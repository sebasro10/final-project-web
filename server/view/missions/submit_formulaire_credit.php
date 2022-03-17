<?php 
    require_once("../db/connect.php");
    if(isset($_POST['submit'])){
        $date = $_POST['date'];
        $description = $_POST['description'];
        $quantity = $_POST['montant'];
        $id_mission = 1 ; //$_SESION['id_mission_a_afficher']
        $insertCredit = $pdo->prepare("INSERT INTO credits(date, description, quantity, id_mission) VALUES (:date,:description,:montant,:id_mission)");
        $insertCredit->execute([
            'date' => $date,
            'description' => $description,
            'montant' => $quantity,
            'id_mission' => $id_mission
        ]);
    }
    require_once("feuille_de_comptabilite.php");
?>
