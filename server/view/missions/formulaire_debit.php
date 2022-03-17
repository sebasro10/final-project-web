<?php
require_once("../db/connect.php");
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
        <h1>Ajouter une opération</h1>
        <form action="submit_formulaire_debit.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>           
            <div class="mb-3">
                <label for="montant" class="form-label">Montant :</label>
                <input type="number" class="form-control" id="montant" name="montant" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description :</label>
                <textarea class="form-control" placeholder="Décrivez votre opération" id="description" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <select name="type_depense">
                    <option>---Type---</option>
                    <?php 
                    $sqlQuery = 'SELECT * FROM types_of_expense';
                    $type_of_expense_Statement = $pdo->query($sqlQuery);
                    while($donnees = $type_of_expense_Statement->fetch() ){
                        echo '<option value ='.$donnees['id_type_of_expense'].'>'.$donnees['name'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="screenshot" class="form-label">Votre preuve</label>
                <input type="file" class="form-control" id="screenshot" name="screenshot" required/>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Ajouter l'opération</button>
        </form>
        <br />
    </div>

</body>
</html>