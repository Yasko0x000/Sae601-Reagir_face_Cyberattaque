<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local File Inclusion Challenge</title>
</head>
<body>
    <h1>Local File Inclusion Challenge</h1>
	<p> allez dans le home </p>
    <?php
    // Récupérer le paramètre "page" de l'URL, sinon la variable page prend la valeur de home
    $page = $_GET['page'] ?? 'home';

    // Inclure le contenu de la page demandée
    include($page . '.php');
    ?>
</body>
</html>

