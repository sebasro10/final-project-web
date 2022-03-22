<script> document.title = "Missions"; </script>
<?php include_once 'view/menu.php'; ?>
<h1>Missions</h1>

<table border="1" bgcolor="#ccccff" frame="above">
    <tbody>
        <tr>
            <td>Nom de la mission</td>
            <td>Statut</td>
            <td>Salarié</td>
            <td>Action</td>
        </tr>
        <?php foreach ($records as $row): ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['last_name'] ?></td>
            <td>
                <button id="visualiser" name="visualiser" onclick="location.href = '?action=viewMission&id=<?= $row['id_mission'] ?>';">visualiser</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

