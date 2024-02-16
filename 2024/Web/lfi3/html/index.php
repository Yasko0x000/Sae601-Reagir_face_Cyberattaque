<!-- html/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local File Inclusion Challenge</title>
</head>
<body>
    <h1>Local File Inclusion Challenge</h1>

    <ul> // On créer des liens vers les différents fichiers
        <li><a href="?file=home.php">Home</a></li>
        <li><a href="?file=about.php">About</a></li>
        <li><a href="?file=contact.php">Contact</a></li>
    </ul>

    <?php
// On vérifie si le paramètre 'file' est présent dans la requête GET. Cela signifie que le nom du fichier à inclure sera spécifié dans l'URL
    if (isset($_GET['file'])) {
        $requestedFile = $_GET['file'];

        // Sécurisez l'accès aux fichiers pour éviter une LFI non désirée
        $allowedFiles = ['home.php', 'about.php', 'contact.php', 'secret/admin.txt'];

// On vérifie si le fichier demandé (spécifié dans le paramètre 'file' de la requête GET) fait partie des fichiers autorisés. Si c'est le cas, il charge et affiche le contenu du fichier.
        if (in_array($requestedFile, $allowedFiles)) {

// Charger et afficher le contenu du fichier, DIR représente le chemin absolu du répertoire du fichier PHP en cours d'exécution, $requestedFile contient le nom du fichier demandé qui a été spécifié dans la requête GET.
            $fileContent = file_get_contents(__DIR__ . '/' . $requestedFile);
            echo '<pre>' . htmlspecialchars($fileContent, ENT_QUOTES, 'UTF-8') . '</pre>';
        } else {
            echo 'Accès non autorisé.';
        }
    }
    ?>
</body>
</html>
