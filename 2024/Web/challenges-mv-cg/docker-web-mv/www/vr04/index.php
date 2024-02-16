<?php
if (!isset($_GET['file']) || empty($_GET['file'])) {
    $_GET['file'] = 'user.php';
} else {
    if (strpos($_GET['file'], '/') !== false) {
        include('../template.php');
        echo "<link rel='stylesheet' type='text/css' href='./../style.css' media='all'>";
        die("<br><b class='marged'>Accès non autorisé !</b>");
    }
}
include($_GET['file']);
?>
