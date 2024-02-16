<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./../style.css" media="all">
    <title>Interceptor-02</title>
</head>
<body>
<?php include('../template.php'); ?>

<div class="content">
    <form id="loginForm" action="connected.php" method="POST" class="input">
        <input type="text" id="usernameInput" name="username" placeholder="Chargement..." class="textin">
        <input type="hidden" id="passwordInput" name="password">
        <button type="button" id="submitButton" class="conn"><img src="../pj/arrow_forward.png"></button>
    </form>
</div>

<script>
    fetch('data.json')
        .then(response => response.json())
        .then(data => {
            var userStatus = data.userdata[0].status;
            var userPassword = data.userdata[0].password;
            document.getElementById('usernameInput').placeholder = userStatus;
            document.getElementById('passwordInput').value = userPassword;
        })
        .catch(error => console.error('Erreur lors de la récupération du fichier JSON:', error));
    document.getElementById('submitButton').addEventListener('click', function() {
        document.getElementById('loginForm').submit();
    });
</script>
</body>
</html>
