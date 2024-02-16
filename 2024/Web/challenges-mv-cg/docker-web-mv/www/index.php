<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./style.css" media="all">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>WebHub</title>
</head>
<body>
<img src="pj/ctf.png" class="t-img">
<img src="pj/securt.png" class="t-img">
<div class="t-top" >
    <b>SAÉ 601 - SécuRT - Capture The Flag</b>
    <b style="margin-left: 5%;">- -</b>
    <b id="pageTitle"></b>
</div>

<div class="content">
    <h2 style="margin-left: 40px;">Challenges :</h2>
    <a href="vr01/" class="margedd" style="margin-left: 20px;">
        <div >
            <h3>Cookie-Jar-01</h3>
        </div>
    </a>
    <a href="vr02/" class="margedd">
        <div >
            <h3>Interceptor-01</h3>
        </div>
    </a>
    <a href="vr03/" class="margedd">
        <div >
            <h3>Interceptor-02</h3>
        </div>
    </a>
    <a href="vr04/index.php?file=user.php" class="margedd">
        <div >
            <h3>Investigator-01</h3>
        </div>
    </a>
    <a href="vr05/" class="margedd">
        <div >
            <h3>Cookie-Jar-XSS</h3>
        </div>
    </a>
    <a href="vr06/" class="margedd">
        <div >
            <h3>WebHacker-LFI-01</h3>
        </div>
    </a>
    <a href="vr07/" class="margedd">
        <div >
            <h3>WebHacker-RFI-01</h3>
        </div>
    </a>
</div>



</div>
<script type="text/javascript">
    var pageTitle = document.title;
    document.getElementById("pageTitle").textContent = pageTitle;
</script>
</body>
</html>