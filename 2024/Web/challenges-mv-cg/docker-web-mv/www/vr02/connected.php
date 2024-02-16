<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./../style.css" media="all">
	<title>Interceptor-01</title>
</head>
<body>
<?php include('../template.php'); ?>

<div class="content">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        echo "<b class='marged' >Connecté en temps que : " . htmlspecialchars($username) . "</b>";
        if ($username == "admin") {
            echo "<b class='marged'> Bien Joué, le Flag est : ceciESTleFLAGdeCEchallenge";
        }  
    }
    ?>
</div>

</body>
</html>