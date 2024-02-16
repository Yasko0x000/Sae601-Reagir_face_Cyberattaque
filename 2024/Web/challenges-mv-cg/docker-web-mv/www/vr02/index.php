<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./../style.css" media="all">
    <title>Interceptor-01</title>
    <script>
        function validateForm() {
            var username = document.getElementById("cookieValue").value;
            if (username.toLowerCase() === "admin") {
                alert("L'utilisation du nom d'utilisateur 'admin' n'est pas autorisée.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<?php include('../template.php'); ?>

<div class="content">
    <form action="connected.php" method="POST" class="input" onsubmit="return validateForm()">
        <input type="text" id="cookieValue" name="username" placeholder="username" class="textin">
        <button type="submit" class="conn"><img src="../pj/arrow_forward.png"></button>
    </form>
</div>
</body>
</html>