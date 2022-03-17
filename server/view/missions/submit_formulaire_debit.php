<?php 
    require_once("../db/connect.php");
    if(isset($_POST['submit'])){
        $fileInfo = pathinfo($_FILES['screenshot']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
        $date = $_POST['date'];
        $description = $_POST['description'];
        $quantity = $_POST['montant'];
        $id_mission = 1; //$_SESION['id_mission_a_afficher']
        $evidence = $_FILES['screenshot']['name'];
        $id_type_of_expense = $_POST['type_depense'];
    }
    

?>
<?php if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0): ?>
    <?php if ($_FILES['screenshot']['size'] <= 1000000): ?>
            <?php if (in_array($extension, $allowedExtensions)): ?>
                <p class="card-text"><?php echo "L'envoi a bien été effectué !"; ?></p>
                <?php move_uploaded_file($_FILES['screenshot']['tmp_name'], '../uploads/' . basename($_FILES['screenshot']['name']));?>
                <?php
                    $insertDebit = $pdo->prepare("INSERT INTO costs(date, description, quantity, id_mission, evidence, id_type_of_expense) VALUES (:date,:description,:montant,:id_mission,:preuve,:id_depense)");
                    $insertDebit->execute([
                        'date' => $date,
                        'description' => $description,
                        'montant' => $quantity,
                        'id_mission' => $id_mission,
                        'preuve' => $evidence,
                        'id_depense' => $id_type_of_expense
                    ]); ?>
            <?php endif; ?>
            <?php else: ?>
                <?php echo "Le format de la preuve n'est pas accepté";?>
    <?php endif; ?>
<?php endif; ?>
<?php require_once("feuille_de_comptabilite.php"); ?>


