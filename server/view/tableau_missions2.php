<script> document.title = "Missions"; </script>
<?php include_once 'view/menu.php'; ?>
<h1>Missions</h1>

<table border="1" bgcolor="#ccccff" frame="above">
    <tbody>
        <tr>
            <td>Nom</td>
            <td>Statut</td>
            <td>Actions</td>
        </tr>
        <?php foreach ($records as $row): ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['status'] ?></td>
            <td>
                <button id="visualiser" name="visualiser" onclick="location.href = '?action=viewMission&id=<?= $row['id_mission'] ?>';">visualiser</button>
                <button id="cloturer" name="cloturer" onclick="location.href = '?action=closeMission&id=<?= $row['id_mission'] ?>';">cloturer</button>
                <button id="modifier" name="modifier" onclick="location.href = '?action=updateMission&id=<?= $row['id_mission'] ?>';">modifier</button>
                <button id="supprimer" name="supprimer" onclick="location.href = '?action=deleteMission&id=<?= $row['id_mission'] ?>';">supprimer</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<button onclick="location.href = '?action=addMission';">Nouvelle Mission</button>