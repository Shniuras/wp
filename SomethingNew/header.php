<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title(); ?></title>
    <!--
    Stacked Template
    http://www.templatemo.com/tm-505-stacked
    -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/templatemo-style.css">

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="nav">
    <div class="burger">
        <div class="burger__patty"></div>
    </div>

    <ul class="nav__list">
        <li class="nav__item">
            <a href="#1" class="nav__link c-blue"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-icon.png" alt=""></a>
        </li>
        <li class="nav__item">
            <a href="#2" class="nav__link c-yellow scrolly"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-icon.png" alt=""></a>
        </li>
        <li class="nav__item">
            <a href="#3" class="nav__link c-red"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/projects-icon.png" alt=""></a>
        </li>
        <li class="nav__item">
            <a href="#4" class="nav__link c-green"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-icon.png" alt=""></a>
        </li>
    </ul>
</nav>