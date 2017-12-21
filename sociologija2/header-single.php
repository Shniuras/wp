<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sociologijos akademija</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blog-single.css">
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-yellow">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="mb-logo">
        <a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-single/img1.png" alt=""></a>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-md-auto mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" href="apie.php">APIE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="renginiai.php">RENGINIAI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galerija.php">GALERIJA</a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link logo-link" href="#">
                    <div class="logo-holder">
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/index.php"><img src="./img/blog-single/img1.png" alt=""></a>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="studijos.php">STUDIJOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="home.php">BLOGAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ATSILIEPIMAI</a>
            </li>
    </div>
    <div class="registration-block hidden-dm-down d-none d-lg-block">
        <a href="#">REGISTRUOKIS</a>
    </div>
</nav>