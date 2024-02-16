# **Titre : Inclusion de Fichiers**

# **Catégorie : Sécurité Web**

## **Équipe : Akatsuki Security**

## **Personnes : EL HAMIOUI Yassine**

## **Description - Énoncé :**

Le défi d'inclusion de fichiers consiste à exploiter une vulnérabilité dans une application web qui permet d'inclure dynamiquement des fichiers externes. Vous serez confronté à une page qui affiche du contenu dynamique en incluant un fichier spécifié via un paramètre GET. L'objectif est de tirer parti de cette fonctionnalité pour inclure un fichier contenant le flag et ainsi obtenir le flag.

# **Solution :**

1. Exploration de l'application : Commencez par explorer la page index.php et identifiez comment elle inclut dynamiquement des fichiers externes en fonction de la valeur du paramètre `page` dans l'URL.
2. Identification de la vulnérabilité : Remarquez que le paramètre `page` est récupéré directement à partir de la requête GET et inclus dans le code PHP sans aucune validation. Cela peut permettre à un attaquant d'inclure n'importe quel fichier du serveur.
3. Exploitation de la vulnérabilité : Utilisez un navigateur ou un outil tel que cURL pour envoyer une requête GET avec le paramètre `page` pointant vers le fichier contenant le flag. Par exemple : `?page=flag`.
4. Capture du flag : Si l'attaque est réussie, la page affichera le contenu du fichier inclus, y compris le flag.

## **Flag:** Akatsuki_INCUSION_FICHIERS_CTF_Reussi

# **Docker :**

- [x] Oui :
  - Explication du fonctionnement du Docker : Le fichier Dockerfile fourni crée un environnement isolé contenant l'application web vulnérable. Il utilise l'image PHP 7.4 avec Apache comme serveur web. Le contenu de l'application est copié dans le répertoire `/var/www/html` du conteneur. Le conteneur expose le port 80 pour permettre l'accès au serveur web. Enfin, la commande `apache2-foreground` est exécutée pour démarrer le serveur Apache dans le conteneur.
- [ ] Non