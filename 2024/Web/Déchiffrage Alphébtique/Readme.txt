# Titre : Déchiffrage Alphabétique
# Catégorie : Web
## Équipe : Web
## Personnes : Ilyas TUNAY
## Description - Énoncé :


Le challenge "Déchiffrage Alphabétique" consiste à décoder un message chiffré à l'aide d'un chiffrement alphabétique.  

# Solution :

Le défi consiste à retrouver dans un premier temps le flag caché qui est donc chiffré et le texte original en décalant chaque lettre à la lettre d'avant (par exemple pour "t" on aura donc "s"). 

# flag : secretflag

# Docker (Merci de commenter votre Dockerfile):

FROM php:7.4-apache

# Copier les fichiers de votre projet dans le conteneur
COPY . /var/www/html

# Exposer le port 80 pour accéder au serveur web
EXPOSE 80

# Commande par défaut pour démarrer Apache dans le conteneur
CMD ["apache2-foreground"]