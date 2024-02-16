<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouvez le mot de passe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            max-width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }

        .success-message {
            color: green;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Trouvez le mot de passe</h2>
    <form action="" method="post">
        <input type="password" placeholder="Mot de passe" name="password" required>
        <br>
        <button type="submit">Se connecter</button>
        <?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer le mot de passe soumis par l'utilisateur
            $password = $_POST['password'];

            // Lire les mots de passe du fichier
            $file_path = "mots_de_passe.txt";
            $correct_passwords = file($file_path, FILE_IGNORE_NEW_LINES);

            // Vérifier si le mot de passe soumis par l'utilisateur est correct
            if (in_array($password, $correct_passwords)) {
                // Mot de passe correct
                echo '<p class="success-message">Bien joué!</p>';
            } else {
                // Mot de passe incorrect
                echo '<p class="error-message">Erreur : mot de passe incorrect.</p>';
            }
        }
        ?>
    </form>
</div>

</body>
</html>
