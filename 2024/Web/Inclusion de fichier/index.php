<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- pour les telephones -->
<title>Upload de fichiers</title>
<link rel="stylesheet" href="style.css"> <!-- Lien vers le style CSS externe -->
</head>
<body>
<div class="container">
    <h1 class="title">Upload de fichiers</h1>
    <p class="instructions">Inclure un fichier...</p> <!-- Instructions pour inclure un fichier -->
    <form action="" method="post" enctype="multipart/form-data" class="form" id="includeForm"> <!-- Début du formulaire avec enctype pour les fichiers -->
    <!--enctype="multipart/form-data" nous permet de spécifier comment les données du formulaire doivent être encodées et envoyées au serveur lorsque le type de contenu des données inclut des fichiers binaires, tels que des images, des fichiers audio ou vidéo, etc.-->
        <label for="fileName">Entrez le nom du fichier:</label><br> <!-- Étiquette du champ de saisie du nom de fichier -->
        <input type="text" id="fileName" name="fileName" placeholder="Nom du fichier à inclure" class="input"><br><br> <!-- Champ de saisie pour le nom de fichier -->
        <p> Ou </p> <!-- Texte indiquant une alternative -->
        <label for="fileToInclude">Sélectionnez un fichier depuis votre PC:</label><br> <!-- Étiquette du champ pour le téléchargement de fichier -->
        <input type="file" id="fileToInclude" name="uploadedFile" class="input"><br><br> <!-- Champ pour télécharger un fichier (voir https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/file)-->
        <button type="submit" name="submit" class="button">Inclure</button> <!-- Bouton pour soumettre le formulaire -->
    </form>
    <?php
    if (isset($_GET['page'])) { // Vérifie si un paramètre 'page' est défini dans l'URL
        $page = $_GET['page']; // Récupère la valeur du paramètre 'page'
        if ($page === 'flag.php') { // Si le paramètre 'page' est 'flag.php'
            include($page); // Inclut le fichier 'flag.php'
            exit;
        }
    }    
    if(isset($_POST['submit'])) { // Vérifie si le formulaire est soumis
        if (!empty($_POST['fileName'])) { // Vérifie si un nom de fichier est spécifié
            $page = $_POST['fileName']; // Récupère le nom du fichier depuis le champ texte
            if (file_exists($page)) { // Vérifie si le fichier existe
                include($page); // Inclut le fichier
            } else {
                // Piège : Fichier non trouvé
                echo "<p class='error'>Fichier non trouvé.</p>"; // Affiche un message d'erreur
            }
        } elseif (!empty($_FILES['uploadedFile']['name'])) { // Vérifie si un fichier est téléchargé (visitez cela pour bien comprendre : https://www.php.net/manual/en/reserved.variables.files.php)
            // Si un fichier est téléchargé
            $targetDir = "./uploads/"; // Répertoire de destination pour les fichiers téléchargés
            $targetFile = $targetDir . basename($_FILES["uploadedFile"]["name"]); // Chemin complet du fichier téléchargé
            $uploadOk = 1; // Variable de contrôle pour le téléchargement du fichier
            $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION)); // Type de fichier

            // Check if file already exists
            if (file_exists($targetFile)) { // Vérifie si le fichier existe déjà
                echo "<p class='error'>Désolé, le fichier existe déjà.</p>"; // Affiche un message d'erreur
                $uploadOk = 0; // Met à jour la variable de contrôle pour le téléchargement
            }

            // Check file size
            if ($_FILES["uploadedFile"]["size"] > 500000) { // Vérifie la taille du fichier téléchargé
                echo "<p class='error'>Désolé, le fichier est trop volumineux.</p>"; // Affiche un message d'erreur
                $uploadOk = 0; // Met à jour la variable de contrôle pour le téléchargement
                //Par exemple, avant de télécharger un fichier, le script peut effectuer des vérifications telles que la taille maximale autorisée du fichier, 
                //le type de fichier autorisé, ou d'autres conditions spécifiques. Si l'une de ces vérifications échoue, la variable $uploadOk peut être définie 
                //sur 0 pour indiquer que le téléchargement ne doit pas être effectué.
            }

            // Allow certain file formats
            if($fileType !== "php") { // Vérifie le type de fichier téléchargé
                echo "<p class='error'>Seuls les fichiers PHP sont autorisés.</p>"; // Affiche un message d'erreur
                $uploadOk = 0; // Met à jour la variable de contrôle pour le téléchargement
            }

            // Verifie si $uploadOk est sur 0
            if ($uploadOk == 0) { // Vérifie si le téléchargement du fichier est autorisé (si 0, donc c'est pas autorisé)
                echo "<p class='error'>Désolé, le fichier n'a pas été téléchargé.</p>"; // Affiche un message d'erreur
            } else {
                if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetFile)) { // Déplace le fichier téléchargé vers le répertoire de destination (où les fichiers téléchargés seront stockés sur le serveur après leur téléchargement)
                    include($targetFile); // Inclut le fichier téléchargé
                } else {
                    echo "<p class='error'>Désolé, une erreur s'est produite lors du téléchargement du fichier.</p>"; // Affiche un message d'erreur
                }
            }
        }
    }
    ?>
</div>

<!-- Script JavaScript pour la manipulation de l'URL -->
<script>
document.getElementById("includeForm").addEventListener("submit", function(event) { // Ajoute un écouteur d'événements pour le formulaire (afin de détecter l'événement de soumission du formulaire)
    var fileName = document.getElementById("fileName").value; // Récupère la valeur du champ de saisie du nom de fichier
    if (fileName !== "") { // Vérifie si un nom de fichier est spécifié
        // Mettre à jour l'URL avec le nom du fichier (cela va aider les challenger à comprendre qu'une des possibilité est d'inclure le fichier directement par l'url)
        var newUrl = window.location.origin + window.location.pathname + "?page=" + encodeURIComponent(fileName); // Crée une nouvelle URL avec le paramètre 'page'
        history.pushState(null, null, newUrl); // Met à jour l'URL dans l'historique du navigateur
    }
});
</script> 
</body>
</html>
