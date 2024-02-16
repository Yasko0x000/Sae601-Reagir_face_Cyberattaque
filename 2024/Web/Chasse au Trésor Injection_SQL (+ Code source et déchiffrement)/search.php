<?php
$servername = "db"; // Définition de l'adresse du serveur MySQL
$username = "root"; // Nom d'user MySQL
$password = "root"; // Mdp MySQL
$dbname = "ctf1"; // Nom de la BDD

$conn = new mysqli($servername, $username, $password, $dbname); // Création d'une nouvelle connexion à la base de données

if ($conn->connect_error) { // Vérification de la réussite de la connexion
    die("Connection failed: " . $conn->connect_error); // Arrêt du script avec un message d'erreur en cas d'échec de connexion
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Vérification de la méthode de requête HTTP (POST)
    if (isset($_POST['treasureName'])) { // Vérification de l'existence du champ 'treasureName' dans la requête POST
        // Si le nom du trésor est soumis, recherchez par nom
        $treasureName = $_POST['treasureName']; // Récupération du nom du trésor depuis la requête POST

        // Construis la requête SQL (injection SQL accessible)
        $sql = "SELECT * FROM treasures WHERE name = '$treasureName';"; // Construction de la requête SQL pour rechercher le trésor par son nom

        // Exécute la requête
        $result = $conn->query($sql); // Exécution de la requête SQL

        // Vérifie les résultats
        if ($result->num_rows > 0) { // Vérification du nombre de lignes de résultat
            // Affiche les résultats
            echo "<div class='container'>"; // Début de la balise HTML <div> avec la classe 'container'
            echo "<h1 class='title'>🎉 Trésor trouvé 🎉</h1>"; // Affichage du titre 'Trésor trouvé'
            while ($row = $result->fetch_assoc()) { // Boucle pour parcourir les résultats de la requête SQL
                echo "<p class='result'>Trésor: " . $row["name"] . " | Pos. " . $row["location"] . "</p>"; // Affichage des détails du trésor (nom et position)
                
                // Si le nom du trésor est "Hidden Treasure", affichez un formulaire pour rechercher par emplacement
                if ($row["name"] == "Hidden Treasure") { // Vérification du nom du trésor
                    echo "<!--form method='post'>"; // Commentaire HTML
                    echo "<input type='hidden' name='hiddenTreasure' value='Hidden Treasure'>"; // Champ caché avec la valeur 'Hidden Treasure'
                    echo "<input type='text' name='localisationtrésor' placeholder='Entre la localisation'>"; // Champ de saisie de la localisation
                    echo "<button type='submit' class='button'>Chercher par la localisation</button>"; // Bouton de soumission du formulaire
                    echo "</form-->"; // Fin du formulaire (commenté)
                } 
            }
            echo "</div>"; // Fin de la balise HTML <div>
        } else {
            echo "<div class='container'>"; // Début de la balise HTML <div> avec la classe 'container'
            echo "<h1 class='title'>😔 Trésor non trouvé 😔</h1>"; // Affichage du titre 'Trésor non trouvé'
            echo "<p class='result'>Pas de tresor sous ce nom '" . $treasureName . "'.</p>"; // Message d'erreur si aucun trésor trouvé
            echo "</div>";
        }
    } elseif (isset($_POST['hiddenTreasure']) && $_POST['hiddenTreasure'] == "Hidden Treasure") { // Vérification de l'existence et de la valeur du champ 'hiddenTreasure' dans la requête POST
        // Si le formulaire pour rechercher par location est soumis, recherchez par location
        $localisationtrésor = $_POST['localisationtrésor']; // Récupération de la localisation du trésor depuis la requête POST

        $sql = "SELECT * FROM treasures WHERE location = '$localisationtrésor';"; // Construction de la requête SQL pour rechercher le trésor par son emplacement

        $result = $conn->query($sql); // Exécution de la requête SQL

        // Vérifie les résultats
        if ($result->num_rows > 0) { // Vérification du nombre de lignes de résultat
            // Affiche les résultats
            echo "<div class='container'>"; // Début de la balise HTML <div> avec la classe 'container'
            echo "<h1 class='title'>🎉 Trésor trouvé 🎉</h1>"; // Affichage du titre 'Trésor trouvé'
            while ($row = $result->fetch_assoc()) { // Boucle pour parcourir les résultats de la requête SQL
                echo "<p class='result'>Voyons maintenant ce qui se cache dans le trésor " . $row["name"] . "</p>"; // Affichage du nom du trésor

                // Afficher le flag si la location est "Secret Island"
                if ($row["location"] == "Secret Island") { // Vérification de l'emplacement du trésor
                    echo "<!-- Eh non c'est pas fini, pour découvrir le vrai flag, recherche une méthode de déchiffrement. T'auras besoin de trouver un clé secret pour decrypter le code chiffré, pour cela, il te reste plus qu'à prendre ta .Bmw en .Direction du plus gros circuits de France, le .6 .Cylindes en .Ligne offre une jolie sonorité. Une fois que tu as trouvé la clé pour décrypté le message, visite le site www.ma-calculatrice.fr/crypter-decrypter-message. Tu trouveras finalement le Flag pour réussir ce défi.--> <br><br>Flag : " . $row["flag"]; // Affichage du message et du flag (commenté)
                }
            }
            echo "</div>";
        } else {
            echo "<div class='container'>"; // Début de la balise HTML <div> avec la classe 'container'
            echo "<h1 class='title'>😔 Trésor non trouvé 😔</h1>"; // Affichage du titre 'Trésor non trouvé '
            echo "<p class='result'>Pas de trésor pour cette localisation '" . $localisationtrésor . "'.</p>"; // Message d'erreur si aucun trésor trouvé pour l'emplacement spécifié
            echo "</div>";
        }
    }
}

$conn->close(); // Fermeture de la connexion à la base de données MySQL
?>

<link rel="stylesheet" href="style.css"> <!-- Lien vers le style CSS-->
