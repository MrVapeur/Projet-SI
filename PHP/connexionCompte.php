<!doctype php>
<?php
	//Connexion à la base de données
	include('connexion.php');

	//Récupération de l'identifiant et du mdp
	$id=$_POST['id'];
	$mdp=$_POST['mdp'];

	//Test pour savoir si l'utilisateur est un étudiant
	$Query = "SELECT * FROM etudiant WHERE `identifiant`='$id' AND `mdp`='$mdp'";
	$Result = $Connect->query($Query); 

	if ($Data = mysqli_fetch_array($Result)) 
	{	
		//Récupération du nom de l'étudiant
		$nom=$Data[0];

		//Récupération du cours de l'utilisateur en fonction de l'heure actuelle
		$hour = date('G:i');
		$Query = "SELECT * FROM $Data[0] WHERE debut < '$hour' and fin > '$hour'";
		$Result = $Connect->query($Query);
		if ($Data = mysqli_fetch_array($Result))
		{
			echo "Prochain cours<br/>";
			echo "$Data[0] - $Data[1]<br/>";
			echo "$Data[2]<br/>$Data[3]<br/>$Data[4]<br/>";
		}
		else
		{
			echo "Pause";
		}

		//Formulaire pour rentrer le code
		echo "<form action='codeEtudiant.php?nom=$nom&cours=$Data[2]' method='post'><p>";
			echo "<label>Code :</label>
		        <input name='code' id='code' type='text'/>
		        <br/><br/>";
			echo "<input type='submit' value='Validation'/></p></form>"; 
	}

	
	else{

		//Si l'utilisateur n'est pas un étudiant, on teste si il est un professeur
		$Query = "SELECT * FROM professeur WHERE `identifiant`='$id' AND `mdp`='$mdp'";
		$Result = $Connect->query($Query); 

		if ($Data = mysqli_fetch_array($Result)) 
		{		
			//Récupération du nom du professeur
			$nom=$Data[0];

			//Récupération du cours de l'utilisateur en fonction de l'heure actuelle
			$hour = date('G:i');
			$Query = "SELECT * FROM $Data[0] WHERE debut < '$hour' and fin > '$hour'";
			$Result = $Connect->query($Query);

			if ($Data = mysqli_fetch_array($Result))
			{
				echo "Prochain cours<br/>";
				echo "$Data[0] - $Data[1]<br/>";
				echo "$Data[2]<br/>$Data[3]<br/>$Data[4]<br/>";
			}
			else
			{
				echo "Pause";
			}

			//Formulaire pour créer un nouveau code et mettre la présence des étudiants à false
			echo "<form action='code.php?nom=$nom&cours=$Data[2]&code=0000' method='post'><p>";
			echo "<input type='submit' value='Creation du code'/></p></form>";

			//Formulaire pour afficher le nombre d'absences de chaque élève au cours actuel 
			echo "<form action='affichageAbsences.php?cours=$Data[2]' method='post'><p>";
			echo "<input type='submit' value='Affichage absences'/></p></form>";

			//Formulaire pour passer en mode appel manuel
			echo "<form action='appelManuel.php?cours=$Data[2]' method='post'><p>";
			echo "<input type='submit' value='Appel manuel'/></p></form>";

		}

		else
		{
			echo "<br/>Identifiant ou mot de passe erroné. Veuillez réessayer.<br/>";

			//En cas d'erreur de connexion, renvoi du formulaire de connexion
			echo "<form action='connexionCompte.php' method='post'><p>";
			echo "<label>Identifiant :</label>
		        <input name='id' id='id' type='text'/>
		        <br/><br/>";
			echo "<label>Mot de passe :</label>
		        <input name='mdp' id='mdp' type='text'/>
		        <br/><br/>";
			echo "<input type='submit' value='Connexion'/></p></form>"; 
		}
	}

	//Déconnexion à la base de données
	mysqli_close($Connect);
?> 