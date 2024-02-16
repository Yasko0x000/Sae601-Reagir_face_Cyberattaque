document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    // Récupérer les valeurs du formulaire
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;

    // Vérifier les identifiants
    if (username === "Daniel" && password === "T3AMN4P5") {
        window.location.href = "welcome.php"; // Rediriger vers la page welcome si les identifiants sont corrects
    } else {
        document.getElementById("errorMessage").innerText = "Identifiant ou mot de passe incorrect"; // Afficher un message d'erreur
    }
});
