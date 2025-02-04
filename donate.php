<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Atbalsts</title>

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
    <div class="col-sm-4" style="background-color:mediumseagreen">
        <h2>Atbalsts</h2>
        <p>Šajā sadaļā variet redzēt vairākas iespējas kā atbalstīt RVT eSports komandas attīstību un spēlēšanas kvalitāti.
            <br> Ar jauniegūto finansiālo atbalstu spēlētāji varētu iegādāties jaunu perifēriju vai vienkārši to iztērēt CS:GO konteineros.</p>
    </div>
    <div class="col-sm-4" style="background-color:seagreen">
        <h3>Iespējas mūs atbalstīt:</h3> <br>
        <ul class="list-unstyled">
            <li>
                <h5>Ar PayPal pārskaitījumu: </h5>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="R267J2TAGPBN2" />
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                    <img alt="" border="0" src="https://www.paypal.com/en_LV/i/scr/pixel.gif" width="1" height="1" />
                </form>
            </li>
            <br>
            <li><h5>Vai sūtot naudu uz kontu:</h5><p class="text-uppercase">LV07HABA0551039301575</p></li>
            <br>
            <li><h5>Vai ziedojot CS:GO skinus</h5> <a href="https://steamcommunity.com/tradeoffer/new/?partner=163677314&token=2Sci675N" class="text-dark">Šajā mājaslapā</a></li>
        </ul>
        <br>
        <h4>Liels paldies par atbalstu! <br> Vai ir kādi ieteikumi?</h4>
        <span id="ieteikumi">
    <div class="ieteikumi" id="ieteikumi">
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <form action="donate.php#ieteikumi" method="post">
                        <div class="form-group">
                            <h3><label for="name">Vārds</label></h3>
                            <input type="name" class="form-control" id="name" aria-describedby="Vārds" placeholder="Vārds" name="name">
                        </div>
                        <div class="form-group">
                            <h3><label for="email">E-pasts</label></h3>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-pasts" name="email">
                        </div>
                        <div class="form-group">
                            <h3><label for="telephone">Telefons</label></h3>
                            <input type="telephone" class="form-control" id="telephone" placeholder="Telefons" name="telephone">
                        </div>
                        <div class="form-group">
                            <h3><label for="textArea">Jūsu ieteikums/jautājums</label></h3>
                            <textarea class="form-control" id="textarea" rows="4" name="suggestion" placeholder="Ieteikums/jautājums"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</span>

<?php
    if(isset($_POST['save'])) {
        if(empty($_POST['name']))
        {
            echo "<b>Vārds:</b> Lauks nevar būt tukšs</br>";
        } else {
            if(preg_match('~[0-9]+~', $_POST['name'])) {
                echo "<b>Vārds:</b> Jūsu vārds nevar saturēt ciparus</br>";
            } else {
                echo "<b>Vārds:</b> {$_POST['name']}</br>";
            }
        }
        if(empty($_POST['email']))
        {
            echo "<b>E-pasts:</b> Lauks nevar būt tukšs</br>";
        } else {
            echo "<b>E-pasts: </b>{$_POST['email']}</br>";
        }
        if(empty($_POST['telephone']))
        {
            echo "<b>Telefons:</b> Lauks nevar būt tukšs</br>";
        } else {
            if(preg_match('~[aA-zZ]+~', $_POST['telephone'])) {
                echo "<b>Telefons: </b>Telefona numurs nevar saturēt burtus</br>";
            } else {
                echo "<b>Telefons: </b>{$_POST['telephone']}</br>";
            }
        }
        echo "<b>Jautājums: </b>{$_POST['suggestion']}";
}
?>

    </div>
    <div class="col-sm-4" style="background-color:mediumseagreen">
        <h4>Divi mūsu spēlētāji arī regulāri strīmo YouTube:</h4>
        <br>
        <ul class="list-unstyled">
            <li><a href="https://www.youtube.com/channel/UC45dRVnvLzcivEU6l24TuOw" class="text-dark">Gatis Gāters jeb Jankinga</a></li>
            <br>
            <li><a href="https://www.youtube.com/channel/UCAheXaCwQvS__2FL5njSyWg" class="text-dark">Artūrs Cukurs jeb ✪denVeR-</a></li>
        </ul>
        <br>
        <h5>Piesekojiet viņu kanāliem! ;)</h5>
    </div>
    <div class="col-sm footer" style="background-color: darkgreen"><p> © 2019 Patriks Jasinovičs™  All rights reserved </p></div>
</div>
</div>
</body>
</html>
