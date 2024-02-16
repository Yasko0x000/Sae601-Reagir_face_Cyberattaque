# Titre : WebHacker-LFI-01

# Catégorie : WEB

## Équipe : WEB

## Personnes : Christophe G-A, Marius V

## Description - Énoncé :

La légende raconte qu'un espace de type sandbox serait présent.

# Solution :

On arrive sur une page permettant d’afficher des messages mais en réalité elle permet l'exécution de code notamment de php (bloque les balises script et l'exécution de commandes serveur)
ici l’objectif est de lister les fichiers du dossier courant et d’afficher le contenu de password.php et ce avec des commandes php, il suffit de rentrer celles ci :
<?php echo join("\\n", array_diff(scandir('.'), ['.', '..'])); ?>
puis
<?php echo file_get_contents("password.txt"); ?>

et ce tout en les affichant via un echo

# URL de connexion : ...../vr06/

# flag : WpUrGood

# Docker (Merci de commenter votre Dockerfile):

- [x] oui :
  - Explication du fonctionnement du docker : "docker-compose"
- [ ] non