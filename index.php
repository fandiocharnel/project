<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/connexion.css">
    <title>login</title>
</head>
<body>
    <div class="connect">
        <h2>Job Offer</h2>
        <fieldset>
            
            <legend> Connexion</legend>
             <form method="POST" action="controlleur/connexionControlleur.php">
                <p>
                    <label for="nom">USERNAME</label><br><br>
                    <input type="text" name="login" autocomplete="off"><br><br>
                </p>
               
                <p>
                    <label for="">PASSWORD</label><br><br>
                    <input type="password" name="password"><br><br>
                </p>

            <input type="submit" value="Connexion" class="btn"> 
             </form>  
           
            
        </fieldset>
        <a href="#" style="text-decoration: none; margin-left: 49%; font-size: 20px;  font-family: 'comic sans ms',verdana, sans-serif;

    color: rgb(76, 91, 94);">Je souhaite etre ajouter comme utilisateur</a>
    </div>
</body>
</html>