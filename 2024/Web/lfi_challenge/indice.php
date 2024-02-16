<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LFI Challenge - Indice</title>
</head>
<body>
    <h1>LFI Challenge - Indice</h1>
    <p>Félicitations ! Vous avez réussi à accéder à la page avec l'indice.</p>
    <p>Indice : Le chemin du flag est caché quelque part dans le système. Il faut trouver la SOLUTION.</p>

<?php
// Obtenez le répertoire courant
$currentDirectory = __DIR__;

// Utilisez la technique ?files=.. pour remonter d'un répertoire, on vérifie si le paramètre GET 'files' est définie
$parentDirectory = isset($_GET['files']) ? $_GET['files'] : '';

// Construisez le chemin du fichier flag.php
// $flagFilePath = realpath($currentDirectory . 'soluflag.php');

// Vérifiez si le fichier flag.php existe avant de l'inclure, si il existe, il est exectué 
if (file_exists($parentDirectory)) {
     include($parentDirectory);

} else {
    echo 'Flag not found.';
}
?>

</body>
</html>
