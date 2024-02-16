<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./../style.css" media="all">
    <link rel="stylesheet" type="text/css" href="./styleplus.css" media="all">
    <title>WebHacker-LFI-01</title>
</head>
<body>
<?php include('../template.php'); ?>

<div class="content">
    <div class="form-container">
    <form id="loginForm" action="index.php" method="get" class="input">
        <input type="hidden" name="action" value="add">
        <input type="text" name="message" placeholder="Message" class="textin">
        <button type="submit" class="conn"><img src="../pj/arrow_forward.png"></button>
    </form>

    <form id="deleteForm" action="index.php" method="get" class="input">
        <input type="hidden" name="action" value="delete">
        <button type="submit" class="conn">Delete</button>
    </form>
</div>

<h3 class="marged">Messages :</h3>
    <?php
$filePath = 'messages.txt'; 

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action'])) {
    if ($_GET['action'] == 'add' && !empty($_GET['message'])) {
        $message = $_GET['message'];

        // Vérifier la présence de balises <script> ou de commandes shell_exec, exec, system et passthru (permettant l'execution de commandes)
        if (preg_match('/<script\b[^>]*>(.*?)<\/script>/is', $message) || preg_match('/shell_exec\((.*?)\)/is', $message) || preg_match('/<script\b[^>]*>/is', $message) || preg_match('/system\((.*?)\)/is', $message) || preg_match('/passthru\((.*?)\)/is', $message) || preg_match('/exec\((.*?)\)/is', $message) || strpos($message, '/') !== false) {
            // Ne pas ajouter le message et générer une alerte
            echo "<script>alert('Le contenu du message est interdit. Les balises script, les \\'/\\' sont entre autres interdits.');</script>";

        } else {
            // Ajouter un saut de ligne et écrire le message dans le fichier
            $message .= "\n";
            file_put_contents($filePath, $message, FILE_APPEND | LOCK_EX);
        }
    } elseif ($_GET['action'] == 'delete') {
        file_put_contents($filePath, ''); // Effacer le contenu du fichier
    }
}

if (file_exists($filePath)) { //afficher le contenu du fichier message tout en permettant l'interpretation de son contenu php, javascript
            echo "<div class='marged'>";
            ob_start(); // Démarre la capture de la sortie
            include($filePath);
            $output = ob_get_clean(); // Récupère la sortie et arrête la capture
            echo nl2br($output); //laisser la mise en page au niveau de saut de lignes
            echo "</div>";
        }
?>


</div>
</body>
</html>