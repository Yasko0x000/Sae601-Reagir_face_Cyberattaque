Titre : lfi_3
Catégorie : web
Équipe : web
Personnes : Ibrahim D
Description - Énoncé :
Le but de ce challenge est de chercher partout. En fouillant, vous retrouverez des indices vous permettant de trouver le flag !

Solution :
La solution à ce projet consiste à parcourir le contenu des différents fichiers. Ensuite, il faut effectuer une injection de fichier local (Local File Inclusion - LFI) pour trouver le fichier "admin.txt" qui contient le flag.

Flag : 327a6c4304ad5938eaf0efb6cc3e53dc
Docker (Merci de commenter votre Dockerfile):
 Oui :

J'ai créé un Dockerfile permettant de télécharger Apache. Ensuite, j'ai copié le contenu des fichiers présents dans le dossier HTML de ma machine locale dans le conteneur. J'ai également ouvert le port 80 du conteneur pour permettre la communication avec le serveur web. Il y a un dossier HTML avec 3 fichiers et un dossier "admin.txt" qui contient le flag dans le dossier secret.
<
