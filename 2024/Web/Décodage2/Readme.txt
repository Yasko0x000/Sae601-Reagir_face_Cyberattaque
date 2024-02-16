# Titre : Décodage
# Catégorie : Web
## Équipe : Web
## Personnes : Ilyas TUNAY
## Description - Énoncé :


Le challenge "Décodage" consiste à décoder un message une méthode spécifique en cybersécurité. L'utilisateur sera guidée durant le challenge pour savoir que le message à été finalement codé avec la fonction BTOA.  

# Solution :

Le flag est caché dans le code source, plus précisément dans le code CSS. L'utilsateur trouvera dans la dernière page du challenge "Contact" un fichier information.txt disant simplement si l'utilsateur connait la fonction btoa. Cela donne une information que l'utilisateur devra chercher s'il en a jamais entendu parler. Le flag qui est caché dans le code CSS est "VGhlX0ZsYWdfSXNfR29vZA== ". Il devra donc utiliser sa fonction inverse ATOB("VGhlX0ZsYWdfSXNfR29vZA==") pour trouver le bon flag.

# flag : The_Flag_Is_Good

# Docker (Merci de commenter votre Dockerfile):

FROM php:7.4-apache

# Copier les fichiers de votre projet dans le conteneur
COPY . /var/www/html

# Exposer le port 80 pour accéder au serveur web
EXPOSE 80

# Commande par défaut pour démarrer Apache dans le conteneur
CMD ["apache2-foreground"]
