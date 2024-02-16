# Titre : Challenge Base de données
# Catégorie : Web
## Équipe : Web
## Personnes : Ilyas TUNAY
## Description - Énoncé :


Ce challenge consiste à pouvoir se connecter à la base de données en faisant une injection SQL et de trouver le Flag qui est encodé.

# Solution :

Premièrement, il faut réussir la connexion à la base de données donc réussir l'injection. Une injection de cette sorte fonctionnera => ' OR '1'='1' -- ( en mettant bien l'espace suite au tirait pour les commentaires, sinon ça ne fonctionnera pas). Lorsque l'injection est réussi un message "Connexion réussie" est affiché puis une table "utilisateurs" avec environ 200 utilisateurs sont affichés. Le premier utilisateur se nomme "indice1" avec son mot de passe qui précise comme quoi le flag est encodée. Il y a un deuxième utilisateurs "indice2" caché en bas qui précise que le flag est encodé en Base64. Ensuite l'utilsateur à juste à trouver l'utilsateur "admin" avec son mot de passe puis le décodé simplement en base64 pour obtenir le bon flag. 

Petite précision, un CTRL F pour chercher "admin" ne marchera pas si facilement car j'ai crée des utilisateurs qui sont nommées "noadmin". 

# flag : secret_CTF

# Docker (Merci de commenter votre Dockerfile):
#Utiliser une image PHP avec Apache
#Dockerfile
FROM php:apache

#Copier les fichiers de l'application dans le conteneur
COPY . /var/www/html

#Installer les extensions PHP nécessaires (si besoin)
#RUN docker-php-ext-install <extension>

#Installer l'outil mysqli pour la connexion à MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

#Définir le répertoire de travail
WORKDIR /var/www/html

#Exposer le port 80 pour l'accès HTTP
EXPOSE 80

#CMD ["apache2-foreground"] # Si vous utilisez une version récente de l'image PHP avec Apache.

#docker-compose.yml
version: '3'

services:
  web:
    build:
      context: .
      dockerfile: Dockerfile
    ports:
      - "8080:80"
    volumes:
      - ./index.php:/var/www/html/index.php
      - ./style.css:/var/www/html/style.css
    depends_on:
      - db
  db:
    image: mysql:8.2
    environment:
      MYSQL_DATABASE: ctf
      MYSQL_ROOT_PASSWORD: root
    volumes:
      - ./ctf.sql:/docker-entrypoint-initdb.d/ctf.sql
