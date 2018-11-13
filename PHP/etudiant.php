<!doctype php>
<?php

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
    echo "<form action='codeEtudiant.php?nom=$nom&cours=$Data[2]' method='post'><p>";			echo "<label>Code :</label>
            <input name='code' id='code' type='text'/>
            <br/><br/>";
    echo "<input type='submit' value='Validation'/></p></form>"; 

?>