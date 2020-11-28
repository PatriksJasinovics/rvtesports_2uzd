<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
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
    <title>RVT eSports</title>

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
            <h2>Jaunumi</h2>
            <br>
            <p>Diemžēl drīzumā nav paredzēta neviena spēle, bet iepriekšējo spēļu mirkļus variet redzēt sadaļā <b>Galerija</b></p>
        </div>
        <div class="col-sm-4" style="background-color:seagreen">
            <h1>Rīgas Valsts tehnikuma <br>eSports komandas login forma</h1> <br>
            <span id="login">
    <div class="login" id="login">
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <form action="index.php#login" method="post">
                        <div class="form-group">
                            <h3><label for="email">E-pasts</label></h3>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-pasts" name="email">
                        </div>
                        <div class="form-group">
                            <h3><label for="password">Parole/ID</label></h3>
                            <input type="password" class="form-control" id="password" placeholder="Parole/ID" name="password">
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
        if(empty($_POST['email']))
        {
            echo "<b>E-pasts:</b> NEVAR BŪT TUKŠS</br>";
        } else {
            echo "<b>E-pasts: </b>{$_POST['email']}</br>";
        }
        if(empty($_POST['password']))
        {
            echo "<b>Parole/ID:</b> NEVAR BŪT TUKŠS</br>";
        } else {
            if(preg_match('~[aA-zZ]+~', $_POST['password'])) {
                echo "<b>Parole/ID: </b>ID NEVAR SATURĒT BURTUS</br>";
            } else {
                echo "<b>Parole/ID: </b>{$_POST['password']}</br>";
            }
        }
}
?>

            <p><b>Šī pašlaik ir viena no labākajām Latvijas skolu eSports komandām Latvijā.</b> <br> Mūsu moto ir: <b>Vairāk nekā CS:GO komanda</b>
                <br></p>
            <p>Potenciāls ir neierobežots un iespējas uzvarām ir neskaitāmas, tomēr līdz šim gan nav veicies ne pret Rīgas tehniskās koledžas komandu, ne pret Rīgas Juglas vidusskolas eSports komandu.
                <br>Taču tas mūs neapturēs censties un trennēties vēl vairāk lai atspēlētos un pievektu viņus reizi par visām reizēm!</p>
        </div>
        <div class="col-sm-4" style="background-color:mediumseagreen">
            <p>Mājaslapas sākumlapā varēsiet redzēt aprakstu par komandu un ziņas par turpmākajām spēlēm.</p>
            <br>
            <b>Atceries!</b>
            <p>Katras sadaļas kreisajā pusē varēsiet izlasīt par ko ir konkrētā sadaļa.</p>
        </div>
        <div class="col-sm footer" style="background-color: darkgreen"><p> © 2019 Patriks Jasinovičs™  All rights reserved </p></div>
    </div>
    </div>
</body>
</html>
