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
	<div class="input" >
		<input type="text" id="cookieValue" placeholder="username" class="textin">
		<button onclick="setUserCookie()" class="conn"> <img src="../pj/arrow_forward.png"> </button>
	</div>


</div>

<script type="text/javascript">
function setUserCookie() {
  var cookieValue = document.getElementById('cookieValue').value;
  setCookie('username', cookieValue, 7); // Utilise la fonction 'setCookie' de l'exemple précédent
  window.location.href = 'connected.php'; // Redirection vers 'connected.php'
}

function setCookie(name, value, daysToExpire) {
  var date = new Date();
  date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
  document.cookie = name + "=" + value + "; expires=" + date.toUTCString() + "; path=/";
  document.cookie = "status" + "=" + "user" + "; expires=" + date.toUTCString() + "; path=/";
}

</script>
</body>
</html>