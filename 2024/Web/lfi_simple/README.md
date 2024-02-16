```
Titre : lfi_simple
Catégorie : web
Équipe : web
Personnes : Ibrahim D
Description - Énoncé :
Le but de ce challenge est de débuter en lfi. Voici un exemple très simple

Solution :
La solution à ce accéder au fichier home.php. Ensuite, il faut effectuer une injection de fichier local (Local File Inclusion)
Flag : lfi
Docker (Merci de commenter votre Dockerfile):
 Oui :

J'ai créé un Dockerfile permettant de télécharger Apache. Ensuite, j'ai copié le contenu des fichiers présents dans le dossier HTML de ma machine vers le docker, enfin j'ai exposé le port 80
```