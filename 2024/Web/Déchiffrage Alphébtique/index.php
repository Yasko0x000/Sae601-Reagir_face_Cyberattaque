<?php
//Le flag déchiffré
$flag_dechiffre = "secretflag";

//Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Récupérer la valeur saisie par l'utilisateur
    $guess = $_POST["guess"];
    //Vérifie si la supposition de l'utilsateur correspond au flag déchiffré
    if ($guess === $flag_dechiffre) {
        $result_message = "Félicitations ! Tu as trouvé le bon flag.";
    } else {
        $result_message = "Désolé, la réponse est incorrecte.";
    }
} else {
    //Si le formulaire n'a pas été soumis, initialiser le message résultant
    $result_message = "";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge de Déchiffrement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .secret-message {
            content: "tfdsfugmbh";
            display: none;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Challenge de Déchiffrement</h1>
        <p>Votre mission : déchiffrer le message caché pour obtenir le bon flag.</p>

        <form method="post">
            <label for="guess">Vérifie ta réponse :</label>
            <input type="text" id="guess" name="guess" required>
            <button type="submit">Vérifie</button>
        </form>
        <!-- Si tu as trouvé le message caché à déchiffrer, tu voudras peut être un indice.
        le bon flag est caché à chaque n-1. --> 
        <p><?php echo $result_message; ?></p>
    </div>
</body>
</html>
