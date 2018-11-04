<!doctype php>
<?php
	//Connexion à la base de données
	include('connexion.php');

	//Récupération du nom du cours
	$cours=$_GET['cours'];

	//Récupération du nom du professeur
	$nom=$_GET['nom'];

	//Ajout d'une absence aux étudiants qui étaient absents au dernier cours
	$Query ="UPDATE $cours SET `nbAbsences`= 1 WHERE `present`=false";
	$Result = $Connect->query($Query);
	

	//Mise de la présence des étudiants à false
	$Query ="UPDATE $cours SET `present`=false WHERE 1";
	$Result = $Connect->query($Query);
	
	//A ajouter : création du code !
	$Query ="UPDATE professeur SET `code`=0000 WHERE `nom`=$nom";
	$Result = $Connect->query($Query);


	//Affichage du code pour le professeur
	echo "code = 0000";

	//Déconnexion à la base de données
	mysqli_close($Connect);
?> 