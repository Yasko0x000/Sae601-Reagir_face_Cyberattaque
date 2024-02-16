// Fonction pour afficher le popup
function showPopup() {
    // Sélectionne l'élément avec l'ID 'popup' et modifie son style pour le rendre visible
    document.getElementById('popup').style.display = 'block';
}

// Fonction pour vérifier le mot secret
function verifierMotSecret() {
    // Récupération de la valeur du champ motSecret et conversion en minuscules
    var motSecret = document.getElementById('motSecret').value.toLowerCase();

    // Vérification du mot secret
    if (motSecret === 'linux') {
        // Alerte de victoire et redirection vers la page gagne.html
        alert('T\'as gagné !');
        window.location.href = 'gagne.html';
    } else {
        // Alerte de défaite et redirection vers la page perdu.html
        alert('Perdu !');
        window.location.href = 'perdu.html';
    }
}
