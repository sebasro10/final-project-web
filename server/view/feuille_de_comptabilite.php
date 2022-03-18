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
    <div class="container">
        <h1 style="text-align:center">Feuille de comptabilité</h1>
        <p><label for="name" class="form-label">Nom : <?= $record['name'] ?></label></p>
        <p><label for="statut" class="form-label">Statut : <?= $record['status'] ?></label></p>
        <p><label for="place" class="form-label">Lieu : <?= $record['place'] ?></label></p>
        <p><label for="description" class="form-label">Description de la mission : <?= $record['description'] ?></label></p>
        <p><label for="start_date" class="form-label">Date de début de la mission : <?= $record['start_date'] ?></label></p>
        <p><label for="end_date" class="form-label">Date de fin de la mission : <?= $record['end_date'] ?></label></p>
    </div>
    <div class="liste">
        <table>
            <tr>
                <th class="thliste">Type</th>
                <th class="thliste">Date</th>
                <th class="thliste">Description</th>
                <th class="thliste">Montant</th>
                <th class="thliste">Type de frais</th>
                <th class="thliste">Preuve</th>
                <th class="thliste">Actions</th>
            </tr>
            <?php foreach ($dataDebits as $item): ?>
            <tr>
                <td class="tdliste">Débit</td>
                <td class="tdliste"><?= $item['date'] ?></td>
                <td class="tdliste"><?= $item['description'] ?></td>
                <td class="tdliste"><?= $item['quantity'] ?></td>
                <td class="tdliste"><?= $item['name'] ?></td>
                <td class="tdliste"><?= $item['evidence'] ?></td>
            </tr>
            <?php endforeach; ?>

            <?php foreach ($dataCredits as $item): ?>
            <tr>
                <td class="tdliste">Crédit</td>
                <td class="tdliste"><?= $item['date'] ?></td>
                <td class="tdliste"><?= $item['description'] ?></td>
                <td class="tdliste"><?= $item['quantity'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <button onclick="location.href = '?action=formulaire_credit';">Créer un crédit</button>
        <button onclick="location.href = '?action=formulaire_debit';">Créer un débit</button>
        
</body>

</html>