<?php
get_header();
?>
<section class="hero">
    <div class="hero-line">
        <h1>sociologijos akademija
        </h1>
    </div>
</section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="about">
        <div class="container">
            <div class="about-mobile">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="row">
                <div class="col-md-6 about-content">
                    <div class="rotated-about">
                        <h1><?php the_title(); ?>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                        </h1>
                    </div>
                    <div class="video-holder">
                        <?php the_post_thumbnail('apie'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <p><?php the_content(); ?></p>
                    </div>
                    <div class="about-more">
                        <a href="<?php the_permalink(67); ?>">Skaityti daugiau
                            <span>>></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
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
            <a href="<?php the_permalink(69); ?>"> Skaityti daugiau </a><span>>></span>
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
        <a href="<?php the_permalink(78); ?>">Skaityti daugiau</a>
        <span>>></span>
    </div>
    </div>
    </div>
</section>
<!-- Galerija -->
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
            <a href="<?php the_permalink(81); ?>">Žiūrėti daugiau</a>
            <span>>></span>
        </div>
    </div>
</section>
<!-- Pabaiga galerijos -->
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
            <a href="<?php the_permalink(84); ?>">Skaityti daugiau</a>
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
            <a href="<?php the_permalink(73) ?>">Skaityti daugiau</a>
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
<?php get_footer() ?>
