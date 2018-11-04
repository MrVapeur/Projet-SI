<!doctype php>
<?php
	//Connexion à la base de données
	include('connexion.php');

	//Récupération du nom du cours
	$cours=$_GET['cours'];

	//Sélection du cours
	$Query = "SELECT * FROM $cours ";
	$Result = $Connect->query($Query); 

	echo "Veuillez sélectionner les élèves présents qui n'ont pas pu s'identifier ";
	
	//Formulaire pour sélectionner les élèves a marquer présent
	echo "<form action='appelManuelValidation.php?cours=$cours' method='post'><p>";
		echo "<select name='etudiantsPresents[]' multiple>";
		while ($Data = mysqli_fetch_array($Result)) 
		{	
			echo "<option>$Data[0]</option>";
		}
		echo "</select></br></br>";
		echo "<input type='submit' value='Validation'/></p></form>"; 

	//Déconnexion à la base de données
	mysqli_close($Connect);
?> 