<section class="panel b-yellow" id="2">
    <article class="panel__wrapper">
        <div class="panel__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="about-content">
                            <div class="heading">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="about-box-content">
                                        <?php the_post_thumbnail('spot'); ?>
                                    </div>
                                </div>
                                <div class="col-md-7 col-md-offset-5">
                                    <div class="about-box-text">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_excerpt(); ?></p>
                                        <div class="primary-button">
                                            <a href="<?php the_permalink(); ?>" class="button big wide smooth-scroll-middle"><?php _e('More' , 'SomethingNew'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>