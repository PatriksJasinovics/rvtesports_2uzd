<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./libs/lightbox/css/lightbox.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Galerija</title>
</head>
<body style="background-color: darkgreen">
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:darkgreen">
    <img src="img/RVT_logo_small.png" alt="RVT_logo" style="width:40px;">
    <a class="navbar-brand" href="index.php">RVT eSports</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Sākums</a>
            </li>
            <li class="nav-item">
                <a href="sazina.php" class="nav-link">Saziņa</a>
            </li>
            <li class="nav-item">
                <a href="kontakti.php" class="nav-link">Kontakti</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Galerija</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="galerija.php">Foto Galerija</a>
                    <a class="dropdown-item" href="video_galerija.php">Video Galerija</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="donate.php" class="nav-link">Atbalsts</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container-fluid">
<div class="row" style="padding-top: 30px">
    <div class="col-md-3" style="background-color:mediumseagreen">
        <h2>Foto Galerija</h2>
        <p>Šajā fotogrāfiju sadaļā varēsiet redzēt fotomirkļus no <b> RVT eSports</b> komandas spēlēm, kā arī rezultātu apkopojumus.</p>
    </div>
    <div class="col-md-9" style="background-color:seagreen">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 item"><a href="img/RVT_vs_RJV.PNG" data-lightbox="example-set"><img alt="rvtvsrjv" class="img-fluid" src="img/RVT_vs_RJV.PNG" /></a></div>
            <div class="col-sm-12 col-md-6 col-lg-4 item"><a href="img/RVT_vs_RJV1.PNG" data-lightbox="example-set"><img alt="rvtvsrjv1" class="img-fluid" src="img/RVT_vs_RJV1.PNG" /></a></div>
            <div class="col-sm-12 col-md-6 col-lg-4 item"><a href="img/RVT_knife.PNG" data-lightbox="example-set"><img alt="rvtknife" class="img-fluid" src="img/RVT_knife.PNG" /></a></div>
            <div class="col-sm-12 col-md-6 col-lg-4 item"><a href="img/game_score.PNG" data-lightbox="example-set"><img alt="rvtscore" class="img-fluid" src="img/game_score.PNG" /></a></div>
        </div>
    </div>
    <div class="col-sm footer" style="background-color: darkgreen"><p> © 2019 Patriks Jasinovičs™  All rights reserved </p></div>
</div>
</div>
<script src="./libs/lightbox/js/lightbox.js"></script>
</body>
</html>
