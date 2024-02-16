FROM php:7.4-apache

# Copier les fichiers de votre projet dans le conteneur
COPY . /var/www/html

# Exposer le port 80 pour accéder au serveur web
EXPOSE 80

# Commande par défaut pour démarrer Apache dans le conteneur
CMD ["apache2-foreground"]
