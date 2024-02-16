<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./../style.css" media="all">
	<title>Cookie-Jar-01</title>
</head>
<body>
<?php include('../template.php'); ?>

<div class="content">
    <?php
    echo "<b class='marged'>Nom d'utilisateur : ";

        $username = $_COOKIE['username'];
        $status = $_COOKIE['status'];
        
        echo $username;
        echo "</b><br>";
        echo "<b class='marged'>Connecté en temps que : ";
        if ($status === 'admin') {
            echo $status; echo " // Bien joué, le Flag est : UgotZEflag";
        } else {
            echo $status;
        }
        echo "</b>";
    ?>
</div>

</body>
</html>