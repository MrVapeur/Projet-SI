<!doctype php>


<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Attendance Checker</title>
    <meta name="description" content="Etudiant">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body class="text-center">

<?php

    //Récupération du nom de l'étudiant
    $nom=$Data[0];

    //Récupération du cours de l'utilisateur en fonction de l'heure actuelle
    $hour = date('G:i');

    $Query = "SELECT * FROM $Data[0] WHERE debut < '$hour' and fin > '$hour'";

    $Result = $Connect->query($Query);

    echo "<div>";
        
        if ($Data = mysqli_fetch_array($Result))
        {
            echo "<h1>Prochain cours</h1>";
            echo "<p>$Data[0] - $Data[1]</p>";
            echo "<p>$Data[2]</p>";
            echo "<p>$Data[3]</p>";
            echo "<p>$Data[4]</p>";
        }
        else
        {
            echo "Pause";
        }
    
    echo "</div>";
        
    //Formulaire pour rentrer le code
    echo "<form action='codeEtudiant.php?nom=$nom&cours=$Data[2]' method='post'>";
        echo"<p>";
            echo "<label>Code :</label>";
            echo "<input name='code' id='code' type='text'/>";
            echo "<input type='submit' value='Validation'/>";
        echo"</p>";
    echo"</form>"; 
?>

</body>

</html>
