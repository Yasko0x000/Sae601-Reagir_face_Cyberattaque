# Titre : Social Engineering

# Catégorie : Forensic

## Équipe : Forensic

## Personnes : Alexandre BEROT-ARMAND, Timothé BEAUVARLET

## Description - Énoncé :

Vous travaillez dans un labo de forensique et vous collaborez avec la police. Dans le cadre de votre travail, vous recevez les photos d'une clef déposée pour un relevé d'empreinte dans un autre labo et l'image copiée de la clé USB.

Un grand hackeur a bloqué tout le réseau de l'université avec un cryptovirus! On a retrouvé cette clef chez lui et la police sait que le mot de passe se trouve dessus. Trouvez le au plus vite !

# Solution :

Il faut monter l'image, faire une récupération du fichier Keepass qui ont été supprimés. Ouvrir le plus gros (des trois) et rentrer le bon mot de passe.
Pour ce mot de passe, il y a une aide sur une des photos de clef "ma femme et ma fille"
Il y a les dossiers perso pour aider avec des txt qui donnes des petites info:
Le nom de la femme et de la fille et les dates de naissances.
Le mot de passe est donc Audrey1990Emma2012

Juste derrière, il suffit de regarder le keepass pour trouver le flag directement.

# flag : MonsieurMichelotEStParfait(SaufSiOnAPas20)

# Docker (Merci de commenter votre Dockerfile):

- \[\] oui :
  - Explication du fonctionnement du docker : ""

- [x] non