# Titre : 50 nuances de gris
# Catégorie : Forensic
## Équipe : Forensic
## Personnes : Alexandre BEROT-ARMAND, Timothé BEAUVARLET
## Description - Énoncé :

Vous travaillez dans un labo de forensique et vous collaborez avec la police. Dans le cadre de votre travail, vous recevez les photos d'une clef déposée pour un relevé d'empreinte dans un autre labo et l'image copiée de la clé USB.

L'equipe d'intervention était débordée et n'a pas réussi a déverrouiller la clef. A vous de trouver comment faire pour trouver le flag !

# Solution :

Encore une fois on monte l'image mais il faut le mot de passe qui se trouve.... sur une des photos de clé fournies avec le .img
On peut utiliser cryptsetup luksOpen pour déverrouiller l'img puis on la monte.
Le mot de passe est NoFBINoCIANoKGB

# flag : UneBarbeMagnifiqueEtSoyeuse
# Docker (Merci de commenter votre Dockerfile):
- [] oui :
    - Explication du fonctionnement du docker :
    ""
- [X] non