<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sociologija</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
          crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <!--<link rel="stylesheet" href="<?php /*echo get_stylesheet_directory_uri(); */?>/css/blog-single.css">-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/da7d68fc96.js"></script>
    <?php wp_head(); ?>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-yellow">
    <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--        <ul class="navbar-nav m-md-auto mr-auto">
            <li class="nav-item">-->
                <?php
                   $args = array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarSupportedContent',
                            'menu_class' => 'navbar-nav m-md-auto mr-auto',
                    );
                    wp_nav_menu($args);
                ?>
            <!--</li>-->
   <!-- </div>-->
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
<!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-md-auto mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="apie.php">APIE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php /*echo get_stylesheet_directory_uri(); */?>/renginiai.php">RENGINIAI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php /*echo get_stylesheet_directory_uri(); */?>/galerija.php">GALERIJA</a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link logo-link" href="index.html">
                    <div class="logo-holder">
                        <img src="<?php /*echo get_stylesheet_directory_uri(); */?>/img/index/logo.png" alt="">
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php /*echo get_stylesheet_directory_uri(); */?>/studijos.php">STUDIJOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php /*echo get_stylesheet_directory_uri(); */?>/home.php">BLOGAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ATSILIEPIMAI</a>
            </li>
    </div>
    <div class="registration-block hidden-dm-down d-none d-lg-block">
        <a href="register.php">REGISTRUOKIS</a>
    </div>-->
</nav>
