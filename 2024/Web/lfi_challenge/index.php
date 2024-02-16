<?php
    // Vérifiez si le formulaire de mot de passe a été soumis via la méthode POST et si le champ du mot de passe est défini
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['CTF'])) {
        $submittedPassword = $_POST['CTF']; // le mot de passe soumis est stocké dans la variable
        $correctPassword = 'CTF'; // Changez ceci par le mot de passe correct

        // Vérifiez si le mot de passe soumis est correct
        if ($submittedPassword === $correctPassword) {
            // Si correct, redirige vers la page d'indice
            echo '<p>Le mot de passe est juste ! </p>';
        } else {
            echo '<p>Mot de passe incorrect. Réessayez.</p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LFI Challenge</title>
</head>
<body>
    <h1>LFI Challenge</h1>
    <p>Bienvenue sur le site web ! Pouvez-vous trouver le drapeau caché ?</p>

    <div id="content">

    </div>

    <!-- Formulaire de mot de passe -->
    <form method="post">
        <label for="CTF">Enter the password:</label>
        <input type="password" name="CTF" required>
        <input type="submit" value="Submit">
	<!-- a198d5eca254b46e9d6a549000e46836 -->
    </form>
</body>
</html>
