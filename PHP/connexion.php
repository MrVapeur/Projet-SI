<?php 
	//paramètres de connexion à la base de données
	$Server="localhost";
	$User="root";
	$Pwd="";
	$DB="microprojet";

	//connexion au serveur où se trouve la base de données
	$Connect = mysqli_connect($Server, $User, $Pwd, $DB);

	//affichage d’un message d’erreur si la connexion a été refusée
	if (!$Connect)
	 echo "Connexion à la base impossible";
?>
