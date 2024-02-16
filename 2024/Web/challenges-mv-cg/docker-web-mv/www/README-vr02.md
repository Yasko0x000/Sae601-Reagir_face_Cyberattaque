# Titre : interceptor-01

# Catégorie : WEB

## Équipe : WEB

## Personnes : Christophe G-A, Marius V

## Description - Énoncé :

Vous êtes sur une page de connexion mais vous n'avez pas accès à l'espace d'administration. La légende raconte qu'une requête POST vous limite, selon les dires le chevalier "Burp Suite" vous aidera dans vôtre quête.

# Solution :

quand on clique sur le bouton de connexion on est redirigé sur une page de connexion mais rien ne s’affiche, il faut donc utiliser le proxy burpsuite pour modifier la valeur du $\_POST à username=admin

# URL de connexion : ...../vr02/

# flag : ceciESTleFLAGdeCEchallenge

# Docker (Merci de commenter votre Dockerfile):

- [x] oui :
  - Explication du fonctionnement du docker : "docker-compose"
- [ ] non