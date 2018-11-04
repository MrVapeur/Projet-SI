<!doctype php>
<?php
	//Connexion à la base de données
	include('connexion.php');

	//Récupération du nom du cours
	$cours=$_GET['cours'];

	//Récupération des données du cours
	$Query = "SELECT * FROM $cours";
	$Result = $Connect->query($Query); 

	//Affichage du total d'absences des élèves au cours
	echo "<table>";
		echo "<tr><th>Nom</th><th>Prénom</th><th>Absences</th></tr>";
		while ($Data = mysqli_fetch_array($Result) ) 
		{	
			echo "<tr><td>$Data[0]</td><td>$Data[1]</td><td>$Data[3]</td></tr>";
		}
		echo "</table>";	

	mysqli_close($Connect);
?> 