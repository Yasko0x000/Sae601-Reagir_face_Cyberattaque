\#Titre: Cookie

## Catégorie : WEB

### Équipe : WEB

### Personnes : Daliani A.

## Description - Énoncé

Bienvenue sur ce défi de sécurité web où vous devez explorer un formulaire de connexion et trouver comment obtenir des droits administrateurs.

## Solution

1. Ouvrez le fichier `index.html` dans un navigateur web.
2. Remplissez le formulaire en utilisant différentes valeurs pour le nom d'utilisateur.
3. Examinez le code JavaScript (`server.js`) pour comprendre comment les droits d'administration sont attribués.
4. Décommenter la bonne partie du code
5. Identifiez la manière de manipuler les cookies pour obtenir des droits administrateurs.
6. Soumettez une requête POST avec les bonnes valeurs pour obtenir le flag.

### Flag

Flag : `IUTN0RDFR`

## Docker

- [x] Oui
- [ ] Non

### Instructions pour exécuter localement :

1. Assurez-vous d'avoir Node.js installé sur votre machine.
2. Ouvrez une console, exécutez `npm init -y` pour initialiser le fichier `package.json`.
3. Exécutez `npm install express body-parser` pour installer les dépendances.
4. Lancez le serveur avec la commande `node server.js`.
5. Ouvrez le fichier `index.html` dans un navigateur et testez différentes valeurs.

!!! Pour la mise en place du challenge editer le fichier package.json !!!!

package.json :

{
"name": "votre-application",
"version": "1.0.0",
"description": "Description de votre application",
"main": "app.js",
"scripts": {
"start": "node app.js"
},
"dependencies": {
"express": "^4.17.1"
}
}