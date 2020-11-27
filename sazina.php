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
    <title>Saziņa</title>

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
    <div class="col-sm-3" style="background-color:mediumseagreen">
        <h2>!!!UZMANĪBU!!!</h2>
        <p>Ja arī <b>TU</b> vēlies spēlēt izcilajā RVT eSports komandā, tad tev ir dota iespēja izpildīt šo formu kurā mēs vislabāk uzzināsim vai piederies mūsu komandai vai nē.
            <br> <b>Iespēja ir visiem, pamēģini arī TU!</b></p>
    </div>
    <div class="col-sm-6" style="background-color:seagreen">
        <form action="#">
            <div class="form-group">
                <label for="name"><h4><small>Vārds:</small></h4></label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="surname"><h4><small>Uzvārds:</small></h4></label>
                <input type="text" class="form-control" id="surname" name="surname">
            </div>
            <div class="form-group">
                <label for="course"><h4><small>Kurss:</small></h4></label>
                <input type="text" class="form-control" id="course" name="course">
            </div>
            <h4><small>Dzimums:</small></h4>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio1" name="example1">
                <label class="custom-control-label" for="customRadio1">Vīrietis</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio2" name="example2">
                <label class="custom-control-label" for="customRadio2">Sieviete</label>
            </div>
            <h4><small>Mīļākie ieroči:</small></h4>
            <div class="custom-control custom-checkbox mb-3 custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">AWP</label>
            </div>
            <div class="custom-control custom-checkbox mb-3 custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
                <label class="custom-control-label" for="customCheck1">AK-47</label>
            </div>
            <div class="custom-control custom-checkbox mb-3 custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck2" name="example1">
                <label class="custom-control-label" for="customCheck2">M4A4</label>
            </div>
            <div class="custom-control custom-checkbox mb-3 custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck3" name="example1">
                <label class="custom-control-label" for="customCheck3">Deagle</label>
            </div>
            <div class="custom-control custom-checkbox mb-3 custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck4" name="example1">
                <label class="custom-control-label" for="customCheck4">Scout</label>
            </div>
            <div class="custom-control custom-checkbox mb-3 custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck5" name="example1">
                <label class="custom-control-label" for="customCheck5">SG 553</label>
            </div>
            <div class="custom-control custom-checkbox mb-3 custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck6" name="example1">
                <label class="custom-control-label" for="customCheck6">AUG</label>
            </div>
            <select class="custom-select custom-select mb-3">
                <option selected>Izvēlieties savu mīļāko karti</option>
                <option value="mirage">Mirage</option>
                <option value="cache">Cache</option>
                <option value="train">Train</option>
                <option value="inferno">Inferno</option>
                <option value="overpass">Overpass</option>
                <option value="vertigo">Vertigo</option>
                <option value="dust">Dust 2</option>
                <option value="nuke">Nuke</option>
            </select>
            <br>
            <button type="submit" class="btn btn-primary">Iesniegt formu</button>
        </form>
        <p>Ar citiem jautājumiem vērsties: <br> <b>patriks.jasinovics@gmail.com</b> vai zvanīt <b>tlr. 22182017</b>  </p>
    </div>
    <div class="col-sm-3" style="background-color:mediumseagreen">
        <h3>Formas noteikumi</h3>
        <p>Ja forma netiks izpildīta pilnīgi patiesi, pieteikumu par pievienošanos komandā mēs atteiksim. Visi esošie spēlētāji šo formu ir izpildījuši godprātīgi.</p>
    </div>
    <div class="col-sm footer" style="background-color: darkgreen"><p> © 2019 Patriks Jasinovičs™  All rights reserved </p></div>
</div>
</div>
</body>
</html>
