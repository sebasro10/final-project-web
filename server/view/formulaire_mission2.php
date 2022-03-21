<script> document.title = "Création d'une mission"; </script>
<?php include_once 'view/menu.php'; ?>
<h1>Création d'une mission</h1>

<form method="post" name="FrameMission" action="" >
    <div>
        <label for="nom">Nom :</label>
        <input type="text" autocomplete=o n required="true" id="nom" name="nom_mission">
    </div>
    <div>
        <label for="lieu">Lieu :</label>
        <input type="text" autocomplete=o n required="true" id="lieu" name="lieu_mission">
    </div>
    <div>
        <label for="date de debut">Date de début :</label>
        <input name="date_debut" type="date">
        <label for="date de fin">Date de fin :</label>
        <input name="date_fin" type="date">
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea id="description" name="description_mission"></textarea>
    </div>
    <div>
        <input name="Enregistrer" value="Enregistrer la mission" type="submit">
    </div>
</form>

<a href='?action=viewMissions'>retour visualisation missions</a>