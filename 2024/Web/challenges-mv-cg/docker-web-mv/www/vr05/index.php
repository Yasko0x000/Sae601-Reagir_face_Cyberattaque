<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./../style.css" media="all">
    <title>Cookie-Jar-XSS</title>
</head>
<body>
<?php include('../template.php'); ?>

<div class="content">
    <form id="loginForm" action="index.php" class="input">
        <input type="text" name="message" placeholder="Message" class="textin">
        <button type="submit" class="conn"><img src="../pj/arrow_forward.png"></button>
    </form>

    <?php
    $filePath = 'messages.txt'; // Chemin vers votre fichier de messages

    // Vérifier si le paramètre 'admin=erase' est présent dans l'URL


    // Traitement de soumission de formulaire
    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['message'])) {
        $message = $_GET['message'] . "\n";
        file_put_contents($filePath, $message, FILE_APPEND | LOCK_EX);
    }

    // Lire et afficher les messages
    if (file_exists($filePath)) {
        $messages = file_get_contents($filePath);
        echo "<pre class='marged'><b>$messages</b></pre>";
    }

        if (isset($_GET['admin']) && $_GET['admin'] == 'erase') {
        // Effacer le contenu du fichier
        file_put_contents($filePath, '');
        echo "<p>Messages effacés.</p>";
    }
    ?>
</div>

</body>
</html>
