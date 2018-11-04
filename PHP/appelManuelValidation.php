<!doctype php>
<?php
	//Connexion à la base de données
	include('connexion.php');

	//Récupération du nom du cours
	$cours=$_GET['cours'];

	//Récupération de la liste d'étudiants dont la présence doit être validée
	foreach ($_POST['etudiantsPresents'] as $value) {
		
		//Sélection de l'étudiant dans le cours
		$Query = "SELECT * FROM $cours WHERE `nom`='$value'";
		$Result = $Connect->query($Query); 

		if ($Data = mysqli_fetch_array($Result)) 
		{	
			//Mise à jour de la présence de l'étudiant au cours
			$Query ="UPDATE $cours SET `present`=true WHERE `nom`='$value'";
			$Result = $Connect->query($Query);

			echo "Présence validée pour $value </br></br>";
		}	
	}

	//Déconnexion à la base de données
	mysqli_close($Connect);
?> 