<?php
session_start();

$message = "";
$flag_message = ""; //Une variable pour stocker le message de vérification du flag

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Cette ocndition vérifie si les données de connexion ont été soumises
    if (isset($_POST['username']) && isset($_POST['password'])) {
        //Récupére les données du formulaire
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Connexion à la base de données
        $host = "db";
        $db_user = "root";
        $db_password = "root";
        $db_name = "ctf";
	sleep(10);// j'ai ajouté un délai de 10 secondes pour contourner un problème de la base de données.
        $conn = new mysqli($host, $db_user, $db_password, $db_name);

        //Vérification de la connexion
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        //Requête SQL vulnérable à l'injection
        $query = "SELECT * FROM utilisateurs WHERE username = '$username' AND password = '$password'";

        //Exécution de la requête
        $result = $conn->query($query);
       
        //Vérification des résultats
        if ($result->num_rows > 0) {
            $message = "Bien joué ! Vous avez réussi à vous connecter.";
            //On affiche les résultats de la requête
            $message .= "<br>Voici les données de la table 'utilisateurs' :";
            $message .= "<table><tr><th>Username</th><th>Password</th></tr>";
            while ($row = $result->fetch_assoc()) {
                $message .= "<tr><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td></tr>";
            }
            $message .= "</table>";

        } else {
            // Si aucun résultat n'est trouvé, c'est juste un échec de connexion normal
            $message = "Échec de la connexion.";
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge SQL</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .message {
            border: none; /*code que j'ai préféré ajouter pour supprimer les bordures */
            padding: 0; /* idem, pour supprimer le rembourrage */
        }
    </style>
</head>
<body>
    <h1>Challenge SQL</h1>

    <div class="container">
        <form method="post" class="login-form">
            <div class="form-group">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn">Se Connecter</button>
        </form>

        <div class="message">
            <p><?php echo $message; ?></p>
        </div>
        
    </div>
</body>
</html>
