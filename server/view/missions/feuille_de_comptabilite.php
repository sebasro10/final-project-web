<?php
//session_start();

require_once("../db/connect.php");

/*
$_SESION['id_mission_a_afficher'] = 1;

$sqlQuery = 'SELECT * FROM mission WHERE id = :id_mission';
$missionStatement = $pdo->prepare($sqlQuery);

$missionStatement->execute([
        'id_mission' => $_SESION['id_mission_a_afficher'],
    ]);

$mission = $missionStatement->fetch();


echo $mission['description1'];
*/
$id_mission = 1;

$sqlQuery = 'SELECT * FROM missions WHERE id_mission = :id_mission';
$missionStatement = $pdo->prepare($sqlQuery);
$missionStatement->execute([
        'id_mission' => $id_mission,
    ]);

$mission = $missionStatement->fetch();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Opération</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <h1 style ="text-align:center">Feuille de comptabilité</h1>
        <p><label for="name" class="form-label" >Nom : <?php echo $mission['name']?></label></p>
        <p><label for="statut" class="form-label" >Statut : <?php echo $mission['status']?></label></p>
        <p><label for="place" class="form-label" >Lieu : <?php echo $mission['place']?></label></p>
        <p><label for="description" class="form-label" >Description de la mission : <?php echo $mission['description']?></label></p>
        <p><label for="start_date" class="form-label" >Date de début de la mission : <?php echo $mission['start_date']?></label></p>
        <p><label for="end_date" class="form-label" >Date de fin de la mission : <?php echo $mission['end_date']?></label></p>
    </div>
        <?php 
            $sqlDebits = 'SELECT co.date, co.description, co.quantity, co.evidence, t.name FROM costs AS co JOIN types_of_expense AS t ON co.id_type_of_expense=t.id_type_of_expense WHERE co.id_mission = :id_mission' ;
            $sqlCredits = 'SELECT date, description, quantity FROM credits WHERE id_mission = :id_mission';
            $debitStatement = $pdo->prepare($sqlDebits);
            
            $debitStatement->execute([
                'id_mission' => $id_mission,
            ]);
            echo '<center><div class="liste"><table>';
            echo '<tr>';
            echo '<th class="thliste">Type</th>';
            echo '<th class="thliste">Date</th>';
            echo '<th class="thliste">Description</th>';
            echo '<th class="thliste">Montant</th>';
            echo '<th class="thliste">Type de frais</th>';
            echo '<th class="thliste">Preuve</th>';
            echo '<th class="thliste">Actions</th>';
            echo '</tr>';
        
            while($donnees = $debitStatement->fetch()) // Renvoit les valeurs de la bdd
            {
                echo '<tr>';
                echo '<td class="tdliste">Débit</td>';
                echo '<td class="tdliste">' . $donnees['date'] . '</td>';
                echo '<td class="tdliste">' . $donnees['description'] . '</td>';
                echo '<td class="tdliste">' . $donnees['quantity'] . '</td>';
                echo '<td class="tdliste">' . $donnees['name'] . '</td>';
                echo '<td class="tdliste">' . $donnees['evidence'] . '</td>';
                echo '</tr>';
            }

            $sqlCredits = 'SELECT date, description, quantity FROM credits WHERE id_mission = :id_mission';
            $creditStatement = $pdo->prepare($sqlCredits);
            
            $creditStatement->execute([
                'id_mission' => $id_mission,
            ]);
        
            while($donnees = $creditStatement->fetch()) // Renvoit les valeurs de la bdd
            {
                echo '<tr>';
                echo '<td class="tdliste">Crédit</td>';
                echo '<td class="tdliste">' . $donnees['date'] . '</td>';
                echo '<td class="tdliste">' . $donnees['description'] . '</td>';
                echo '<td class="tdliste">' . $donnees['quantity'] . '</td>';
                echo '</tr>';
            }
        ?>
    <form name="x" action="formulaire_credit.php" method="post">
        <input type="submit" value="Créer un crédit">
    </form>
    <form name="x" action="formulaire_debit.php" method="post">
        <input type="submit" value="Créer un débit">
    </form>
    

</body>





