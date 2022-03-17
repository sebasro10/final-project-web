<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width">
<title>Visualisation_missions</title>
</head>
<body>
<h1>Missions</h1>

<table border="1" bgcolor="#ccccff" frame="above">
 <tbody>
    <tr>

<td>Nom</td>
<td>Statut</td>
<td>Actions</td>
</tr>
<?php

include("../db/db-functions.php");
include_once("../db/config.php");

$pdo = connect();
$sql="SELECT * FROM missions";
        //Interact with database
$pdoStatement = $pdo->query($sql);
while ($row = $pdoStatement->fetch()){ ?> <tr><td><?php
	echo $row['name'] ?></td>
	<td> <?php echo $row['status'] ?></td>
	<td>
		<button id = "visualiser" name="visualiser" onclick = "location.href = 'à changer.php';">visualiser</button>
		<button id = "cloturer" name="cloturer" onclick = "<?php cloturer($row['id_mission']) ?>">cloturer</button>
		<button id = "modifier" name="modifier" 
			onclick = "location.href = 'modification_mission.php?nom=<?php echo $row['name'] 
			?>&lieu=<?php echo $row['place'] 
			?>&debut=<?php echo $row['start_date'] 
			?>&fin=<?php echo $row['end_date'] 
			?>&description=<?php echo $row['description']
			?>&id_mission=<?php echo $row['id_mission'] ?>';">modifier</button>
		<button id = "supprimer" name="supprimer" onclick = "<?php supprimer($row['id_mission']) ?>">supprimer</button>
	</td>
	</tr><?php }
disconnect($pdo);
?>

</tbody>
</table>

<button onclick = "location.href = 'formulaire_mission2.php';">Nouvelle Mission</button>

</body>
</html>
