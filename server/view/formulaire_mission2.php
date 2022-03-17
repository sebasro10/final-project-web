<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php 
include_once("../db/db-functions.php");
include_once("../db/config.php");

 ?>
    <h1>Création d'une mission</h1>
<form method = "post" name="FrameCitation" action = <?php echo $_SERVER['PHP_SELF'];?>>
<div>
  <label for="nom">Nom :</label>
  <input type="text" autocomplete = on required = "true" id="nom" name="nom_mission">
</div>
<div>
  <label for="lieu">Lieu :</label>
    <input type="text" autocomplete = on required = "true" id="lieu" name="lieu_mission">
</div>
  <div>
    <label for = "date de debut">Date de début :</label>
 <input name = "date_debut" type = "date">
     <label for = "date de fin">Date de fin :</label>
 <input name = "date_fin" type = "date">
  </div>
<div>
  <label for="description">Description :</label>
  <textarea id="description" name="description_mission">
</textarea>
</div>
<div>
  <input name="Enregistrer" value="Enregistrer la mission" type="submit">
</div>
</form>
<?php if (isset($_POST['nom_mission']) AND $_POST['lieu_mission'] != ""
     AND isset($_POST['date_debut']) AND $_POST['date_fin'] != ""
     AND isset($_POST['description_mission'])){

	$nom = $_POST['nom_mission'];
	$lieu = $_POST['lieu_mission'];
	$date_debut = $_POST['date_debut'];
	$date_fin = $_POST['date_fin'];
	$description = $_POST['description_mission'];
	$statut = "en cours";
	
	$user = 1; //$_SESSION['user_id'];

	insert_mission($nom, $statut , $lieu, $date_debut, $date_fin, $description, $user);
	
	echo "mission ajoutée";
 }
?>

<a href = 'tableau_missions2.php'>retour visualisation missions</a>
</body>
</html>
