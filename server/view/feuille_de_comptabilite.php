<script> document.title = 'Feuille de comptabilité'; </script>
<?php include_once 'view/menu.php'; ?>
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
    <?php if (isset($record['id_mission'])) : ?>
        <button onclick="location.href = '?action=formulaire_credit&id=<?= $record['id_mission'] ?>';">Créer un crédit</button>
        <button onclick="location.href = '?action=formulaire_debit&id=<?= $record['id_mission'] ?>';">Créer un débit</button>
    <?php endif; ?>
</div>