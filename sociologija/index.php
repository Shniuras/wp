<?php
get_header();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-yellow">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-md-auto mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    APIE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo get_stylesheet_directory_uri(); ?>/apie.php">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_stylesheet_directory_uri(); ?>/renginiai.php">RENGINIAI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_stylesheet_directory_uri(); ?>/galerija.php">GALERIJA</a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link logo-link" href="index.html">
                    <div class="logo-holder">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/logo.png" alt="">
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_stylesheet_directory_uri(); ?>/studijos.php">STUDIJOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_stylesheet_directory_uri(); ?>/blog.php">BLOGAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ATSILIEPIMAI</a>
            </li>
    </div>
    <div class="registration-block hidden-dm-down d-none d-lg-block">
        <a href="register.php">REGISTRUOKIS</a>
    </div>
</nav>
<section class="hero">
    <div class="hero-line">
        <h1>sociologijos akademija
        </h1>
    </div>

</section>
<section class="about">
    <div class="container">
        <div class="about-mobile">
            <h1>APIE</h1>
        </div>
        <div class="row">
            <div class="col-md-6 about-content">
                <div class="rotated-about">
                    <h1>APIE
                        <i class="fa fa-circle" aria-hidden="true"></i>
                    </h1>
                </div>
                <div class="video-holder">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/team_img.png" alt="" data-toggle="modal" data-target=".video-modal">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <p>Sociologijos akademija - Neformali organizacija, siekianti parodyti moksleiviams kasdienio gyvenimo aspektus iš sociologijos
                        mokslo perspektyvos.</p>
                </div>

                <div class="about-more">
                    <a href="apie.php">Skaityti daugiau
                        <span>>></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="team">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 team-header">
                <h1>
                    <i class="fa fa-circle" aria-hidden="true"></i>KOMANDA</h1>
            </div>
            <div class="col-12 col-md-5 team-text">
                <h4>
                    <span>”</span>Aistė</h4>
                <hr>
                <p>Studijuoju Vilniaus universitete sociologiją - labai įdomu, nesigailiu. Laivalaikiu mėgstu žiūrėti ﬁlmus, gaminti
                    ir fotografuoti. Džiaugiuosi galėdama derinti ir mokslus, ir pomėgius, viskam skirdama laiko, kartais net juos
                    jungdama“
                </p>
            </div>
        </div>
    </div>
    <div class="team-members">
        <div class="team-arrow team-arrow-left">
            <i class="fa fa-4x fa-angle-left" aria-hidden="true"></i>
        </div>
        <div class="team-pick first-member">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/team_img3.png" width="160px" alt="">
            <p></p>
        </div>
        <div class="team-pick second-member">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/team_img2.png" width="160px" alt="">
            <p></p>
        </div>
        <div class="team-pick main-member">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/team_img.png" width="160px" alt="">
            <p>AISTE</p>
        </div>
        <div class="team-arrow team-arrow-right"><i class="fa fa-4x fa-angle-right" aria-hidden="true"></i></div>


    </div>
    <div class="container-fluid">
        <div class="team-more">
            <a href="komanda.php"> Skaityti daugiau </a><span>>></span>
        </div>
    </div>

    </div>

</section>
<section class="events">
    <div class="events-header">
        <h1>
            <i style="padding-right: 5px;" class="fa fa-circle" aria-hidden="true"></i>Renginiai</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="event-block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/event1.png" class="img-fluid" alt="">
                    <div class="event-info">
                        <h3>Subkultūros: mada ar pasipriešinimas?</h3>
                        <div class="date-time">
                            <div class="date-box">
                                <span class="date">04 01</span>
                                <p class="time">10:45 - 17:00</p>
                            </div>
                        </div>
                        <h5>VU Filosofijos fakultetas (Universiteto g. 9/1, 301 aud.)</h5>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4">
                <div class="event-block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/event3.png" class="img-fluid" alt="">
                    <div class="event-info">
                        <h3>Renkantis gyvenimą už visuomenės ribų</h3>
                        <div class="date-time">
                            <div class="date-box">
                                <span class="date">03 18</span>
                                <p class="time">10:45 - 16:30</p>
                            </div>
                        </div>
                        <h5>VU Filosofijos fakultetas (Universiteto g. 9/1, 301 aud.)</h5>
                    </div>
                </div>



            </div>
            <div class="col-12 col-lg-4 d-none d-sm-block">
                <div class="event-block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/event2.png" class="img-fluid" alt="">
                    <div class="event-info">
                        <h3>Kur (Ne) Stoti?</h3>
                        <div class="date-time">
                            <div class="date-box">
                                <span class="date">02 18</span>
                                <p class="time">10:45 - 16:30</p>
                            </div>
                        </div>
                        <h5>VU Filosofijos fakultetas (Universiteto g. 9/1, 301 aud.)</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="events-more">
        <a href="renginiai.php">Skaityti daugiau</a>
        <span>>></span>
    </div>
    </div>
    </div>
</section>
<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <div class="gallery-header">
                    <h1>
                        <i style="padding-right: 5px;" class="fa fa-circle" aria-hidden="true"></i>Galerija</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 ">
                <div class="gallery-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/gallery1.png" alt="">
                </div>
                <div class="gallery-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/gallery2.png" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-img gallery-img-long">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/gallery3.png" alt="">
                </div>
            </div>
        </div>
        <div class="gallery-more">
            <a href="galerija.php">Žiūrėti daugiau</a>
            <span>>></span>
        </div>
    </div>
</section>
<section class="study">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="rotated-study">
                    <h1>STUDIJOS
                        <i class="fa fa-circle" aria-hidden="true"></i>
                    </h1>
                </div>
                <div class="icon-holder">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/study_icon1.png" alt="">
                </div>
                <div class="icon-text">
                    <h3>Stojimų balai</h3>
                    <h5>Konkursinio balo sandara.</h5>
                    <h5>Mokslinio projekto vertinimas.</h5>
                    <h5>Mokslo darbu vertinimas.</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-holder">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/study_icon2.png" alt="">
                </div>
                <div class="icon-text">
                    <h3>Reikalingi egzaminai</h3>
                    <h5>Kokie egzaminai reikalingi.</h5>
                    <h5>Kaip teisingai jiems pasiruošti.</h5>
                    <h5>Papildoma literatūra.</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-holder">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/study_icon3.png" alt="">
                </div>
                <div class="icon-text">
                    <h3>Universitetai</h3>
                    <h5>Universitetų programos.</h5>
                    <h5>Pliusai ir minusai.</h5>
                    <h5>Reikalavimai.</h5>
                </div>
            </div>
        </div>
        <div class="study-more">
            <a href="studijos.php">Skaityti daugiau</a>
            <span>>></span>
        </div>
    </div>
</section>
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <div class="blog-header">
                    <h1>
                        <i style="padding-right: 5px;" class="fa fa-circle" aria-hidden="true"></i>Blogas</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 article">
                <img class="img-fluid blog-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/blog1.jpg" alt="bubble">
                <h4>Prisimenant neabejingumo Mokytoją</h4>
                <hr>
                <p>2017 Kovo 14</p>
                <p>Lygiai prieš metus mus paliko talentingas sociologas, mūsų mylimas bičiuslis prof. Algimantas Valantiejus. Paliko
                    fiziškai, bet jo darbai ir bičiulystės šviesa pasiliko...</p>
            </div>
            <div class="col-md-4 article">
                <img class="img-fluid blog-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/blog2.jpg" alt="bubble">
                <h4>"Vatniko" nuotykiai Lietuvoje: kaip ginklas prieš...</h4>
                <hr>
                <p>2017 Vasario 21</p>
                <p>2012 m. gegužę internete pasirodė "Raška - kvadratinis vatinukas"- pirmasis "vatniko" memas, o nuo 2013 m. lapkričio
                    pabaigos (prasidėjus neramumams Ukrainoje)...</p>
            </div>
            <div class="col-md-4 article">
                <img class="img-fluid blog-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/blog3.jpg" alt="bubble">
                <h4>Kodėl mes, Homo sapiens, dominuojame...</h4>
                <hr>
                <p>2017 sausio 30</p>
                <p>Mes laikome akivaizdžiomis šias tiesas: visi žmonės išsivystė skirtingi ir yra gimę su tam tikromis kintamomis
                    savybėmis, yra gyvi ir siekia malonumų...</p>
            </div>
        </div>

        <div class="blog-more">
            <a href="blog.php">Skaityti daugiau</a>
            <span>>></span>
        </div>
    </div>

</section>
<section class="feedback">
    <div class="container">
        <h1>Atsiliepimai</h1>

        <div class="feedback-flex">
            <div class="feedback-text">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/cite.png" alt="kabutes" style="margin-left: 50px">
                <div class="feedback-text-arrow">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/left.png" class="arrow-left">
                    <p>Paskaitos niekad neprailgdavo, įdomūs svečiai ne tik suteikė praktinių žinių, bet ir įkvėpė pačiai analizuoti
                        ir mokytis iš savo aplinkos. Puikiai sugalvotos užduotys, linksmos akimirkos ir draugiškas kolektyvas - apibūdina
                        Sociologijos akademiją.</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/right.png" class="arrow-right">
                </div>

                <p class="feedback-person">Nida</p>
                <div class="feedback-more">
                    <a href="#">Skaityti daugiau</a>
                    <span>>></span>
                </div>
            </div>
        </div>



    </div>

</section>
<section class="contacts">
    <h1>Kontaktai</h1>
    <div class="container contact-cont">
        <div class="row">
            <div class="col-12 col-sm-3 contact-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/location.png">
                <p>VU filosofijos fakultetas, Universiteto g. 9/1</p>
            </div>
            <div class="col-12 col-sm-3 contact-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/mail.png">
                <p>www.fsfvu.lt</p>
            </div>
            <div class="col-12 col-sm-3 contact-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index/fb.png">
                <p>FB: Sociologijos akademija</p>
            </div>
            <div class="col-12 col-sm-3 contact-item">
                <p>tel.:+370********</p>
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
<?php get_footer() ?>
