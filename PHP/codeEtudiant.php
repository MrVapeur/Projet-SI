<!doctype php>
<?php
	//Connexion à la base de données
	include('connexion.php');

	//Récupération du code
	$code=$_POST['code'];

	//Récupération du nom du cours
	$cours=$_GET['cours'];

	//Récupération du nom du cours
	$nom=$_GET['nom'];

	//Vérification du fait que le code soit bon
	$Query = "SELECT * FROM professeur WHERE `code`='$code'";
	$Result = $Connect->query($Query); 

	if ($Data = mysqli_fetch_array($Result)) 
	{	
		//Mise à jour de la présence de l'étudiant au cours
		$Query ="UPDATE $cours SET `present`=true WHERE `nom`='$nom'";
		$Result = $Connect->query($Query);

		echo "Présence validée pour $nom </br></br>";
		
	}
	else{

			echo "<br/>Code erroné<br/>";	

			//En cas d'erreur, le formulaire pour rentrer le code est renvoyé
			echo "<form action='codeEtudiant.php?nom=$nom&cours=$cours' method='post'><p>";
			echo "<label>Code :</label>
		        <input name='code' id='code' type='text'/>
		        <br/><br/>";
			echo "<input type='submit' value='Validation'/></p></form>"; 
		}

	//Déconnexion à la base de données
	mysqli_close($Connect);
?> 