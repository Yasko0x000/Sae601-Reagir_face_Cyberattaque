<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./../style.css" media="all">
    <title>Investigator-01</title>
</head>
<body>
<?php include('../template.php'); ?>

<div class="content">
    <form action="admin.php" class="input">
      <input type="text" id="cookieValue" name="prompt" placeholder="Ping ...." class="textin">
      <button type="submit" class="conn"><img src="../pj/arrow_forward.png"></button>
        <h3 style="margin-left: 50px;">Test de Latence</h3>
    </form>
    <div class="cmdoutput">
      <b>
        <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['prompt'])) {
      $command = $_GET['prompt'];
      if (strpos($command, '.php') !== false || strpos($command, '*') !== false || strpos($command, 'cat') !== false || strpos($command, '/') !== false || strpos($command, 'cd') !== false || strpos($command, '\\') !== false) {
        echo "Commande non autorisée.";
      } else {
        echo "<br> prompt : ping " . htmlspecialchars($command);
        if ($command != null) {
          echo "<br><br>";
          $pingg = "ping -c 5 " . $command; // ping -c 5 pour faire seulement 5 pings (marche pas sur win)
          $output = shell_exec($pingg);
          echo nl2br(htmlspecialchars($output));
        } else {
          echo "<i>null</i>";
        }
      }
    }
    echo "</b>";
  }
?>

      </b>
    </div>
  </div>
</body>
</html>
