<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
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
    <script>
        function checkPassword() {
            var password = document.getElementById("password").value;
            var hashedPassword = sha256(password);
            if (hashedPassword === "eb1b2cccc58c6ef847e7c2bab39bf21985cbfbfc538c6e5cbd1adb87c54413db") {
                document.getElementById("message").innerHTML = "Bien joué!";
                document.getElementById("message").className = "success-message";
            } else {
                document.getElementById("message").innerHTML = "Erreur : mot de passe incorrect.";
                document.getElementById("message").className = "error-message";
            }
        }
    </script>
</head>
<body>

<div class="login-container">
    <h2>Trouvez le mot de passe</h2>
    <input type="password" id="password" placeholder="Mot de passe" autocomplete="on" required>
    <br>
    <button type="button" onclick="checkPassword()">Se connecter</button>
    <p id="message" class="error-message"></p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js"></script>

</body>
</html>
