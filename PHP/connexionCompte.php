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
		include('etudiant.php');
	}

	
	else{

		//Si l'utilisateur n'est pas un étudiant, on teste si il est un professeur
		$Query = "SELECT * FROM professeur WHERE `identifiant`='$id' AND `mdp`='$mdp'";
		$Result = $Connect->query($Query); 

		if ($Data = mysqli_fetch_array($Result)) 
		{	
            include('prof.php');
        }

		else
		{
			include('echec.php');
		}
	}

	//Déconnexion à la base de données
	mysqli_close($Connect);
?>