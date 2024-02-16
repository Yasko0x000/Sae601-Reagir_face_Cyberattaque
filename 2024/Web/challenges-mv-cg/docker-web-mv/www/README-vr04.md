# Titre : Investigator-01

# Catégorie : WEB

## Équipe : WEB

## Personnes : Christophe G-A, Marius V

## Description - Énoncé :

Vous êtes sur une page visiblement inutile. La légende raconte que l'admin est passé par là.

# Solution :

On arrive sur une page ouverte en temps que .../vr04/index.php?file=user.php , on peut rien y faire sauf changer la valeur de ?file Il faut pense que si il y a une page "user.php" il doit y avoir une page "admin.php", un fois connecté sur cette page on peut voir qu'elle a pour but de faire un test de latence via un "ping", or on peut tout a fait exécuter d'autres commande telle qu'un "ls", il y a des filtres mais l'objectif est de faire un "ls" et de voir une fichier étrage nommé "p" on ne peut pas faire un "cat p" donc on doit aller sur la page index.php?file=p on peut voir le flag.

début fixe de la commande : ping -c 5 <suite> ("-c 5" pour limiter les nombre de ping a 5) texte a rentrer pour réaliser le challenge : 127.0.0.1 & ls (n'importe quelle adresse ip est possible) commande exécutée : ping -c 5 127.0.0.1 & ls

# URL de connexion : ...../vr04/index.php?file=user.php

\#attention il faut enlever ce fichier readme.txt ou il pourra etre lu pas un challenger

# flag : FLAG-SalutATous

# Docker (Merci de commenter votre Dockerfile):

- [x] oui :
  - Explication du fonctionnement du docker : "docker-compose"
- [ ] non