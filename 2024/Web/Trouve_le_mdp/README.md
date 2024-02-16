```
# Titre : Trouve le mdp
# Catégorie : Web
## Équipe : Web
## Personnes : Ibrahim D
## Description - Énoncé :

Serais-tu trouver le drapeau ? Utilise de t'a curiosité !

# Solution :

Utilise le code source pour trouver la solution !

# flag : SimpleFlag
# Docker (Merci de commenter votre Dockerfile):
- [X] oui :
    - Explication du fonctionnement du docker : Il y a deux fichier qui fonctionne avec ce docker, index.html et Dockerfile
    "FROM nginx:alpine: Cela indique que vous utilisez l'image officielle de Nginx basée sur Alpine Linux comme image de base.

COPY index.html /usr/share/nginx/html: Cette instruction copie le fichier index.html depuis le répertoire local (où se trouve le Dockerfile) vers le répertoire /usr/share/nginx/html à l'intérieur du conteneur. Cela remplace le fichier par défaut d'index d'Nginx par votre propre fichier.

EXPOSE 80: Cela indique que le conteneur exposera le port 80, qui est le port par défaut utilisé par Nginx pour le trafic HTTP."
- [ ] non
```