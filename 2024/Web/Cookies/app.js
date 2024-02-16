// Importation des modules express et body-parser
const express = require('express');
const bodyParser = require('body-parser');

// Création d'une application Express
const app = express();

// Définition du port d'écoute du serveur
const PORT = 3000;

// Configuration de body-parser pour traiter les données de formulaire
app.use(bodyParser.urlencoded({ extended: true }));

// Gestion de la requête GET sur la racine ("/")
app.get('/', (req, res) => {
  // Envoie du fichier HTML situé dans le même répertoire que le script
  res.sendFile(__dirname + '/index.html');
});

// Gestion de la requête POST sur la route "/login"
app.post('/login', (req, res) => {
  // Récupération des données du formulaire (nom d'utilisateur et valeur du cookie)
  const username = req.body.username;
  const cookieValue = req.body.cookieValue;

  // Initialisation d'une variable utilisateur
  let user = 'user';

  // Utilisation de la valeur spécifiée pour le cookie et envoi du cookie
  res.cookie(username, 'user');

  // Vérification des droits d'administration avec la valeur du cookie
  if (cookieValue === 'admin') {
    // Réponse pour l'administrateur
    res.send('Welcome, admin! The flag is: IUTN0RDFR');
  } else {
    // Réponse pour l'utilisateur non administrateur
    res.send(`Welcome, ${username}, vous n'avez pas les droits!`);
  }
});

// Démarrage du serveur sur le port spécifié
app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
