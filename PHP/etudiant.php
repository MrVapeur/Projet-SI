<!doctype php>


<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Attendance Checker</title>
    <meta name="description" content="Etudiant">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body class="text-center etu">
    
    
    <div class='container-fluid'>
    
        <div class="row">
            <img class="mb-4 span6" style="float: none; margin: 0 auto; padding : 60px; " src="../img/White.png" alt="">
        </div>

    <?php

    //Récupération du nom de l'étudiant
    $nom=$Data[0];

    //Récupération du cours de l'utilisateur en fonction de l'heure actuelle
    $hour = date('G:i');

    $Query = "SELECT * FROM $Data[0] WHERE debut < '$hour' and fin > '$hour'";

    $Result = $Connect->query($Query);

        echo "<div class='row justify-content-center'>";
            echo "<div class='col-3'>";

                if ($Data = mysqli_fetch_array($Result))
                {
                    echo "<h1>Prochain cours</h1>";
                    echo "<br />";
                    echo "<p>$Data[0] - $Data[1]</p>";
                    echo "<br />";
                    echo "<p>$Data[2]</p>";
                    echo "<br />";
                    echo "<p>$Data[3]</p>";
                    echo "<br />";
                    echo "<p>$Data[4]</p>";
                    echo "<br />";
                }
                else
                {
                    echo "Pause";
                }

            echo "</div>";
            echo "<div class='col-3'>";
                echo "<div>";

                //Formulaire pour rentrer le code
                echo "<form action='codeEtudiant.php?nom=$nom&cours=$Data[2]' method='post'>";
                    echo"<p>";
                        echo "<label>Code :</label>";
                        echo "<br />";
                        echo "<input class='form-control' name='code' id='code' type='text' placeholder='Code de session' required/>";
                        echo "<button class='btn btn-lg btn-primary bt-block' type='submit'>Valider sa présence</button>";
                echo"</form>"; 
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
?>

</body>

</html>