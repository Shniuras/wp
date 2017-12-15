<?php get_header(); ?>
<section class="panel b-blue" id="1">
    <article class="panel__wrapper">
        <div class="panel__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="home-content">
                            <div class="home-heading">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="home-box-content">
                                        <div class="left-text">
                                            <p><?php the_excerpt(); ?></p>
                                            <div class="primary-button">
                                                <a href="<?php the_permalink(); ?>" class="button big wide smooth-scroll-middle"><?php _e('More' , 'SomethingNew'); ?>
                                            </div>
                                        </div>
                                        <div class="right-image">
                                            <?php the_post_thumbnail('pic'); ?>
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
<?php get_footer(); ?>
