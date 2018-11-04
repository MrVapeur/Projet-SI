<!doctype php>


<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Attendance Checker</title>
    <meta name="description" content="Page accueil">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body class="text-center">

    <div class="container">
        <div class="row">
            <img class="mb-4 span6" style="float: none; margin: 0 auto;" src="../img/White.png" alt="">
        </div>
        <div class="row">

            <?php
	//Connexion à la base de données
	include('connexion.php');


	//Formulaire de connexion de l'utilisateur 
        
        echo "<form class='form-signin' action='connexionCompte.php' method='post'><p>";
            
            echo "<h1 class='h3 mb-3 font-weight-normal'>Identifiez vous ici</h1>";
            echo "<label for='inputEmail' class='sr-only'>Identifiant</label>";
            echo "<input type='text' name='id' id='id' class='form-control' placeholder='Identifiant' required autofocus/>";
            echo "<label for='inputPassword' class='sr-only'>Mot de passe :</label>";
            echo "<input name='mdp' id='mdp' type='password' class='form-control' placeholder='Mot de passe' required/>";
            echo " <div class=checkbox mb-3'>
                        <label>
                            <input type='checkbox' value='remember-me'> Se souvenir de moi
                        </label>
                    </div>";
            echo "<button class='btn btn-lg btn-primary btn-block' type='submit'>Connexion</button>";
            
        echo "</form>"
?>

            <!--form class="form-signin"> [OK]
                   
                    <h1 class="h3 mb-3 font-weight-normal">Identifiez vous ici</h1> [OK] 
                    
                    <label for="inputEmail" class="sr-only">Email address</label>[OK]
                    
                    <input type="text" id="inputId" class="form-control" placeholder="Identifiant" required autofocus>[OK]
                    
                    <label for="inputPassword" class="sr-only">Password</label>[OK]
                    
                    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Se souvenir de moi
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                </form-->

        </div>
    </div>


    </body>

</html>
