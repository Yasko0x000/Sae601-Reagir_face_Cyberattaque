document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var titreValue = document.getElementById('titre').value;
    var messageValue = document.getElementById('message').value;

    document.getElementById('display-nom').textContent = titreValue;
    document.getElementById('display-commentaire').textContent = messageValue;

if (messageValue.trim() === "alert('POP')") {
        alert('Flags :hoppopup');
    }
});
