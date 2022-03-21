<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Opération</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include_once 'view/menu.php'; ?>
    <div class="container">
        <h1>Ajouter une opération</h1>
        <form action="?action=formulaire_credit" method="post">
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
            <button type="submit" class="btn btn-primary" name="submit">Ajouter l'opération</button>
        </form>
        <br />
    </div>

</body>

</html>