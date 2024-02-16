# Titre : interceptor-02

# Catégorie : WEB

## Équipe : WEB

## Personnes : Christophe G-A, Marius V

## Description - Énoncé :

Vous êtes sur une page de connexion mais vous n'avez pas accès à l'espace d'administration. La légende raconte qu'une requête POST vous limite, selon les dires le chevalier "Burp Suite" vous aidera dans vôtre quête. Mais attention la clef du donjon se situerai dans l'espace "réseau" associé.

# Solution :

Comme pour le challenge interceptor-01 on doit utiliser burp suite pour modifier le contenu d'un POST, sauf que on doit récupérer un mot de passe dans un fichier JSON contenant les données des utilisateurs, on a un mot de passe admin qui sont donnée via un json, si on fait f12 puis que l’on va dans network puis si on actualise la page on peut voir les fichiers connectés, ainsi en faisant un double click sur data.json on peut voir l’intégralité du json avec des information admin, si avec burp suite on rentre le mdp : on a le flag

# URL de connexion : ...../vr03/

# flag : FLAG-OUI

# Docker (Merci de commenter votre Dockerfile):

- [x] oui :
  - Explication du fonctionnement du docker : "docker-compose"
- [ ] non