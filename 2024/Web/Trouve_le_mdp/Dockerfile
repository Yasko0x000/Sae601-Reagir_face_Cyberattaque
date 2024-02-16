# Dockerfile
#"FROM nginx:alpine: Cela indique que vous utilisez l'image officielle de Nginx basée sur Alpine Linux comme image de base.
FROM nginx:alpine

# Cette instruction copie le fichier index.html depuis le répertoire local (où se trouve le Dockerfile) vers le conteneur.
COPY index.html  /usr/share/nginx/html
# Cela indique que le conteneur exposera le port 80, qui est le port par défaut utilisé par Nginx pour le trafic HTTP
EXPOSE 80

