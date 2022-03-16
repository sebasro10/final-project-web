
<?php

include_once("config.php");

function connect(){
	global $dsn, $root, $root_password;
    	$pdo = new PDO(
    		$dsn,
    		$root,
    		$root_password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $pdo;
}

function disconnect($pdo){

	if ($pdo) {
	$pdo = NULL ; 
	}  
}

function insert_mission($nom, $statut , $lieu, $date_debut, $date_fin, $description, $user){	
	$pdo = connect();
	$sql="INSERT INTO missions(`name`,`status`,`place`,`description`,`start_date`,`end_date`,`id_user`)
		VALUES (:nm, :st,:pl,:de,:sd,:ed,:usr)";
	$req= $pdo->prepare($sql);
	$nbResult=$req->execute(array('nm'=>$nom,'st'=>$statut,'pl'=>$lieu,'de'=>$description,'sd'=>$date_debut,'ed'=>$date_fin, 'usr'=>$user));
	disconnect($pdo);
}

function modifier_mission($nom, $statut , $lieu, $date_debut, $date_fin, $description, $user, $id_mission){
	$pdo = connect();
	$sql="UPDATE missions SET name = :nm, status = :st, place = :pl, description = :de, start_date = :sd, end_date = :ed, id_user = :usr
		WHERE id_mission = :mi";
	$req= $pdo->prepare($sql);
	$nbResult=$req->execute(['nm'=>$nom, 'st'=>$statut, 'pl'=>$lieu, 'de'=>$description,'sd'=>$date_debut,'ed'=>$date_fin, 'usr'=>$user, 'mi'=>$id_mission]);
	disconnect($pdo);
}

function supprimer($id_mission){
	$pdo = connect();
	$sql = "DELETE FROM missions WHERE id_mission = :mi";
	$req= $pdo->prepare($sql);
	$result = $req->execute(['mi'=>$id_mission]);
	disconnect($pdo);
}

function cloturer($id_mission){
	$pdo = connect();
	$sql="UPDATE missions SET status = :st
		WHERE id_mission = :mi";
	$req= $pdo->prepare($sql);
	$nbResult=$req->execute(['st'=>"cloturée", 'mi'=>$id_mission]);
	disconnect($pdo);
}




?>
