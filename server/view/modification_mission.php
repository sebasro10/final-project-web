<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Modification de la mission</h1>

    <form method="post" name="FrameCitation" action="">
        <div>
            <label for="mission">id :</label>
            <input name="id" value="<?= $record['id_mission'] ?>">
        </div>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" autocomplete=o n required="true" id="nom" name="nom_mission" value="<?= $record['name'] ?>">
        </div>
        <div>
            <label for="lieu">Lieu :</label>
            <input type="text" autocomplete=o n required="true" id="lieu" name="lieu_mission" value="<?= $record['place'] ?>">
        </div>
        <div>
            <label for="date de debut">Date de début :</label>
            <input name="date_debut" type="date" value="<?= $record['start_date'] ?>">
            <label for="date de fin">Date de fin :</label>
            <input name="date_fin" type="date" value="<?= $record['end_date'] ?>">
        </div>
        <div>
            <label for="description">Description :</label>
            <textarea id="description" name="description_mission"><?= $record['description'] ?></textarea>
        </div>
        <div>
            <input name="Enregistrer" value="Enregistrer la modification" type="submit">
        </div>
    </form>

    <a href='?action=viewMissions'>retour visualisation missions</a>

</body>

</html>