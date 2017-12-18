<?php /* Template Name: studijos */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sociologija</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/studijos.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/da7d68fc96.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-yellow">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="mb-logo">
        <a href="index.html"><img src="img/index/logo.png" alt=""></a>
        <h1>STUDIJOS</h1>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-md-auto mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    APIE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="apie.php">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="renginiai.php">RENGINIAI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galerija.php">GALERIJA</a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link logo-link" href="index.html">
                    <div class="logo-holder">
                        <img src="img/logo.png" alt="">
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="studijos.php">STUDIJOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.php">BLOGAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ATSILIEPIMAI</a>
            </li>
    </div>
    <div class="registration-block hidden-dm-down d-none d-lg-block">
        <a href="register.php">REGISTRUOKIS</a>
    </div>
</nav>
<section class="about">

    <h2>Universitetai</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="rotated-about">
                    <h1>STUDIJOS<i class="fa fa-circle" aria-hidden="true"></i></h1>
                </div>
                <img class="img-fluid" src="img/studijos/study1.png"  alt="" data-toggle="modal" data-target=".video-modal">
            </div>
            <div class="col-lg-4 col-xs-12">
                <img class="img-fluid" src="img/studijos/study2.png"  alt="" data-toggle="modal" data-target=".video-modal">
            </div>
            <div class="col-lg-4 col-xs-12">
                <img class="img-fluid" src="img/studijos/study3.png"  alt="" data-toggle="modal" data-target=".video-modal">
            </div>
        </div>
    </div>
    </div>
</section>
<section class="study-points">
    <div class="container">
        <h3>Stojimų balai</h3>
        <div class="row">
            <div class="col-md-6">
                <table style="width: 100%;">
                    <tr class="year">
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th>Istorija</th>
                        <td class="exam">0.4</td>
                    </tr>
                    <tr>
                        <th>Lietuvių kalba</th>
                        <td class="exam">0.2</td>
                    </tr>
                    <tr>
                        <th>Matematika ar IT</th>
                        <td class="test">0.2</td>
                    </tr>
                    <tr>
                        <th>Betkuris kitas dalykas</th>
                        <td class="test">0.2</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table style="width: 100%;">
                    <tr class="year">
                        <th>2018</th>
                    </tr>
                    <tr>
                        <th>Matematika</th>
                        <td class="exam">0.4</td>
                    </tr>
                    <tr>
                        <th>Lietuvių kalba</th>
                        <td class="exam">0.2</td>
                    </tr>
                    <tr>
                        <th>Istorija</th>
                        <td class="test">0.2</td>
                    </tr>
                    <tr>
                        <th>Betkuris kitas dalykas</th>
                        <td class="test">0.2</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table style="width: 100%;">
                    <tr>
                        <td class="exam">0.4</td>
                        <th>- Egzaminai</th>
                    </tr>
                    <tr>
                        <td class="test">0.2</td>
                        <th> - Egzaminai arba metiniai pažymiai</th>
                    </tr>
                </table>

            </div>

        </div>
    </div>
    <h3>Pasiskaičiuok savo balą</h3>
</section>
<section class="form-box">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form">
                    <h4>Turi klausimų? Klausk!</h4>
                    <form class="" action="index.html" method="post">
                        <label for="">Vardas</label>
                        <input type="text" name="" value="">
                        <label for="">El. paštas</label>
                        <input type="email" name="" value="">
                        <label for="">Klausimas</label>
                        <textarea name="name" rows="8"></textarea>
                        <a href="#">Siųsti</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contacts">
    <div class="contact-line">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="yDot">      </div>
                <i class="fa fa-circle fa-3x costum-circle" aria-hidden="true"></i>

                <h1>KONTAKTAI</h1>
            </div>
            <div class="col-lg-3 col-md-12">
                <p><div class="place">

                </div>VU Filosoﬁjos fakultetas,<br>
                Universiteto g. 9/1</p>
            </div>
            <div class="col-lg-3 col-md-12">
                <p><div class="mail">

                </div>www.fsf.vu.lt</p>
            </div>
            <div class="col-lg-3 col-md-12">
                <p><div class="fb">

                </div>FB: Sociologijos Akademija</p>
            </div>
            <div class="col-lg-3 col-md-12">
                <p><div class="phone">

                </div>tel.: best desgigner ever</p>
            </div>
        </div>
    </div>
</section>
<!-- Large modal -->

<div class="modal fade video-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            ...
        </div>
    </div>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</html>
