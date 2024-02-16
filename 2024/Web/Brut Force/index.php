<?php
session_start(); // Debut session PHP

$users = array(
    'barbeq' => 'sauce' // Définit un tableau associatif avec des noms d'utilisateur et mots de passe correspondants
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Vérifie si le formulaire a été soumis en méthode POST
    $username = $_POST['username']; // Récupère le nom d'utilisateur depuis le formulaire
    $password = $_POST['password']; // Récupère le mot de passe depuis le formulaire

    if (isset($users[$username]) && $users[$username] === $password) { // Vérifie si le nom d'utilisateur et le mot de passe correspondent
        echo "<p class='success'>Connexion réussie! Le flag est : BRUTEFORCE_Akatsuki_CTF_SUCCESS</p>"; // Affiche un message de succès
        exit;
    } else {
        echo "<p class='error'>Identifiants de connexion incorrects. Veuillez réessayer.</p>"; // Affiche un message d'erreur
        $_SESSION['attempts'] = isset($_SESSION['attempts']) ? $_SESSION['attempts'] + 1 : 1; // Incrémente le nombre de tentatives de connexion dans la session (si plus de 3 ca affiche une erreur)

        if ($_SESSION['attempts'] >= 3) { // Vérifie si le nombre de tentatives dépasse 3
            echo "<p class='error'>Trop de tentatives. Attendez un moment avant de réessayer.</p>"; // Affiche un message d'erreur
            exit;
        }
    }
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- pour les telephones -->
<title>Connexion</title>
<link rel="stylesheet" href="style.css"> <!-- Lien vers le style CSS externe -->
</head>
<body>
<div class="container">
    <h2 class="title">Connexion</h2>
    <form action="" method="post" class="form"> <!-- Début du formulaire avec méthode POST -->
        <label for="username">Nom d'utilisateur:</label><br> <!-- Étiquette du champ de saisie du nom d'utilisateur -->
        <input type="text" id="username" name="username" required class="input"><br> <!-- Champ de saisie pour le nom d'utilisateur -->
        <br>
        <label for="password">Mot de passe:</label><br> <!-- Étiquette du champ de saisie du mot de passe -->
        <input type="password" id="password" name="password" required class="input"><br><br> <!-- Champ de saisie pour le mot de passe -->
        <input type="submit" value="Se connecter" class="button"> <!-- Bouton pour soumettre le formulaire -->
    </form>
</div>
</body>
</html>